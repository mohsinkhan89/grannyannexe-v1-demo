<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    @yield('title')
    <link rel="apple-touch-icon" href="{{url('backend/app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{url('storage')}}/{{setting('site.favicon')}}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{url('backend/app-assets/vendors/css/vendors.min.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{url('backend/app-assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('backend/app-assets/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('backend/app-assets/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('backend/app-assets/css/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('backend/app-assets/css/themes/dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('backend/app-assets/css/themes/bordered-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('backend/app-assets/css/themes/semi-dark-layout.css')}}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{url('backend/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/all.css" >
    <!-- END: Custom CSS-->

    @yield('css')

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

    @include('inc.header')
    @include('inc.sidebar')

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        @yield('body')
    </div>
    <!-- END: Content-->

    @if($user->pin == "")
        {{-- Add Pin Modal --}}
        <div class="modal fade text-left" id="add-pin-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel33">Create Pin</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form>
                        <div class="modal-body">
                            <div class="alert alert-success" style="display: none;" role="alert"><p class="alert-body alert-body-success"></p></div>
                            <div class="alert alert-warning" style="display: none;" role="alert"><p class="alert-body alert-body-warning"></p></div>
                            <label>Pin: </label>
                            <div class="form-group">
                                <input id="pin" type="password" placeholder="Pin" class="form-control" />
                            </div>  
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary btn-create-pin">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- Add Pin Modal --}}
    @endif

    @if($user->credits < 1000 || $user->credits == "")
        {{-- Request Credit Modal --}}
        <div class="modal fade text-left" id="add-credit-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel33">Request Credit</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form>
                        <div class="modal-body">
                            <div class="alert alert-success" style="display: none;" role="alert"><p class="alert-body alert-body-success"></p></div>
                            <div class="alert alert-warning" style="display: none;" role="alert"><p class="alert-body alert-body-warning"></p></div>
                            <label>Credit: </label>
                            <div class="form-group">
                                <input id="amount" type="text" placeholder="Amount" class="form-control" />
                            </div>  
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary btn-request-credit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- Request Credit Modal --}}
    @endif

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    @include('inc.footer')


    <!-- BEGIN: Vendor JS-->
    <script src="{{url('backend/app-assets/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->


    <!-- BEGIN: Theme JS-->
    <script src="{{url('backend/app-assets/js/core/app-menu.js')}}"></script>
    <script src="{{url('backend/app-assets/js/core/app.js')}}"></script>
    <!-- END: Theme JS-->
    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        });
        // var inactivityTimeout = 1000000000000000000;
        // var logoutTimer;

        // function resetLogoutTimer() {
        //     clearTimeout(logoutTimer);
        //     logoutTimer = setTimeout(logoutUser, inactivityTimeout);
        // }
        // function logoutUser() {
        //     window.location.href = '/dashboard/logout';
        // }

        // $(document).ready(function () {
        //     resetLogoutTimer();

        //     $(document).on("mousemove keydown click", function () {
        //         resetLogoutTimer();
        //     });
        // });
    </script>

    @yield('javascript')
</body>
<!-- END: Body-->

</html>