<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>Trang đăng nhập Admin</title>

        <meta name="description" content="uAdmin is a Professional, Responsive and Flat Admin Template created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <meta name="viewport" content="width=device-width,initial-scale=1">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="{{('public/backend/img/favicon.ico')}}">
        <link rel="apple-touch-icon" href="{{('public/backend/img/icon57.png')}}" sizes="57x57">
        <link rel="apple-touch-icon" href="{{('public/backend/img/icon72.png')}}" sizes="72x72">
        <link rel="apple-touch-icon" href="{{('public/backend/img/icon76.png')}}" sizes="76x76">
        <link rel="apple-touch-icon" href="{{('public/backend/img/icon114.png')}}" sizes="114x114">
        <link rel="apple-touch-icon" href="{{('public/backend/img/icon120.png')}}" sizes="120x120">
        <link rel="apple-touch-icon" href="{{('public/backend/img/icon144.png')}}" sizes="144x144">
        <link rel="apple-touch-icon" href="{{('public/backend/img/icon152.png')}}" sizes="152x152">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Bootstrap is included in its original form, unaltered -->
        <link rel="stylesheet" href="{{('public/backend/css/bootstrap.css')}}">

        <!-- Related styles of various javascript plugins -->
        <link rel="stylesheet" href="{{('public/backend/css/plugins.css')}}">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="{{('public/backend/css/main.css')}}">
        <!-- END Stylesheets -->

        <!-- Modernizr (browser feature detection library) & Respond.js (Enable responsive CSS code on browsers that don't support it, eg IE8) -->
        <script src="{{('public/backend/js/vendor/modernizr-respond.min.js')}}"></script>
    </head>
    <body class="login">
        <!-- Login Container -->
        <div id="login-container">
            <div id="login-logo">
                <a href="">
                    <img src="{{('public/backend/img/template/uadmin_logo.png')}}" alt="logo">
                </a>
            </div>

            <!-- Login Buttons -->
            <div id="login-buttons">
                <h5 class="page-header-sub">Login</h5>
                <?php
                    $message = Session::get('message');
                    if($message)
                    {
                        echo('<script>alert("'.$message.'")</script>');
                        Session::put('message', null);
                    }
                ?>
                <button id="login-btn-email" class="btn btn-default"> Click to proceed to login </button>
            </div>
            <!-- END Login Buttons -->

            <!-- Login Form -->
            <form id="login-form" action="{{URL::to('/admin-login')}}" method="post" class="form-horizontal">
                {{ csrf_field() }}
                <div class="form-group">
                    <a href="javascript:void(0)" class="login-back"><i class="fa fa-arrow-left"></i></a>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="input-group">
                            <input type="text" id="login-email" name="admin_email" placeholder="Email.." class="form-control">
                            <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="input-group">
                            <input type="password" id="login-password" name="admin_password" placeholder="Password.." class="form-control">
                            <span class="input-group-addon"><i class="fa fa-asterisk fa-fw"></i></span>
                        </div>
                    </div>
                </div>
                <div class="clearfix">
                    <div class="btn-group btn-group-sm pull-right">
                        <button type="button" id="login-button-pass" class="btn btn-warning" data-toggle="tooltip" title="Forgot pass?"><i class="fa fa-lock"></i></button>
                        <button type="submit" class="btn btn-success"><i class="fa fa-arrow-right"></i> Login</button>
                    </div>
                    <label id="topt-fixed-header-top" class="switch switch-success pull-left" data-toggle="tooltip" title="Remember me"><input type="checkbox"><span></span></label>
                </div>
            </form>
            <!-- END Login Form -->
        </div>
        <!-- END Login Container -->

        <!-- Include Jquery library from Google's CDN but if something goes wrong get Jquery from local file (Remove 'http:' if you have SSL) -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>!window.jQuery && document.write(decodeURI('%3Cscript src="js/vendor/jquery-1.11.1.min.js"%3E%3C/script%3E'));</script>

        <!-- Bootstrap.js -->
        <script src="{{('public/backend/js/vendor/bootstrap.min.js')}}"></script>

        <!-- Jquery plugins and custom javascript code -->
        <script src="{{('public/backend/js/plugins.js')}}"></script>
        <script src="{{('public/backend/js/main.js')}}"></script>

        <!-- Javascript code only for this page -->
        <script>
            $(function () {
                var loginButtons = $('#login-buttons');
                var loginForm = $('#login-form');

                // Reveal login form
                $('#login-btn-email').click(function () {
                    loginButtons.slideUp(600);
                    loginForm.slideDown(450);
                });

                // Hide login form
                $('.login-back').click(function () {
                    loginForm.slideUp(450);
                    loginButtons.slideDown(600);
                });
            });
        </script>
    </body>
</html>