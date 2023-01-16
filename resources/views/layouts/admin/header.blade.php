<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-semi-dark"
    data-assets-path="{{ asset('') }}admin/assets/" data-template="vertical-menu-template-semi-dark">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Dashboard - {{ siteName() }} </title>

    <meta name="description" content="Start your development with a Dashboard for Bootstrap 5" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://1.envato.market/vuexy_admin">

    <!-- Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5J3LMKC');

    </script>
    <!-- End Google Tag Manager -->


    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('') }}admin/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
        rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('') }}admin/assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="{{ asset('') }}admin/assets/vendor/fonts/tabler-icons.css" />
    <link rel="stylesheet" href="{{ asset('') }}admin/assets/vendor/fonts/flag-icons.css" />
    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('') }}admin/assets/vendor/css/rtl/core.css"
        class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('') }}admin/assets/vendor/css/rtl/theme-semi-dark.css"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('') }}admin/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet"
        href="{{ asset('') }}admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="{{ asset('') }}admin/assets/vendor/libs/node-waves/node-waves.css" />
    <link rel="stylesheet"
        href="{{ asset('') }}admin/assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet"
        href="{{ asset('') }}admin/assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="{{asset('')}}admin/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css">
    <link rel="stylesheet" href="{{asset('')}}admin/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css">

    <link rel="stylesheet"
    href="{{ asset('') }}admin/assets/vendor/libs/flatpickr/flatpickr.css" />
    <!-- Helpers -->
    <script src="{{ asset('') }}admin/assets/vendor/js/helpers.js"></script>

    <script src="{{ asset('') }}admin/assets/js/config.js"></script>
</head>

<style>
    .layout-navbar .navbar-dropdown .badge-notifications {
        top: 0.5rem;
        padding: 0.3rem 0.5rem;
        margin-left: -22px;
    }

</style>

