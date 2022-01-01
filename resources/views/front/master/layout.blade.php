<!DOCTYPE html>
<html lang="ru">
<!--head start-->
<head>
    <!-- Charset-->
    <meta charset="utf-8"/>
    <!-- IE  -->
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <!-- Title-->
    @yield('head')

    <!-- Viewport (Need to responsive) -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- Framework/libraries/Plugins/style CSS-->
    <link href="/css/plugins/vendor.css" rel="stylesheet" type="text/css"/>
    <link href="/css/main.css" rel="stylesheet" type="text/css"/>
</head>
<!-- head end-->
<body>
<div class="preloader"></div>
<div class="page-wrapper">
    <!-- Header Wrapper -->
    <div class="main-header-wrapper">
        <!-- main header of page -->
        <header class="main-header">
            <div class="main-header-content">
                <!-- logotype -->
                @include('front.partials.logo')
                <nav class="main-header-navigation">
                    <!-- Navigation Menu -->
                    @include('front.master.menu')
                </nav>
            </div>
        </header>
    </div>
    <div class="main-header-toggle btn hidden-down-xs-flex">
        <div class="main-header-toggle-icon">
            <div class="main-header-toggle-icon-item"></div>
        </div>
    </div>

    <div class="content-wrapper">
        @yield('content')
    </div>
</div>
<script src="/js/plugins/vendor.js"></script>
<script src="/js/main.js"></script>
@yield('scripts')
</body>
</html>
