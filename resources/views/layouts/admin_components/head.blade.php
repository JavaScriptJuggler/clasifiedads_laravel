<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Clasified Ads - {{ $page_name }}</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.ico') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/boxicons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/theme-default.css') }}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/holdon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/toast.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/tagify.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-misc.css') }}" />
    <style src="vue-multiselect/dist/vue-multiselect.min.css"></style>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.2.17/jquery.timepicker.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.businessHours.css') }}">
    {{-- <link rel="stylesheet" href="<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />"> --}}
</head>
<style>
    #template-customizer {
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol" !important;
        font-size: inherit !important;
        position: fixed;
        top: 0;
        right: 0;
        height: 100%;
        z-index: 99999999;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        width: 360px;
        background: #fff;
        -webkit-box-shadow: 0 0 20px 0 rgba(0, 0, 0, .2);
        box-shadow: 0 0 20px 0 rgba(0, 0, 0, .2);
        -webkit-transition: all .2s ease-in;
        -o-transition: all .2s ease-in;
        transition: all .2s ease-in;
        -webkit-transform: translateX(380px);
        -ms-transform: translateX(380px);
        transform: translateX(380px)
    }

    #template-customizer h5 {
        position: relative;
        font-size: 11px;
        font-weight: 600
    }

    #template-customizer>h5 {
        flex: 0 0 auto
    }

    #template-customizer .disabled {
        color: #d1d2d3 !important
    }

    #template-customizer.template-customizer-open {
        -webkit-transition-delay: .1s;
        -o-transition-delay: .1s;
        transition-delay: .1s;
        -webkit-transform: none !important;
        -ms-transform: none !important;
        transform: none !important
    }

    #template-customizer .template-customizer-open-btn {
        position: absolute;
        top: 180px;
        left: 0;
        z-index: -1;
        display: block;
        width: 42px;
        height: 42px;
        border-top-left-radius: 15%;
        border-bottom-left-radius: 15%;
        background: #333;
        color: #fff !important;
        text-align: center;
        font-size: 18px !important;
        line-height: 42px;
        opacity: 1;
        -webkit-transition: all .1s linear .2s;
        -o-transition: all .1s linear .2s;
        transition: all .1s linear .2s;
        -webkit-transform: translateX(-62px);
        -ms-transform: translateX(-62px);
        transform: translateX(-62px)
    }

    @media(max-width: 991.98px) {
        #template-customizer .template-customizer-open-btn {
            top: 145px
        }
    }

    .dark-style #template-customizer .template-customizer-open-btn {
        background: #555
    }

    #template-customizer .template-customizer-open-btn::before {
        content: "";
        width: 22px;
        height: 22px;
        display: block;
        background-size: 100% 100%;
        position: absolute;
        background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAABClJREFUaEPtmY1RFEEQhbsjUCIQIhAiUCNQIxAiECIQIxAiECIAIpAMhAiECIQI2vquZqnZvp6fhb3SK5mqq6Ju92b69bzXf6is+dI1t1+eAfztG5z1BsxsU0S+ici2iPB3vm5E5EpEDlSVv2dZswFIxv8UkZcNy+5EZGcuEHMCOBeR951uvVDVD53vVl+bE8DvDu8Pxtyo6ta/BsByg1R15Bwzqz5/LJgn34CZwfnPInI4BUB6/1hV0cSjVxcAM4PbcBZjL0XklIPN7Is3fLCkdQPpPYw/VNXj5IhPIvJWRIhSl6p60ULWBGBm30Vk123EwRxCuIzWkkjNrCZywith10ewE1Xdq4GoAjCz/RTXW44Ynt+LyBEfT43kYfbj86J3w5Q32DNcRQDpwF+dkQXDMey8xem0L3TEqB4g3PZWad8agBMRgZPeu96D1/C2Zbh3X0p80Op1xxloztN48bMQQNoc7+eLEuAoPSPiIDY4Ooo+E6ixeNXM+D3GERz2U3CIqMstLJUgJQDe+7eq6mub0NYEkLAKwEHkiBQDCZtddZCZ8d6r7JDwFkoARklHRPZUFVDVZWbwGuNrC4EfdOzFrRABh3Wnqhv+d70AEBLGFROPmeHlnM81G69UdSd6IUuM0GgUVn1uqWmg5EmMfBeEyB7Pe3txBkY+rGT8j0J+WXq/BgDkUCaqLgEAnwcRog0veMIqFAAwCy2wnw+bI2GaGboBgF9k5N0o0rUSGUb4eO0BeO9j/GYhkSHMHMTIqwGARX6p6a+nlPBl8kZuXMD9j6pKfF9aZuaFOdJCEL5D4eYb9wCYVCanrBmGyii/tIq+SLj/HQBCaM5bLzwfPqdQ6FpVHyra4IbuVbXaY7dETC2ESPNNWiIOi69CcdgSMXsh4tNSUiklMgwmC0aNd08Y5WAES6HHehM4gu97wyhBgWpgqXsrASglprDy7CwhehMZOSbK6JMSma+Fio1KltCmlBIj7gfZOGx8ppQSXrhzFnOhJ/31BDkjFHRvOd09x0mRBA9SFgxUgHpQg0q0t5ymPMlL+EnldFTfDA0NAmf+OTQ0X0sRouf7NNkYGhrOYNrxtIaGg83MNzVDSe3LXLhP7O/yrCsCz1zlWTpjWkuZAOBpX3yVnLqI1yLCOKU6qMrmP7SSrUEw54XF4WBIK5FxCMOr3lVsfGqNSmPzBXUnJTIX1jyVBq9wO6UObOpgC5GjO98vFKnTdQMZXxEsWZlDiCZMIxAbNxQOqlpVZtobejBaZNoBnRDzMFpkxvTQOD36BlrcySZuI6p1ACB6LU3wWuf5581+oHfD1vi89bz3nFUC8Nm7ZlP3nKkFbM4bWPt/MSFwklprYItwt6cmvpWJ2IVcQBCz6bLysSCv3SaANCiTsnaNRrNRqMXVVT1/BrAqz/buu/Y38Ad3KC5PARej0QAAAABJRU5ErkJggg==);
        margin: 10px
    }

    .customizer-hide #template-customizer .template-customizer-open-btn {
        display: none
    }

    [dir=rtl] #template-customizer .template-customizer-open-btn {
        border-radius: 0;
        border-top-right-radius: 15%;
        border-bottom-right-radius: 15%
    }

    [dir=rtl] #template-customizer .template-customizer-open-btn::before {
        margin-left: -2px
    }

    #template-customizer.template-customizer-open .template-customizer-open-btn {
        opacity: 0;
        -webkit-transition-delay: 0s;
        -o-transition-delay: 0s;
        transition-delay: 0s;
        -webkit-transform: none !important;
        -ms-transform: none !important;
        transform: none !important
    }

    #template-customizer .template-customizer-close-btn {
        position: absolute;
        top: 32px;
        right: 0;
        display: block;
        font-size: 20px;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%)
    }

    #template-customizer .template-customizer-inner {
        position: relative;
        overflow: auto;
        -webkit-box-flex: 0;
        -ms-flex: 0 1 auto;
        flex: 0 1 auto;
        opacity: 1;
        -webkit-transition: opacity .2s;
        -o-transition: opacity .2s;
        transition: opacity .2s
    }

    #template-customizer .template-customizer-inner>div:first-child>hr:first-of-type {
        display: none !important
    }

    #template-customizer .template-customizer-inner>div:first-child>h5:first-of-type {
        padding-top: 0 !important
    }

    #template-customizer .template-customizer-themes-inner {
        position: relative;
        opacity: 1;
        -webkit-transition: opacity .2s;
        -o-transition: opacity .2s;
        transition: opacity .2s
    }

    #template-customizer .template-customizer-theme-item {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        align-items: center;
        -ms-flex-align: center;
        -webkit-box-flex: 1;
        -ms-flex: 1 1 100%;
        flex: 1 1 100%;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        margin-bottom: 10px;
        padding: 0 24px;
        width: 100%;
        cursor: pointer
    }

    #template-customizer .template-customizer-theme-item input {
        position: absolute;
        z-index: -1;
        opacity: 0
    }

    #template-customizer .template-customizer-theme-item input~span {
        opacity: .25;
        -webkit-transition: all .2s;
        -o-transition: all .2s;
        transition: all .2s
    }

    #template-customizer .template-customizer-theme-item .template-customizer-theme-checkmark {
        display: inline-block;
        width: 6px;
        height: 12px;
        border-right: 1px solid;
        border-bottom: 1px solid;
        opacity: 0;
        -webkit-transition: all .2s;
        -o-transition: all .2s;
        transition: all .2s;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg)
    }

    [dir=rtl] #template-customizer .template-customizer-theme-item .template-customizer-theme-checkmark {
        border-right: none;
        border-left: 1px solid;
        -webkit-transform: rotate(-45deg);
        -ms-transform: rotate(-45deg);
        transform: rotate(-45deg)
    }

    #template-customizer .template-customizer-theme-item input:checked:not([disabled])~span,
    #template-customizer .template-customizer-theme-item:hover input:not([disabled])~span {
        opacity: 1
    }

    #template-customizer .template-customizer-theme-item input:checked:not([disabled])~span .template-customizer-theme-checkmark {
        opacity: 1
    }

    #template-customizer .template-customizer-theme-colors span {
        display: block;
        margin: 0 1px;
        width: 10px;
        height: 10px;
        border-radius: 50%;
        -webkit-box-shadow: 0 0 0 1px rgba(0, 0, 0, .1) inset;
        box-shadow: 0 0 0 1px rgba(0, 0, 0, .1) inset
    }

    #template-customizer.template-customizer-loading .template-customizer-inner,
    #template-customizer.template-customizer-loading-theme .template-customizer-themes-inner {
        opacity: .2
    }

    #template-customizer.template-customizer-loading .template-customizer-inner::after,
    #template-customizer.template-customizer-loading-theme .template-customizer-themes-inner::after {
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 999;
        display: block
    }

    .layout-menu-100vh #template-customizer {
        height: 100vh
    }

    [dir=rtl] #template-customizer {
        right: auto;
        left: 0;
        -webkit-transform: translateX(-380px);
        -ms-transform: translateX(-380px);
        transform: translateX(-380px)
    }

    [dir=rtl] #template-customizer .template-customizer-open-btn {
        right: 0;
        left: auto;
        -webkit-transform: translateX(62px);
        -ms-transform: translateX(62px);
        transform: translateX(62px)
    }

    [dir=rtl] #template-customizer .template-customizer-close-btn {
        right: auto;
        left: 0
    }

    #template-customizer .template-customizer-layouts-options[disabled] {
        opacity: .5;
        pointer-events: none
    }

    [dir=rtl] .template-customizer-t-style_switch_light {
        padding-right: 0 !important
    }
</style>
<!-- Page CSS -->

<!-- Helpers -->
<script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>

<!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
<!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
<script src="{{ asset('assets/js/config.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
</head>
