@extends('layouts.admin-layout')

@section('content')
    <div class="nav-align-top mb-4">
        <ul class="nav nav-pills mb-3" role="tablist">
            <li class="nav-item">
                <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                    data-bs-target="#navs-pills-top-home" aria-controls="navs-pills-top-home" aria-selected="true">
                    Profile
                </button>
            </li>
            <li class="nav-item">
                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                    data-bs-target="#navs-pills-top-profile" aria-controls="navs-pills-top-profile" aria-selected="false">
                    Ads
                </button>
            </li>
            <li class="nav-item">
                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                    data-bs-target="#navs-pills-top-messages" aria-controls="navs-pills-top-messages" aria-selected="false">
                    Un-Approved Ads
                </button>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="navs-pills-top-home" role="tabpanel">
                <div class="d-flex align-items-start align-items-sm-center gap-4 mb-4">
                    <img src="{{ $user_details->avatar != '' || $user_details->avatar != null ? '/document_bucket/' . $user_details->avatar : '/assets/img/avatars/notfoundimag.jpg' }}"
                        alt="user-avatar" class="d-block rounded" height="120" width="120" id="uploadedAvatar" />
                </div>
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="firstName" class="form-label">First Name <span class="text-danger"
                                style="font-size:15px">*</span></label>
                        <input class="form-control" readonly value="{{ explode(' ', $user_details->name)[0] }}"
                            type="text" id="firstName" required name="firstName" value="John" autofocus />
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="lastName" class="form-label">Last Name<span class="text-danger"
                                style="font-size:15px">*</span></label>
                        <input class="form-control" readonly type="text"
                            value="{{ explode(' ', $user_details->name)[1] }}" required name="lastName" id="lastName"
                            value="Doe" />
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="email" class="form-label">E-mail<span class="text-danger"
                                style="font-size:15px">*</span></label>
                        <input class="form-control" readonly type="email" id="email" name="email"
                            value="{{ $user_details->email }}" required placeholder="john.doe@example.com" />
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="organization" class="form-label">Organization<span class="text-danger"
                                style="font-size:15px">*</span></label>
                        <input type="text" readonly class="form-control" required id="organization" name="organization"
                            value="{{ $user_details->business_name }}" />
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="phoneNumber">Phone Number<span class="text-danger"
                                style="font-size:15px">*</span></label>
                        <div class="input-group input-group-merge">
                            <span class="input-group-text">IN (+91)</span>
                            <input type="text" readonly id="phoneNumber" value="{{ $user_details->number }}"
                                name="phoneNumber" required class="form-control" placeholder="202 555 0111" />
                        </div>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="address" class="form-label">Address<span class="text-danger"
                                style="font-size:15px">*</span></label>
                        <input type="text" readonly class="form-control" value="{{ $user_details->address }}"
                            id="address" name="address" required placeholder="Address" />
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="state" class="form-label">Country<span class="text-danger"
                                style="font-size:15px">*</span></label>
                        <input class="form-control" readonly type="text" readonly value="{{ $user_details->country }}"
                            required id="state" name="country" placeholder="California" />
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="state" class="form-label">State<span class="text-danger"
                                style="font-size:15px">*</span></label>
                        <input class="form-control" readonly type="text" value="{{ $user_details->state }}"
                            id="state" name="state" required placeholder="California" />
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="state" class="form-label">City<span class="text-danger"
                                style="font-size:15px">*</span></label>
                        <input class="form-control" readonly type="text" value="{{ $user_details->city }}"
                            id="city" name="city" required placeholder="Chicago" />
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="zipCode" class="form-label">Zip Code<span class="text-danger"
                                style="font-size:15px">*</span></label>
                        <input type="text" readonly class="form-control" id="zipCode" name="zipCode"
                            placeholder="231465" required maxlength="6" value="{{ $user_details->zip }}" />
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="" class="form-label">Business Hours</label>
                        <div id="businessHoursContainer"></div>
                    </div>
                    <div class="table-responsive text-nowrap">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Monday</th>
                                    <th>Tuesday</th>
                                    <th>Wednsday</th>
                                    <th>Thursday</th>
                                    <th>Friday</th>
                                    <th>Saturday</th>
                                    <th>Sunday</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @if ($user_details->business_hours != '' && $user_details->business_hours != null)
                                        @foreach (json_decode($user_details->business_hours) as $item)
                                            <td>
                                                @if ($item->isActive == true)
                                                    <span>{{ $item->timeFrom }} -
                                                        {{ $item->timeTill }}</span>
                                                @else
                                                    <span class="badge bg-label-danger me-1">Closed</span>
                                                @endif
                                            </td>
                                        @endforeach
                                    @endif
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="navs-pills-top-profile" role="tabpanel">
                <div
                    class="card-header container-fluid d-flex flex-md-row flex-column justify-content-between align-items-md-center gap-1 container-p-x py-3 mb-3">
                    <div>
                        <h5 class="mb-0">Approve Ads</h5>
                    </div>
                </div>
                <table class="table table-bordered yajra-datatable mt-3" style="width:100%">
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Product Category</th>
                            <th>Product Sub-Category</th>
                            <th>Product Price</th>
                            <th>Price Condition</th>
                            <th>Product Condition</th>
                            <th>Ads Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>

            </div>
            <div class="tab-pane fade" id="navs-pills-top-messages" role="tabpanel">
                <p>
                    Oat cake chupa chups dragée donut toffee. Sweet cotton candy jelly beans macaroon gummies
                    cupcake gummi bears cake chocolate.
                </p>
                <p class="mb-0">
                    Cake chocolate bar cotton candy apple pie tootsie roll ice cream apple pie brownie cake. Sweet
                    roll icing sesame snaps caramels danish toffee. Brownie biscuit dessert dessert. Pudding jelly
                    jelly-o tart brownie jelly.
                </p>
            </div>
        </div>
    </div>
    <script>
        $(function() {
            var table = $('.yajra-datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('users.get-approved-ads', ['userid' => $user_details->id]) }}",
                columns: [{
                        data: 'product_name',
                        name: 'product_name'
                    },
                    {
                        data: 'product_category',
                        name: 'product_category'
                    },
                    {
                        data: 'product_sub_category',
                        name: 'product_sub_category'
                    },
                    {
                        data: 'price',
                        name: 'price'
                    },
                    {
                        data: 'price_condition',
                        name: 'price_condition'
                    },
                    {
                        data: 'product_condition',
                        name: 'product_condition'
                    },
                    {
                        data: 'ad_category',
                        name: 'ad_category'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: true,
                        searchable: true
                    },
                ]
            });
        });
    </script>
@endsection
