<!DOCTYPE html>
<html class="loading dark-layout" lang="en" data-layout="dark-layout" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description"
        content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>{{siteName()}} | Login</title>
    <link rel="apple-touch-icon" href="https://vision2o.live/member/{{asset('')}}upnl/app-assets/images/ico/apple-icon-120.html">
    <link rel="shortcut icon" type="image/x-icon"
        href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/{{asset('')}}upnl/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{asset('')}}upnl/app-assets/vendors/css/vendors.min.css">


    <link rel="stylesheet" type="text/css" href="{{asset('')}}upnl/app-assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}upnl/app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}upnl/app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}upnl/app-assets/css/components.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}upnl/app-assets/css/themes/dark-layout.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}upnl/app-assets/css/themes/bordered-layout.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}upnl/app-assets/css/themes/semi-dark-layout.min.css">

    <link rel="stylesheet" type="text/css" href="{{asset('')}}upnl/app-assets/css/core/menu/menu-types/vertical-menu.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}upnl/app-assets/css/plugins/forms/form-validation.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}upnl/app-assets/css/pages/authentication.css">


    <link rel="stylesheet" type="text/css" href="{{asset('')}}upnl/assets/css/style.css">

</head>


<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="blank-page">

    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="auth-wrapper auth-basic px-2">
                    <div class="auth-inner my-2">

                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="{{asset('')}}" class="brand-logo">
                                    <img src="{{asset('')}}upnl/app-assets/images/logo/logov.png" alt="" width="180">
                                </a>
                                <h4 class="card-title mb-1">Welcome to Vision2.0 👋</h4>
                                <p class="card-text mb-2">Please sign-in to your account and start the adventure</p>
                                <form class="auth-login-form mt-2" action="{{route('login')}}" method="POST">
                                    {{ csrf_field() }}

                                    <div class="mb-1">
                                        <label for="login-email" class="form-label">User ID</label>
                                        <input type="text" class="form-control" name="username" placeholder="USER123456"
                                            tabindex="1" autofocus required="true" />
                                    </div>
                                    <div class="mb-1">
                                        <div class="d-flex justify-content-between">
                                            <label class="form-label" for="login-password">Password</label>
                                            <a href="#">
                                                <small>Forgot Password?</small>
                                            </a>
                                        </div>
                                        <div class="input-group input-group-merge form-password-toggle">
                                            <input type="password" class="form-control form-control-merge" name="password"
                                                tabindex="2" placeholder="********************" required="true" />
                                            <span class="input-group-text cursor-pointer"><i
                                                    data-feather="eye"></i></span>
                                        </div>
                                    </div>
                                    <div class="mb-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="remember-me"
                                                tabindex="3" required="true" />
                                            <label class="form-check-label" for="remember-me"> Remember Me </label>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary w-100" tabindex="4" name="1d2es5e8s">Sign in</button>
                                </form>
                                <p class="text-center mt-2">
                                    <span>New on our platform?</span>
                                    <a href="{{route('register')}}">
                                        <span>Create an account</span>
                                    </a>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.notify')
    <script src="{{asset('')}}upnl/app-assets/vendors/js/vendors.min.js"></script>


    <script src="{{asset('')}}upnl/app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>


    <script src="{{asset('')}}upnl/app-assets/js/core/app-menu.min.js"></script>
    <script src="{{asset('')}}upnl/app-assets/js/core/app.min.js"></script>


    <script src="{{asset('')}}upnl/app-assets/js/scripts/pages/auth-login.js"></script>
</body>

</html>