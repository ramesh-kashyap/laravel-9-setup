<!DOCTYPE html>
<html class="loading dark-layout" lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-layout="dark-layout" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <title>{{siteName()}} | {{ __('User Panel') }}</title>
    <link rel="apple-touch-icon" href="{{asset('')}}upnl/app-assets/images/ico/apple-icon-120.html">
    <link rel="shortcut icon" type="image/x-icon"
        href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/{{asset('')}}upnl/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{asset('')}}upnl/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}upnl/app-assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}upnl/app-assets/vendors/css/extensions/toastr.min.css">
    <link rel="stylesheet" type="text/css"
        href="{{asset('')}}upnl/app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css"
        href="{{asset('')}}upnl/app-assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css"
        href="{{asset('')}}upnl/app-assets/vendors/css/tables/datatable/buttons.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css"
        href="{{asset('')}}upnl/app-assets/vendors/css/tables/datatable/rowGroup.bootstrap5.min.css">

    <link rel="stylesheet" type="text/css" href="{{asset('')}}upnl/app-assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}upnl/app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}upnl/app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}upnl/app-assets/css/components.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}upnl/app-assets/css/themes/dark-layout.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}upnl/app-assets/css/themes/bordered-layout.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}upnl/app-assets/css/themes/semi-dark-layout.min.css">

    <link rel="stylesheet" type="text/css"
        href="{{asset('')}}upnl/app-assets/css/core/menu/menu-types/vertical-menu.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}upnl/app-assets/css/pages/dashboard-ecommerce.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}upnl/app-assets/css/plugins/charts/chart-apex.min.css">
    <link rel="stylesheet" type="text/css"
        href="{{asset('')}}upnl/app-assets/css/plugins/extensions/ext-component-toastr.min.css">
    <link rel="stylesheet" type="text/css"
        href="{{asset('')}}upnl/app-assets/css/core/menu/menu-types/vertical-menu.min.css">
    <link rel="stylesheet" type="text/css"
        href="{{asset('')}}upnl/app-assets/css/plugins/extensions/ext-component-sliders.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}upnl/app-assets/css/pages/app-ecommerce.min.css">


    <link rel="stylesheet" type="text/css" href="{{asset('')}}upnl/assets/css/style.css">

</head>
<style>
 
.dark-layout label {
    color: #D0D2D6;
    margin-top: 19px;
}
</style>

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="">

    <nav
        class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-dark navbar-shadow container-xxl">
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <div id="MyClockDisplay" class="clock" onload="showTime()"></div>
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon"
                                data-feather="menu"></i></a>
                    </li>
                </ul>
            </div>
            <ul class="nav navbar-nav align-items-center ms-auto">
                <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon"
                            data-feather="sun"></i></a></li>
                <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link"
                        id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder">{{Auth::user()->name}}</span><span
                                class="user-status">{{Auth::user()->username}}</span></div><span class="avatar"><img class="round"
                                src="{{asset('')}}upnl/app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar"
                                height="40" width="40"><span class="avatar-status-online"></span></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
                        <a class="dropdown-item" href="{{route('user.profile')}}"><i class="me-50" data-feather="user"></i> Profile</a>
                        <a class="dropdown-item" href="#!"><i class="me-50" data-feather="mail"></i> Inbox</a>
                        <a class="dropdown-item" href="#!"><i class="me-50" data-feather="message-square"></i> Help
                            ?</a>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><i class="me-50" data-feather="power"></i> Logout</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto"><a class="navbar-brand" href="Dashboard"><span class="brand-logo">
                            <img src="{{asset('')}}upnl/app-assets/images/logo/logov.png" alt="" width="180"></span>

                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i
                            class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i
                            class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary"
                            data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item"><a class="d-flex align-items-center" href="{{route('user.dashboard')}}"><i
                            data-feather="grid"></i><span class="menu-title text-truncate"
                            data-i18n="Dashboards">Dashboard</span></a>
                </li>
                <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">PERSONAL</span><i
                        data-feather="more-horizontal"></i>
                </li>
             
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="user"></i><span
                            class="menu-title text-truncate" data-i18n="Invoice">Profile</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="{{route('user.profile')}}"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="List">Profile Setting</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="{{route('user.ChangePass')}}"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="Preview">Setting</span></a>
                        {{-- <li><a class="d-flex align-items-center" href="cryptoWallet"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="Preview">Crypto Wallet</span></a> --}}
                        </li>
                        <li><a class="d-flex align-items-center" href="{{route('user.BankDetail')}}"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="Preview">Bank Update</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">BUSINESS</span><i
                        data-feather="more-horizontal"></i>
                <li class=" nav-item"><a class="d-flex align-items-center" href="{{route('user.AddFund')}}"><i
                    data-feather="dollar-sign"></i><span
                            class="menu-title text-truncate" data-i18n="File Manager">Add Fund</span></a>
                </li>
              
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="key"></i><span
                            class="menu-title text-truncate" data-i18n="Roles &amp; Permission">Buy Package</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="{{route('user.invest')}}"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="Roles">Package Activation</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="ActiveHistory"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="Permission">Activation History</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="DepositHistory"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Permission">Your Deposits</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i
                            data-feather="credit-card"></i><span class="menu-title text-truncate"
                            data-i18n="eCommerce">Withdrawals</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="PayoutINR"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="Shop">INR Withdrawal</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="PayoutCrypto"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="Details">Crypto Withdrawal</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="PayoutHistory"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="Wish List">Withdrawal History</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="users"></i><span
                            class="menu-title text-truncate" data-i18n="User">My Team</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="DirectTeam"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="List">Refferal</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="DownTeam"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="List">My Team</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="AutoPoolBonus"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="FAQ">AutoPool Profit</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="levelteam"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="List">Level Chart</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="clubteam"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="List">Club Chart</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="list"></i><span
                            class="menu-title text-truncate" data-i18n="Pages">Earnings</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="LevelBonus"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="Profile">Level Profit</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="AutopoolIncome"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="FAQ">AutoPool Income</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="DailyActivity"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="FAQ">Daily Activity</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i
                            data-feather="check-circle"></i><span class="menu-title text-truncate"
                            data-i18n="Authentication">P2P Transfer</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="Fund2Fund"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="Profile">P2P Transfer</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="Main2Fund"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="FAQ">Internal Transfer</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="list"></i><span
                            class="menu-title text-truncate" data-i18n="Authentication">Reports</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="TransFundHistory"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Profile">Transfer Reports</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="RecieveFundHistory"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="FAQ">Recieve Reports</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i
                            data-feather="shopping-bag"></i><span class="menu-title text-truncate"
                            data-i18n="Authentication">Shopping Fund</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="Shop2Shop"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="Profile">Shop2Shop Transfer</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="Main2Shop"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="FAQ">Main2Shopping Transfer</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="ShoppingFundHistory"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="FAQ">Shop
                                    Fund History</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i
                            data-feather="shopping-cart"></i><span class="menu-title text-truncate"
                            data-i18n="Authentication">Shopping</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="ProductList"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="Profile">Products</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="MyOrderList"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="FAQ">Order List</span></a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item"><a class="d-flex align-items-center" href="images/VisionNew_.pdf" download><i
                            data-feather="file-text"></i><span class="menu-title text-truncate"
                            data-i18n="Raise Support">Download
                            Plan</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="Logout"><i
                            data-feather="log-out"></i><span class="menu-title text-truncate"
                            data-i18n="file-text">Logout</span></a>
                </li>
            </ul>
        </div>
    </div>
