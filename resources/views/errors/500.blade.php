<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed">

@include('layouts.admin_components.head', ['page_name' => '404 | Page Not Found'])

<body>
    <!-- Content -->

    <!-- Error -->
    <div class="container-xxl container-p-y">
        <div class="misc-wrapper">
            <h2 class="mb-2 mx-2">Internal Server Error</h2>
            <p class="mb-4 mx-2">It's always time for a coffee break.☕
                We should be back by the time you finish your coffee.</p>
            <a href="{{ route('dashboard') }}" class="btn btn-primary">Back to dashboard</a>
            <div class="mt-3">
                <img src="{{ asset('assets/img/illustrations/3814327-removebg-preview.png') }}" alt="page-misc-error-light" width="500"
                    class="img-fluid" data-app-dark-img="illustrations/page-misc-error-dark.png"
                    data-app-light-img="illustrations/page-misc-error-light.png" />
            </div>
        </div>
    </div>
    @include('layouts.admin_components.scripts')
</body>

</html>
