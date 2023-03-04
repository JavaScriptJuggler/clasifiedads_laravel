@extends('layouts.admin-layout')

@section('content')
    <div class="row">
        <div class="card" style="overflow-y: auto">

            {{-- <img class="card-img-top mt-2" style="height:30vh;objeect-fit:cover"
            src="{{ asset('assets/img/elements/5.jpg') }}" alt="Card image cap"> --}}
            <div class="card-body">
                <div class="d-flex align-items-start align-items-sm-center gap-4">
                    <img src="{{ '/document_bucket/' . $ads_approval_data->cover_image }}" alt="user-avatar"
                        class="d-block rounded mt-3" height="200" width="200" id="coverImage" />
                    <div class="button-wrapper" style="margin-left:auto;">
                    </div>
                </div>
                <div class="row w-50">
                    @if (count(unserialize($ads_approval_data->product_image)) > 0)
                        @foreach (unserialize($ads_approval_data->product_image) as $item)
                            <div class="col-md-2">
                                <img src="{{ '/document_bucket/' . $item }}" alt="user-avatar"
                                    class="d-block rounded mt-3"  height="100"
                                    width="100" id="coverImage" />
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="row p-1">
                <div class="col-md-4 mb-1">
                    <label for="" class="form-label">Product Name</label>
                    <input type="text" readonly value="{{ $ads_approval_data->product_name }}" class="form-control">
                </div>
                <div class="col-md-4 mb-1">
                    <label for="" class="form-label">Product Category</label>
                    <input type="text" readonly value="{{ $ads_approval_data->product_category }}" class="form-control">
                </div>
                <div class="col-md-4 mb-1">
                    <label for="" class="form-label">Product Sub Category</label>
                    <input type="text" readonly value="{{ $ads_approval_data->product_sub_category }}"
                        class="form-control">
                </div>
                <div class="col-md-4 mb-1">
                    <label for="" class="form-label">Product Price</label>
                    <input type="text" readonly value="{{ $ads_approval_data->price }}" class="form-control">
                </div>
                <div class="col-md-4 mb-1">
                    <label for="" class="form-label">Product Price Condition</label>
                    <input type="text" readonly value="{{ $ads_approval_data->price_condition }}" class="form-control">
                </div>
                <div class="col-md-4 mb-1">
                    <label for="" class="form-label">Product Condition</label>
                    <input type="text" readonly value="{{ $ads_approval_data->product_condition }}" class="form-control">
                </div>
                <div class="col-md-4 mb-1">
                    <label for="" class="form-label">Ads Category</label>
                    <input type="text" readonly value="{{ $ads_approval_data->ad_category }}" class="form-control">
                </div>
                <div class="col-md-4 mb-1">
                    <label for="" class="form-label">Seller Type</label>
                    <input type="text" readonly value="{{ $ads_approval_data->seller_type }}" class="form-control">
                </div>
                <div class="col-md-4 mb-1">
                    <label for="" class="form-label">Location</label>
                    <input type="text" readonly value="{{ $ads_approval_data->location }}" class="form-control">
                </div>
                <div class="col-md-4 mb-1">
                    <label for="" class="form-label">City</label>
                    <input type="text" readonly value="{{ $ads_approval_data->city_name }}" class="form-control">
                </div>
                <div class="col-md-4 mb-1">
                    <label for="" class="form-label">Unit</label>
                    <input type="text" readonly value="{{ $ads_approval_data->units }}" class="form-control">
                </div>
                <div class="col-md-4 mb-1">
                    <label for="" class="form-label">Payment Method</label>
                    <input type="text" readonly value="{{ $ads_approval_data->payment_mode }}" class="form-control">
                </div>
                <div class="col-md-4 mb-1">
                    <label for="" class="form-label">Service Area</label>
                    <input type="text" readonly value="{{ $ads_approval_data->payment_mode }}" class="form-control">
                </div>
                <div class="col-md-4 mb-1">
                    <label for="" class="form-label">Tags</label>
                    <input type="text" readonly value="{{ $ads_approval_data->tags }}" class="form-control">
                </div>
                <div class="col-md-12 mb-1">
                    <label for="" class="form-label">Product Description</label>
                    <textarea readonly cols="30" rows="10" class="form-control">{{ $ads_approval_data->product_description }}</textarea>
                </div>
                <div class="col-md-12 text-center mb-2 mt-2">
                    <button class="btn btn-primary m-2" onclick="approveClick('{{ $ads_approval_data->id }}')">Approve
                        This Advertise</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        const approveClick = (id) => {
            holdOn('Approving Ad...Please Wait');
            axios({
                    method: 'post',
                    url: '{{ url('/admin/ads-approve/approve-ad') }}',
                    data: {
                        id: id
                    }
                })

                .then(response => {
                    closeHoldOn();
                    if (response.data.status) {
                        showToast('Success', response.data.message, 'success', true, 'green');
                        setTimeout(() => {
                            window.location.href = '{{ route('ads-approve.index') }}';
                        }, 3000);
                    } else {
                        showToast('Error', response.data.message, 'error', true, 'red');
                    }
                })

                .catch(error => console.log(error));
        }
    </script>
@endsection
