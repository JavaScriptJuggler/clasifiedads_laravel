@extends('layouts.admin-layout')

@section('content')
    <div class="row">
        <div class="card" style="overflow-y: auto">
            <div class="row">
                <div class="col-md-12">
                    <div
                        class="card-header container-fluid d-flex flex-md-row flex-column justify-content-between align-items-md-center gap-1 container-p-x py-3 mb-3">
                        <div>
                            <h5 class="mb-0">Approve Ads</h5>
                        </div>
                    </div>
                    <table class="table table-bordered yajra-datatable mt-3">
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
            </div>
        </div>
    </div>
    <script>
        $(function() {
            var table = $('.yajra-datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('ads-approve.get-unapproved-ads') }}",
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

        const deleteRecord = (record_id) => {
            holdOn('Deleting Approval Request...Please Wait');
            swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this record any more!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        axios({
                                method: 'post',
                                url: '{{ url('/admin/ads-approve/delete-approval-request') }}',
                                data: {
                                    id: record_id
                                }
                            })

                            .then(response => {
                                closeHoldOn();
                                if (response.data.status) {
                                    showToast('Success', response.data.message, 'success', true, 'green');
                                }
                                if (!response.data.status) {
                                    showToast('Error!', response.data.message, 'error', true, 'red');
                                }
                                setTimeout(() => {
                                    window.location.reload();
                                }, 3000);
                            })

                            .catch(error => console.log(error));
                    }
                });
        }
    </script>
@endsection
