@extends('layouts.admin-layout')

@section('content')

    <div class="row">
        <div class="card" style="overflow-y: auto">
            <div class="row">
                <div class="col-md-12">
                    <div
                        class="card-header container-fluid d-flex flex-md-row flex-column justify-content-between align-items-md-center gap-1 container-p-x py-3">
                        <div>
                            <h5 class="mb-0">Ads List</h5>
                        </div>
                        <div style="display:contents;">
                            <div class="{{ Auth::user()->user_type == 'user' ? 'd-none' : '' }}" style="display:contents;">
                                <button class="btn btn-primary m-2" style="float:right" type="button"
                                    data-bs-toggle="modal" data-bs-target="#adsCategoryModel"
                                    aria-controls="offCanvasAdd"><i class="bx bx-plus-circle"></i>
                                    Ads Category </button>
                                <button class="btn btn-primary m-2" style="float:right" type="button"
                                    data-bs-toggle="modal" data-bs-target="#cityModal" aria-controls="offCanvasAdd"
                                    onclick="addCity()"><i class="bx bx-plus-circle"></i>
                                    City</button>
                                <button class="btn btn-primary m-2" style="float:right" type="button"
                                    data-bs-toggle="modal" data-bs-target="#categoryModal" aria-controls="offCanvasAdd"
                                    onclick="addCategoryClick()"><i class="bx bx-plus-circle"></i>
                                    Category</button>
                                <button class="btn btn-primary m-2" style="float:right" type="button"
                                    data-bs-toggle="modal" data-bs-target="#subCategoryModal" aria-controls="offCanvasAdd"
                                    onclick="addSubCatClick()"><i class="bx bx-plus-circle"></i>
                                    Sub Category</button>
                            </div>
                            <button class="btn btn-primary m-2" style="float:right" type="button"
                                data-bs-toggle="offcanvas" data-bs-target="#offCanvasAdd" aria-controls="offCanvasAdd"><i
                                    class="bx bx-plus-circle"></i>
                                New Ad</button>
                        </div>
                    </div>
                </div>
            </div>
            <ads-list></ads-list>
        </div>
    </div>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offCanvasAdd" aria-labelledby="offcanvasEndLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasEndLabel" class="offcanvas-title">Add Product</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body my-auto mx-0 flex-grow-0">
            <form id="adsDataForm" name="adsDataForm">
                <div class="col mb-3">
                    <label for="nameWithTitle" class="form-label">Product Name</label>
                    <input type="text" id="productName" name="productName" required class="form-control"
                        placeholder="Product Name" />
                </div>
                <div class="col mb-3">
                    <label for="nameWithTitle" class="form-label">Seller Type</label>
                    <select id="seller_type" name="seller_type" required class="form-control">
                        <option value="" style="display:none">Choose Seller Type</option>
                        <option>Personal</option>
                        <option>Importer</option>
                        <option>Exporter</option>
                        <option>Manufacturer</option>
                        <option>Distributor</option>
                        <option>Wholesaler</option>
                        <option>Dealer</option>
                        <option>Retailer</option>
                        <option>Consultant</option>
                        <option>Repair & Maintenance</option>
                        <option>Service Provider</option>
                        <option>Developer</option>
                        <option>Contractor</option>
                        <option>Supplier</option>
                    </select>
                </div>
                <div class="col mb-3">
                    <label for="nameWithTitle" class="form-label">Cities</label>
                    <select name="city" id="cities" class="form-control" required>
                        <option value="" style="display:none">Select City</option>
                        @if (count($cities) > 0)
                            @foreach ($cities as $item)
                                <option value="{{ $item->id }}">{{ $item->city_name }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <div class="col mb-3">
                    <label for="nameWithTitle" class="form-label">Location</label>
                    <input type="text" id="location" name="location" required class="form-control"
                        placeholder="Location" />
                </div>
                <div class="col mb-3">
                    <label for="nameWithTitle" class="form-label">Cover Image</label>
                    <input type="file" id="product_image" name="image" accept="image/png, image/jpg, image/jpeg"
                        required class="form-control" onchange="coverImageChange(this)" placeholder="Product Image" />
                </div>
                <div class="col mb-3">
                    <label for="nameWithTitle" class="form-label">Product Images</label>
                    <input type="file" id="productImages" name="productImages[]"
                        accept="image/png, image/jpg, image/jpeg" required class="form-control"
                        placeholder="Product Images" onchange="imageSelection(this)" multiple />
                    <span class="text-danger product_images_error d-none" id="product_images_error">Maximum 5 photos
                        allowed</span>
                </div>
                <div class="col mb-3">
                    <div class="d-flex align-items-center justify-content-between">
                        <label for="emailWithTitle" class="form-label">Product Category</label>
                        <button class="btn btn-sm" type="button" onclick="toggleCategory()"><i
                                class="bx bx-plus-circle"></i></button>
                    </div>
                    <input type="text" name="productCategoryText" id="productCategoryText"
                        class="form-control d-none" placeholder="Enter Product Category">
                    <select id="productCategorySelect" name='productCategorySelect'
                        onchange="onCategorySelectChange(this)" required="required" class="form-control">
                        <option style="display:none" value="">Product Category</option>
                        @if (count($product_category) > 0)
                            @foreach ($product_category as $item)
                                <option>{{ $item->category_name }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <div class="col mb-3">
                    <div class="d-flex align-items-center justify-content-between">
                        <label for="emailWithTitle" class="form-label">Product Sub-Category</label>
                        <button class="btn btn-sm" type="button" onclick="toggleSubCategory()"><i
                                class="bx bx-plus-circle"></i></button>
                    </div>
                    <input type="text" name="productSubCategoryText" id="productSubCategoryText"
                        class="form-control d-none" placeholder="Enter Product Sub Category">
                    <select name="productSubCategorySelect" disabled id="productSubCategorySelect" required
                        class="form-control">
                        <option style="display:none" value="">Product Sub Category</option>
                        @if (count($product_sub_category) > 0)
                            @foreach ($product_sub_category as $item)
                                <option data-category="{{ $item->category_name }}">{{ $item->sub_category_name }}</option>
                            @endforeach
                        @endif

                    </select>
                </div>
                <div class="col mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" name="price" id="price" required class="form-control"
                        placeholder="2000" />
                </div>
                <div class="col mb-3">
                    <div class="d-flex align-items-center justify-content-between">
                        <label for="emailWithTitle" class="form-label">Product Conditions</label>
                    </div>
                    <select name="productCondition" required id="productCondition" class="form-control">
                        <option style="display:none" value="">Product Conditions</option>
                        <option name='New'>New</option>
                        <option name="Used">Used</option>
                    </select>
                </div>
                <div class="col mb-3">
                    <div class="d-flex align-items-center justify-content-between">
                        <label for="emailWithTitle" class="form-label">Price Conditions</label>
                        <button class="btn btn-sm" type="button" onclick="togglePriceConditions()"><i
                                class="bx bx-plus-circle"></i></button>
                    </div>
                    <input type="text" name="priceConditionsText" id="priceConditionsText"
                        class="form-control d-none" placeholder="Enter Product Conditions">
                    <select name="priceConditionsSelect" required id="priceConditionsSelect" class="form-control">
                        <option style="display:none" value="">Price Conditions</option>
                        @if (count($price_conditions) > 0)
                            @foreach ($price_conditions as $item)
                                <option>{{ $item->condition_name }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <div class="col mb-3">
                    <div class="d-flex align-items-center justify-content-between">
                        <label for="emailWithTitle" class="form-label">Ad Category</label>
                        <button class="btn btn-sm" type="button" onclick="toggleAdsCategory()"><i
                                class="bx bx-plus-circle"></i></button>
                    </div>
                    <input type="text" name="adsCategoryText" id="adsCategoryText" class="form-control d-none"
                        placeholder="Enter Ads Category">
                    <input class="form-control d-none mt-1" type="color" value="#666EE8" id="adsCategoryColor">
                    <select name="adsCategorySelect" required id="adsCategorySelect" class="form-control">
                        <option style="display:none" value="">Ad Category</option>
                        @if (count($ads_category) > 0)
                            @foreach ($ads_category as $item)
                                <option>{{ $item->ad_category_name }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <div class="col mb-3">
                    <label for="emailWithTitle" class="form-label">Unit</label>
                    <select name="unit" required id="unit" class="form-control">
                        <option value="" style="display:none">Select Unit</option>
                        <option>On Call</option>
                        <option>One Time</option>
                        <option>Per Unit</option>
                        <option>Per Piece</option>
                        <option>Per Box</option>
                        <option>Per Bottle</option>
                        <option>Per Gram</option>
                        <option>Per Kilogram</option>
                        <option>Per Pound</option>
                        <option>Per Liter</option>
                        <option>Per Meter</option>
                        <option>Per Centimeter</option>
                        <option>Per Foot</option>
                        <option>Per Inch</option>
                        <option>Per Ton</option>
                        <option>Per Gallon</option>
                        <option>Per Hour</option>
                        <option>Per Day</option>
                        <option>Per Week</option>
                        <option>Per Month</option>
                        <option>Per Year</option>
                        <option>Per Visit</option>
                    </select>
                </div>
                <div class="col mb-3">
                    <label for="emailWithTitle" class="form-label">Payment Mode</label>
                    <input type="text" name="payment_mode" id="payment_mode" class="form-control">
                    {{-- <select name="payment_mode" id="payment_mode" required class="form-control">
                        <option value="" style="display:none">Select Payment Mode</option>
                        <option>UPI</option>
                        <option>Credit/Debit Cards</option>
                        <option>Cash</option>
                        <option>COD</option>
                        <option>Electronic Bank Transfers</option>
                        <option>Digital/Mobile Wallet</option>
                    </select> --}}
                </div>
                <div class="col mb-3">
                    <label for="" class="form-label">Product Tags</label>
                    <input type="text" id="product_tags" required name="product_tags" class="form-control">
                </div>
                <div class="col mb-3">
                    <label for="" class="form-label">Service Area (Delivery)</label>
                    <select name="service_area" id="service_area" required class="form-control">
                        <option value="">Select Service Area</option>
                        <option>All India</option>
                        <option>State</option>
                        <option>City</option>
                        <option>Not Deliverable</option>
                        <option>Walk In</option>
                    </select>
                </div>
                <div class="col mb-3">
                    <textarea name="description" required class="form-control" id="" cols="30" rows="5"
                        placeholder="Product Description"></textarea>
                </div>
                <button type="submit" form="adsDataForm" class="btn btn-primary mb-2 d-grid w-100">Continue</button>
                <button type="button" id="closeOffset" class="btn btn-outline-secondary d-grid w-100"
                    data-bs-dismiss="offcanvas">
                    Cancel
                </button>
            </form>
        </div>
    </div>

    {{-- modals --}}
    <div class="modal fade" id="categoryModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCenterTitle">Add/Edit Categories</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameWithTitle" class="form-label">Category Name</label>
                            <input type="text" id="categoryNameModal" class="form-control"
                                placeholder="Enter Category Name" />
                        </div>
                    </div>
                    <div class="row g-2">
                        <div style="height:16rem;overflow-y: auto">
                            <table class="table table-stripped">
                                <thead>
                                    <tr>
                                        <td>Category Name</td>
                                        <td>Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($product_category) > 0)
                                        @foreach ($product_category as $item)
                                            <tr>
                                                <td>{{ $item->category_name }}</td>
                                                <td>
                                                    <button class="btn btn-warning btn-sm m-1"
                                                        onclick="editCategory('{{ $item->id }}','{{ $item->category_name }}')"><i
                                                            class="bx bx-edit-alt"></i></button>
                                                    <button class="btn btn-danger btn-sm m-1"
                                                        onclick="deleteCategory('{{ $item->id }}','{{ $item->category_name }}')"><i
                                                            class="bx bx-trash-alt"></i></button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="button" class="btn btn-primary update-category" onclick="submitCategroy(this)"
                        data-record_id=''>Add Category</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="subCategoryModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCenterTitle">Add/Edit Sub Categories</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameWithTitle" class="form-label">Category Name</label>
                            <select name="subCategory" id="categorySubCategoryModel" class="form-control"
                                onchange="categoryChangeOnSubCatModal(this)">
                                <option value="">Select Category</option>
                                @if (count($product_category) > 0)
                                    @foreach ($product_category as $item)
                                        <option>{{ $item->category_name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="col mb-3">
                            <label for="nameWithTitle" class="form-label">Sub Category Name</label>
                            <input type="text" disabled id="subCategoryTextModel" class="form-control">
                        </div>
                    </div>
                    <div class="row g-2">
                        <div style="height:16rem;overflow-y: auto">
                            <table class="table table-stripped">
                                <thead>
                                    <tr>
                                        <td>Category Name</td>
                                        <td>Sub-Category Name</td>
                                        <td>Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($product_sub_category) > 0)
                                        @foreach ($product_sub_category as $item)
                                            <tr>
                                                <td>{{ $item->category_name }}</td>
                                                <td>{{ $item->sub_category_name }}</td>
                                                <td>
                                                    <button class="btn btn-warning btn-sm m-1"
                                                        onclick="editSubCategory('{{ $item->id }}','{{ $item->sub_category_name }}','{{ $item->categegory_id }}','{{ $item->category_name }}')"><i
                                                            class="bx bx-edit-alt"></i></button>
                                                    <button class="btn btn-danger btn-sm m-1"
                                                        onclick="deleteSubCategory('{{ $item->id }}','{{ $item->sub_category_name }}','{{ $item->categegory_id }}','{{ $item->category_name }}')"><i
                                                            class="bx bx-trash-alt"></i></button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="button" class="btn btn-primary update-sub-category" onclick="submitSubCategroy(this)"
                        data-subcatid='' data-subcatname='' data-catid="" data-catname="">Add Sub Category</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="cityModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCenterTitle">Add/Edit Cities</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameWithTitle" class="form-label">City Name</label>
                            <input type="text" id="cityTextInput" class="form-control">
                        </div>
                    </div>
                    <div class="row g-2">
                        <div style="height:16rem;overflow-y: auto">
                            <table class="table table-stripped">
                                <thead>
                                    <tr>
                                        <td>City Name</td>
                                        <td>Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($cities) > 0)
                                        @foreach ($cities as $item)
                                            <tr>
                                                <td>{{ $item->city_name }}</td>
                                                <td>
                                                    <button class="btn btn-warning btn-sm m-1"
                                                        onclick="editCity('{{ $item->id }}','{{ $item->city_name }}')"><i
                                                            class="bx bx-edit-alt"></i></button>
                                                    <button class="btn btn-danger btn-sm m-1"
                                                        onclick="deleteCity('{{ $item->id }}','{{ $item->city_name }}')"><i
                                                            class="bx bx-trash-alt"></i></button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="button" class="btn btn-primary update-city" onclick="submitCity(this)" data-cityid=''
                        data-cityname=''>Add City</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="adsCategoryModel" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCenterTitle">Add/Edit Cities</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6 mb-3">
                            <label for="nameWithTitle" class="form-label">Ads Category</label>
                            <input type="text" id="adsCategortyTextInput" class="form-control">
                        </div>
                        <div class="col-6 mb-3">
                            <label for="nameWithTitle" class="form-label">Ads Category Colour</label>
                            <input type="color" id="adsCategortyColorInput" class="form-control">
                        </div>
                    </div>
                    <div class="row g-2">
                        <div style="height:16rem;overflow-y: auto">
                            <table class="table table-stripped">
                                <thead>
                                    <tr>
                                        <td>Ads Category</td>
                                        <td>Ads Colour</td>
                                        <td>Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($ads_category) > 0)
                                        @foreach ($ads_category as $item)
                                            <tr>
                                                <td>{{ $item->ad_category_name }}</td>
                                                <td><span class="badge"
                                                        style="background-color: {{ $item->ad_category_color }}">Ads
                                                        Badge</span>
                                                </td>
                                                <td>
                                                    <button class="btn btn-warning btn-sm m-1"
                                                        onclick="editAdsCategory('{{ $item->id }}','{{ $item->ad_category_name }}','{{ $item->ad_category_color }}')"><i
                                                            class="bx bx-edit-alt"></i></button>
                                                    <button class="btn btn-danger btn-sm m-1"
                                                        onclick="deleteAdsCategory('{{ $item->id }}','{{ $item->ad_category_name }}','{{ $item->ad_category_color }}')"><i
                                                            class="bx bx-trash-alt"></i></button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="button" class="btn btn-primary update-adscategory" onclick="submitAdsCategory(this)"
                        data-adscategoryname='' data-adscategorycolor='' data-id="">Add Ads Category</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(function() {
            var input = document.querySelector('input[name=product_tags]');
            new Tagify(input)

            var input = document.querySelector('input[name="payment_mode"]'),
                // init Tagify script on the above inputs
                tagify = new Tagify(input, {
                    whitelist: ['UPI', 'Credit/Debit Cards', 'Cash', 'COD', 'Electronic Bank Transfers',
                        'Digital/Mobile Wallet'
                    ],
                    maxTags: 10,
                    dropdown: {
                        maxItems: 20, // <- mixumum allowed rendered suggestions
                        classname: "tags-look", // <- custom classname for this dropdown, so it could be targeted
                        enabled: 0, // <- show suggestions on focus
                        closeOnSelect: false // <- do not hide the suggestions dropdown once an item has been selected
                    }
                })
        });

        const addAdsCategory = () => {
            $('#adsCategortyTextInput').val('');
            $('#adsCategortyColorInput').val('');
            $('.update-adscategory').data('adscategoryname', '').data('adscategorycolor', '').data('id', '').text(
                'Add Ads Category');
        }

        const imageSelection = (element) => {
            var $fileUpload = $(element);
            if (parseInt($fileUpload.get(0).files.length) > 5) {
                alert('Maximum 5 images allowed');
                $fileUpload.val('')
            }
        }

        const coverImageChange = (element) => {
            var $fileUpload = $(element);
            if (parseInt($fileUpload.get(0).files.length) > 1) {
                alert('Only 1 images allowed');
                $fileUpload.val('')
            }
        }

        const onCategorySelectChange = (element) => {
            if ($(element).val() != '') {
                let category = $(element).val();
                $('#productSubCategorySelect option').hide();
                $('#productSubCategorySelect option[data-category="' + category + '"]').show();
                $('#productSubCategorySelect').removeAttr('disabled').val('');
            }
        }

        const toggleCategory = () => {
            $('#productCategorySelect').toggleClass('d-none');
            $('#productCategoryText').toggleClass('d-none');
            if ($('#productCategorySelect').hasClass('d-none')) {
                $('#productCategoryText').attr('required', 'required');
                $('#productCategorySelect').removeAttr('required');
            }
            if ($('#productCategoryText').hasClass('d-none')) {
                $('#productCategorySelect').attr('required', 'required');
                $('#productCategoryText').removeAttr('required');
            }
        }
        const toggleSubCategory = () => {
            $('#productSubCategorySelect').toggleClass('d-none');
            $('#productSubCategoryText').toggleClass('d-none');
            if ($('#productSubCategorySelect').hasClass('d-none')) {
                $('#productSubCategoryText').attr('required', 'required');
                $('#productSubCategorySelect').removeAttr('required');
            }
            if ($('#productSubCategoryText').hasClass('d-none')) {
                $('#productCategorySelect').attr('required', 'required');
                $('#productSubCategoryText').removeAttr('required');
            }
        }
        const togglePriceConditions = () => {
            $('#priceConditionsSelect').toggleClass('d-none');
            $('#priceConditionsText').toggleClass('d-none');
            if ($('#priceConditionsSelect').hasClass('d-none')) {
                $('#priceConditionsText').attr('required', 'required');
                $('#priceConditionsSelect').removeAttr('required');
            }
            if ($('#priceConditionsText').hasClass('d-none')) {
                $('#priceConditionsSelect').attr('required', 'required');
                $('#priceConditionsText').removeAttr('required');
            }
        }
        const toggleAdsCategory = () => {
            $('#adsCategorySelect').toggleClass('d-none');
            $('#adsCategoryText').toggleClass('d-none');
            $('#adsCategoryColor').toggleClass('d-none');
            if ($('#adsCategorySelect').hasClass('d-none')) {
                $('#adsCategoryText').attr('required', 'required');
                $('#adsCategoryColor').attr('required', 'required');
                $('#adsCategorySelect').removeAttr('required');
            }
            if ($('#adsCategoryText').hasClass('d-none')) {
                $('#adsCategorySelect').attr('required', 'required');
                $('#adsCategoryText').removeAttr('required');
                $('#adsCategoryColor').removeAttr('required');
            }
        }
        $(document).on('submit', '#adsDataForm', function(e) {
            e.preventDefault();
            let formData = new FormData($('#adsDataForm')[0]);

            if ($('#productCategoryText').hasClass('d-none')) {
                formData.append('productCategory', $('#productCategorySelect').val());
            }
            if ($('#productCategorySelect').hasClass('d-none')) {
                formData.append('productCategory', $('#productCategoryText').val());
            }

            if ($('#productSubCategoryText').hasClass('d-none')) {
                formData.append('productSubCategory', $('#productSubCategorySelect').val());
            }
            if ($('#productSubCategorySelect').hasClass('d-none')) {
                formData.append('productSubCategory', $('#productSubCategoryText').val());
            }

            if ($('#priceConditionsText').hasClass('d-none')) {
                formData.append('priceCondition', $('#priceConditionsSelect').val());
            }
            if ($('#priceConditionsSelect').hasClass('d-none')) {
                formData.append('priceCondition', $('#priceConditionsText').val());
            }

            if ($('#adsCategoryText').hasClass('d-none')) {
                formData.append('adsCategory', $('#adsCategorySelect').val());
                formData.append('adsCategoryColor', "");
            }
            if ($('#adsCategorySelect').hasClass('d-none')) {
                formData.append('adsCategory', $('#adsCategoryText').val());
                formData.append('adsCategoryColor', $('#adsCategoryColor').val());
            }
            holdOn('Saving Ad.. Please Wait')
            axios.post('{{ url('admin/save-ads') }}', formData)
                .then(function(response) {
                    closeHoldOn();
                    if (response.data.status == 1) {
                        $('#closeOffset').click();
                        showToast('Success', response.data.message, 'success', true, 'green');
                        setTimeout(() => {
                            window.location.reload();
                        }, 3000);
                    }
                })
                .catch(function(error) {})
        });

        const editCategory = (id, categoryName) => {
            $('.update-category').data('record_id', id).text('Update Category');
            $('#categoryNameModal').val(categoryName);
        }

        const addCategoryClick = () => {
            $('.update-category').data('record_id', '').text('Add Category');
            $('#categoryNameModal').val('');
        }

        const submitCategroy = (element) => {
            if ($('#categoryNameModal').val() != '') {
                holdOn('Updating Product Category... Please Wait')
                data = {
                    recordId: $(element).data('record_id'),
                    category_name: $('#categoryNameModal').val(),
                }
                axios.post('{{ url('admin/update-product-category') }}', data)
                    .then((response) => {
                        closeHoldOn();
                        if (response.data.status) {
                            showToast('Success', response.data.message, 'success', true, 'green');
                            setTimeout(() => {
                                window.location.reload();
                            }, 3000);
                        } else {
                            showToast('Error !!!', response.data.message, 'error', true, 'red');
                        }
                    })
                    .catch((error) => {})
            } else {
                showToast('Error !!!', 'Please Enter Category', 'error', true, 'red');
            }
        }

        const deleteCategory = (id, categoryName) => {
            swal({
                    title: "Are you sure?",
                    text: "Once deleted, You can recover it..",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        axios.post('{{ url('admin/delete-category') }}', {
                                recordId: id,
                            })
                            .then((response) => {
                                if (response.data.status) {
                                    showToast('Success', response.data.message, 'success', true, 'green');
                                    setTimeout(() => {
                                        window.location.reload();
                                    }, 3000);
                                }
                            })
                            .catch((error) => {})
                    }
                });
        }

        const categoryChangeOnSubCatModal = (element) => {
            if ($(element).val() != '') {
                $('#subCategoryTextModel').removeAttr('disabled');
                $('.update-sub-category').data('subcatname', $('#subCategoryTextModel').val()).data(
                    'catname', $('#categorySubCategoryModel').val()).text('Add Sub Category');
            } else {
                $('#subCategoryTextModel').attr('disabled', 'disabled');
            }
        }

        const addSubCatClick = () => {
            $('.update-sub-category').data('subcatid', '').data('subcatname', '').data('catid', '').data(
                'catname', '').text('Add Sub Category');
            $('#subCategoryTextModel').attr('disabled', 'disabled').val('');
            $('#categorySubCategoryModel').val('');
        }
        const editSubCategory = (id, subCatName, catId, categoryName) => {
            $('#categorySubCategoryModel').val(categoryName);
            $('#subCategoryTextModel').removeAttr('disabled').val(subCatName);
            $('.update-sub-category').data('subcatid', id).data('subcatname', subCatName).data('catid', catId).data(
                'catname', categoryName).text('Update Sub Category');
        }
        const submitSubCategroy = (element) => {
            if ($(element).data('catname') != '' && $('#subCategoryTextModel').val() != '') {
                holdOn("Updating Product Sub-Category... Please Wait");
                let data = {
                    "subCatId": $(element).data('subcatid'),
                    "subCatName": $('#subCategoryTextModel').val(),
                    "catId": $(element).data('catid'),
                    "catName": $(element).data('catname'),
                }
                axios.post("{{ url('admin/update-product-sub-category') }}", data)
                    .then((response) => {
                        closeHoldOn();
                        if (response.data.status) {
                            showToast('Success', response.data.message, 'success', true, 'green');
                            setTimeout(() => {
                                window.location.reload();
                            }, 3000);
                        } else {
                            showToast('Error !!!', response.data.message, 'error', true, 'red');
                        }
                    })
                    .catch((error) => {})
            } else {
                showToast('Error !!!', 'Category & Sub-Category Cannot Be Empty', 'error', true, 'red');
            }
        }
        const deleteSubCategory = (id, subCategoryName, categoryId, categoryName) => {
            swal({
                    title: "Are you sure?",
                    text: "Once deleted, You can recover it..",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        axios.post('{{ url('admin/delete-sub-category') }}', {
                                id: id,
                            })
                            .then((response) => {
                                if (response.data.status) {
                                    showToast('Success', response.data.message, 'success', true, 'green');
                                    setTimeout(() => {
                                        window.location.reload();
                                    }, 3000);
                                }
                            })
                            .catch((error) => {})
                    }
                });
        }

        const addCity = () => {
            $('.update-city').data('cityid', '').data('cityname', '').text('Add City');
            $('#cityTextInput').val();
        }

        const editCity = (cityId, cityName) => {
            $('.update-city').data('cityid', cityId).data('cityname', cityName).text('Update City');
            $('#cityTextInput').val(cityName);
        }

        const deleteCity = (cityid, cityname) => {
            swal({
                    title: "Are you sure?",
                    text: "Once deleted, You can recover it..",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        holdOn('Deleting City...Please Wait');
                        let data = {
                            'cityid': cityid,
                        }
                        axios.post("{{ url('admin/delete-city') }}", data)
                            .then((response) => {
                                closeHoldOn();
                                if (response.data.status) {
                                    showToast('Success', response.data.message, 'success', true, 'green');
                                    setTimeout(() => {
                                        window.location.reload();
                                    }, 3000);
                                } else {
                                    showToast('Error !!!', response.data.message, 'error', true, 'red');
                                }
                            })
                            .catch((error) => {})
                    }
                })
        }

        const submitCity = (element) => {
            let data = {
                'cityid': $(element).data('cityid'),
                'cityname': $('#cityTextInput').val(),
            }
            axios.post("{{ url('admin/update-city') }}", data)
                .then((response) => {
                    closeHoldOn();
                    if (response.data.status) {
                        showToast('Success', response.data.message, 'success', true, 'green');
                        setTimeout(() => {
                            window.location.reload();
                        }, 3000);
                    } else {
                        showToast('Error !!!', response.data.message, 'error', true, 'red');
                    }
                })
                .catch((error) => {})
        }

        const editAdsCategory = (id, category_name, category_color) => {
            $('#adsCategortyTextInput').val(category_name);
            $('#adsCategortyColorInput').val(category_color);
            $('.update-adscategory').data('adscategoryname', category_name).data('id', id).data('adscategorycolor',
                    category_color)
                .text('Edit Ads Category');
        }

        const submitAdsCategory = (element) => {
            holdOn('Updating Ads Category...Please Wait');
            let data = {
                recordId: $(element).data('id'),
                adsCategoryName: $('#adsCategortyTextInput').val(),
                adsCategoryColor: $('#adsCategortyColorInput').val(),
            }
            axios.post('/admin/update-ads-category', data)
                .then((response) => {
                    closeHoldOn();
                    if (response.data.status) {
                        showToast('Success', response.data.message, 'success', true, 'green');
                        setTimeout(() => {
                            window.location.reload();
                        }, 3000);
                    } else {
                        showToast('Error !!!', response.data.message, 'error', true, 'red');
                    }
                })
                .catch((error) => {})

        }

        const deleteAdsCategory = (id, category_name, category_color) => {
            swal({
                    title: "Are you sure?",
                    text: "Once deleted, You can recover it..",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        holdOn('Deleting Ads Category...Please Wait');
                        let data = {
                            'recordid': id,
                        }
                        axios.post("{{ url('/admin/delete-ads-category') }}", data)
                            .then((response) => {
                                closeHoldOn();
                                if (response.data.status) {
                                    showToast('Success', response.data.message, 'success', true, 'green');
                                    setTimeout(() => {
                                        window.location.reload();
                                    }, 3000);
                                } else {
                                    showToast('Error !!!', response.data.message, 'error', true, 'red');
                                }
                            })
                            .catch((error) => {})
                    }
                })
        }
    </script>
@endsection
