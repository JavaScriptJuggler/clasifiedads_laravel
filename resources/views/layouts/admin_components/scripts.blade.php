<script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
<script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('assets/vendor/js/menu.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>
<script src="{{ asset('assets/js/ui-modals.js') }}"></script>
<script async defer src="https://buttons.github.io/buttons.js"></script>
<script src="{{ asset('assets/js/holdon.min.js') }}"></script>
<script src="{{ asset('assets/js/toast.min.js') }}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
{{-- <script src="{{ asset('assets/js/extended-ui-perfect-scrollbar.js') }}"></script> --}}

<script>
    const showToast = (heading = '', text = '', icon = '', loader = '', loaderbg = '') => {
        $.toast({
            heading: heading,
            text: text,
            icon: icon,
            loader: loader, // Change it to false to disable loader
            loaderBg: loaderbg // To change the background
        });
    }
    const holdOn = (message) => {
        var options = {
            theme: "sk-folding-cube",
            message: message,
            /* backgroundColor: "#1847B1",
            textColor: "white" */
        };
        HoldOn.open(options);
    }
    const closeHoldOn = () => {
        HoldOn.close();
    }
</script>
