<!DOCTYPE html>
<html lang="en">

<head>
    <base href="">
    <title></title>
    <meta name="description" content=" " />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <link rel="canonical" href="" />
    <link rel="shortcut icon" href="/assets/web/img/icon.png" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="/assets/dashboard/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet"
        type="text/css" />
    <link href="/assets/dashboard/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="/assets/dashboard/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <link href="/assets/dashboard/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />


    <style>
        .aside-menu .menu-item .menu-link.active {
            background-color: #FFC31D !important;
        }

    </style>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body"
    class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed toolbar-tablet-and-mobile-fixed aside-enabled aside-fixed"
    style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
    <div class="d-flex flex-column flex-root">
        <div class="page d-flex flex-row flex-column-fluid">
            <div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside"
                data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
                data-kt-drawer-toggle="#kt_aside_mobile_toggle">
                <div class="aside-logo flex-column-auto" id="kt_aside_logo">
                    <a href="../../demo8/dist/index.html">
                        <img alt="Logo" src="/assets/web/img/logo.png" class="logo" />
                    </a>
                </div>
                <div class="aside-menu flex-column-fluid">
                    @include('v1.dashboard.layouts.sidebar')
                </div>
            </div>
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <div id="kt_header" style="" class="header align-items-stretch">
                    <div class="container-fluid d-flex align-items-stretch justify-content-between">
                        <div class="d-flex align-items-center d-lg-none ms-n3 me-1" title="Show aside menu">
                            <div class="btn btn-icon btn-active-color-white" id="kt_aside_mobile_toggle">
                                <i class="bi bi-list fs-1"></i>
                            </div>
                        </div>
                        <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
                            <a href="../../demo8/dist/index.html" class="d-lg-none">
                                <img alt="Logo" src="/assets/dashboard/media/logos/logo-compact.svg"
                                    class="h-15px" />
                            </a>
                        </div>
                        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
                            @include('v1.dashboard.layouts.navbar')
                        </div>
                    </div>
                </div>
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <div class="toolbar" id="kt_toolbar">
                        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">
									Tableau de bord
                                </h1>
                            </div>
                        </div>
                    </div>
                    <div class="post d-flex flex-column-fluid" id="kt_post">
                        <div id="kt_content_container" class="container-xxl">
                            @yield('content')
                        </div>
                    </div>
                </div>
                <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
                    <div
                        class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
                        <div class="text-dark order-2 order-md-1">
                            <a href="" target="_blank" class="text-gray-800 text-hover-primary">
                                © Copyright 2021 , Amicale Al Jiza - All Rights Reserved
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <span class="svg-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)"
                    fill="black" />
                <path
                    d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                    fill="black" />
            </svg>
        </span>
        <!--end::Svg Icon-->
    </div>
    <script src="/assets/dashboard/plugins/global/plugins.bundle.js"></script>
    <script src="/assets/dashboard/js/scripts.bundle.js"></script>
    <script src="/assets/dashboard/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
    <script src="/assets/dashboard/js/custom/widgets.js"></script>
    <script src="/assets/dashboard/js/custom/apps/chat/chat.js"></script>
    <script src="/assets/dashboard/js/custom/modals/create-app.js"></script>
    <script src="/assets/dashboard/js/custom/modals/upgrade-plan.js"></script>
    <script src="/assets/dashboard/plugins/custom/datatables/datatables.bundle.js"></script>
    <script>
        $(document).ready(function() {
            $('.dataTable').DataTable();
        });
    </script>
</body>
<!--end::Body-->

</html>