<body>


    <!-- Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5J3LMKC" height="0" width="0"
            style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar  ">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">


                <div class="app-brand demo ">
                    <a href="{{ route('admin.dashboard') }}" class="app-brand-link">
                        <span class="app-brand-logo demo">
                            <svg width="32" height="22" viewBox="0 0 32 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
                                    fill="#7367F0" />
                                <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd"
                                    d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z"
                                    fill="#161616" />
                                <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd"
                                    d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z"
                                    fill="#161616" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
                                    fill="#7367F0" />
                            </svg>
                        </span>
                        <span class="app-brand-text demo menu-text fw-bold">{{ siteName() }}</span>
                    </a>

                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
                        <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
                        <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>



                <ul class="menu-inner py-1">

                    <li class="menu-item">
                        <a href="#" class="menu-link" style="font-size: 18px;
                            font-weight: 700;
                            margin-left: 23px;
                        ">

                            <div data-i18n="Hi, {{ Auth::guard('admin')->user()->name }}">Hi,
                                {{ Auth::guard('admin')->user()->name }} </div>
                        </a>
                    </li>


                    <li class="menu-item">
                        <a href="{{ route('admin.dashboard') }}" class="menu-link">
                            <i class="menu-icon tf-icons ti ti-smart-home"></i>
                            <div data-i18n="Dashboard">Dashboard</div>
                        </a>
                    </li>




                    <!-- Dashboards -->

                    <!-- Apps & Pages -->
                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Apps &amp; Pages</span>
                    </li>

                    <li class="menu-item">
                        <a href="{{ route('admin.active-user') }}"
                            class="menu-link">
                            <i class="menu-icon tf-icons ti ti-table"></i>
                            <div data-i18n="Tables">user Activation</div>
                        </a>
                    </li>

                    <!-- Users -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons ti ti-layout-sidebar"></i>
                            <div data-i18n="users">users</div>
                        </a>

                        <ul class="menu-sub">

                            <li class="menu-item">
                                <a href="{{ route('admin.totalusers') }}" class="menu-link">
                                    <div data-i18n="allusers">alluserlist</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{route('admin.active-users')}}"
                                    class="menu-link">
                                    <div data-i18n="active users">active users</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('admin.edit-users') }}"
                                    class="menu-link">
                                    <div data-i18n="edit users list">edit users list</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('admin.block-users') }}"
                                    class="menu-link" target="_blank">
                                    <div data-i18n="block users list">block users list</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class='menu-icon tf-icons ti ti-file-dollar'></i>
                            <div data-i18n="bonus">deposit management</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="{{ route('admin.deposit-request') }}"
                                    class="menu-link">
                                    <div data-i18n="List">Pending Deposit</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('admin.deposit-list') }}"
                                    class="menu-link">
                                    <div data-i18n="Preview">Deposit List</div>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons ti ti-file"></i>
                            <div data-i18n="bonus">fund management</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="{{ route('admin.add-fund-list') }}"
                                    class="menu-link">
                                    <div data-i18n="List">Pending fund</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="#"
                                    class="menu-link">
                                    <div data-i18n="Preview">fund List</div>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class='menu-icon tf-icons ti ti-file-dollar'></i>
                            <div data-i18n="bonus">bonus</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="{{ route('admin.roi-bonus') }}"
                                    class="menu-link">
                                    <div data-i18n="List">growth bonus</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('admin.level-bonus') }}"
                                    class="menu-link">
                                    <div data-i18n="Preview">level bonus</div>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class='menu-icon tf-icons ti ti-settings'></i>
                            <div data-i18n="Withdraw">withdraw</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="{{ route('admin.withdraw-request-users') }}"
                                    class="menu-link">
                                    <div data-i18n="withdraw request">withdraw request</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('admin.withdraw-history-users') }}"
                                    class="menu-link">
                                    <div data-i18n="withdraw history">withdraw history</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item">
                        <a href="{{ route('admin.change-admin-password') }}"
                            class="menu-link">
                            <i class="menu-icon tf-icons ti ti-table"></i>
                            <div data-i18n="Tables">change admin password</div>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons ti ti-file"></i>
                            <div data-i18n="Support management">support management</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="{{ route('admin.support-query') }}"
                                    class="menu-link">
                                    <div data-i18n="Support query">support query</div>
                                </a>
                            </li>

                        </ul>
                    </li>








                    <li class="menu-item">
                        <a href="{{ asset('') }}admin/documentation/" target="_blank"
                            class="menu-link">
                            <i class="menu-icon tf-icons ti ti-file-description"></i>
                            <div data-i18n="logout">logout</div>
                        </a>
                    </li>
                </ul>



            </aside>
            <!-- / Menu -->
            <!-- Layout container -->
            <div class="layout-page">

                <!-- Navbar -->

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">

                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="ti ti-menu-2 ti-sm"></i>
                        </a>
                    </div>


                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">


                        <!-- Search -->
                        <div class="navbar-nav align-items-center">
                            <div class="nav-item navbar-search-wrapper mb-0">
                                <a class="nav-item nav-link search-toggler d-flex align-items-center px-0"
                                    href="javascript:void(0);">

                                    <span class="d-none d-md-inline-block text-muted">Welcome to Admin Dashboard</span>
                                </a>
                            </div>
                        </div>
                        <!-- /Search -->

                        <ul class="navbar-nav flex-row align-items-center ms-auto">

                            <!-- Notification -->
                            <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">

                                    <span class="badge bg-danger rounded-pill badge-notifications">Hi,
                                        {{ Auth::guard('admin')->user()->name }}</span>
                                </a>

                            </li>
                            <!--/ Notification -->

                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="{{ asset('') }}admin/assets/img/avatars/1.png" alt
                                            class="h-auto rounded-circle">
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item"
                                            href="{{ asset('') }}admin/html/vertical-menu-template-semi-dark/pages-account-settings-account.html">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="{{ asset('') }}admin/assets/img/avatars/1.png"
                                                            alt class="h-auto rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-semibold d-block">John Doe</span>
                                                    <small class="text-muted">Admin</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item"
                                            href="{{ asset('') }}admin/html/vertical-menu-template-semi-dark/pages-profile-user.html">
                                            <i class="ti ti-user-check me-2 ti-sm"></i>
                                            <span class="align-middle">My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item"
                                            href="{{ asset('') }}admin/html/vertical-menu-template-semi-dark/pages-account-settings-account.html">
                                            <i class="ti ti-settings me-2 ti-sm"></i>
                                            <span class="align-middle">Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item"
                                            href="{{ asset('') }}admin/html/vertical-menu-template-semi-dark/pages-account-settings-billing.html">
                                            <span class="d-flex align-items-center align-middle">
                                                <i class="flex-shrink-0 ti ti-credit-card me-2 ti-sm"></i>
                                                <span class="flex-grow-1 align-middle">Billing</span>
                                                <span
                                                    class="flex-shrink-0 badge badge-center rounded-pill bg-label-danger w-px-20 h-px-20">2</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item"
                                            href="{{ asset('') }}admin/html/vertical-menu-template-semi-dark/pages-help-center-landing.html">
                                            <i class="ti ti-lifebuoy me-2 ti-sm"></i>
                                            <span class="align-middle">Help</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item"
                                            href="{{ asset('') }}admin/html/vertical-menu-template-semi-dark/pages-faq.html">
                                            <i class="ti ti-help me-2 ti-sm"></i>
                                            <span class="align-middle">FAQ</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item"
                                            href="{{ asset('') }}admin/html/vertical-menu-template-semi-dark/pages-pricing.html">
                                            <i class="ti ti-currency-dollar me-2 ti-sm"></i>
                                            <span class="align-middle">Pricing</span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item"
                                            href="{{ asset('') }}admin/html/vertical-menu-template-semi-dark/auth-login-cover.html"
                                            target="_blank">
                                            <i class="ti ti-logout me-2 ti-sm"></i>
                                            <span class="align-middle">Log Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->



                        </ul>
                    </div>


                    <!-- Search Small Screens -->
                    <div class="navbar-search-wrapper search-input-wrapper  d-none">
                        <input type="text" class="form-control search-input container-xxl border-0"
                            placeholder="Search..." aria-label="Search...">
                        <i class="ti ti-x ti-sm search-toggler cursor-pointer"></i>
                    </div>



                </nav>

                <!-- / Navbar -->
