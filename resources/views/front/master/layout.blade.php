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
    <link href="css/plugins/vendor.css" rel="stylesheet" type="text/css"/>
    <link href="css/main.css" rel="stylesheet" type="text/css"/>
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
                <div class="main-header-logotype-container">
                    <!-- Your Logotype --><a href="/"><img src="images/logo.webp" alt=""></a>
                </div>
                <nav class="main-header-navigation">
                    <!-- Navigation Menu -->
                    @include('front.master.menu')
                </nav>
            </div>
            <!-- Main-header Social Link and part of info -->
{{--            <div class="main-header-subcontent-container">--}}
{{--                <!-- Social list -->--}}
{{--                <ul class="main-header-social-list">--}}
{{--                    <!-- Social Item -->--}}
{{--                    <li class="main-header-social-item">--}}
{{--                        <!-- Social Link --><a class="main-header-social-link" href="#">--}}
{{--                            <!-- Social Icon --><i class="icon ion-social-twitter"></i></a>--}}
{{--                    </li>--}}
{{--                    <li class="main-header-social-item"> <a class="main-header-social-link" href="#"><i class="icon ion-social-facebook"></i></a></li>--}}
{{--                    <li class="main-header-social-item"><a class="main-header-social-link" href="#"><i class="icon ion-social-github"></i></a></li>--}}
{{--                    <li class="main-header-social-item"><a class="main-header-social-link" href="#"><i class="icon ion-social-pinterest"> </i></a></li>--}}
{{--                    <li class="main-header-social-item"> <a class="main-header-social-link" href="#"><i class="icon ion-social-linkedin">   </i></a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
        </header>
    </div>

    <div class="content-wrapper">
        @yield('content')
    </div>
</div>
<script src="js/plugins/vendor.js"></script>
<script src="js/main.js"></script>
@yield('scripts')
</body>
</html>
