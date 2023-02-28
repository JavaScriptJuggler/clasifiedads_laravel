@extends('layouts.admin-layout')

@section('content')
    <div class="row">
        <div class="card" style="overflow-y: auto">
            <div class="row">
                <div class="col-md-12">
                    <div
                        class="card-header container-fluid d-flex flex-md-row flex-column justify-content-between align-items-md-center gap-1 container-p-x py-3">
                        <div>
                            <h5 class="mb-0 mt-1">View Ads</h5>
                        </div>
                    </div>
                </div>
            </div>
            <view-ads></view-ads>
        </div>
    </div>
@endsection
