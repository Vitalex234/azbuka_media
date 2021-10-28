@extends('front.master.layout')

@section('head')
    <title>RepairED | Home</title>
@endsection

@section('content')
    <div class="gallery-page">
        <!-- Content Header-->
        <header class="content-header">
            <!-- Sub Header Block-->
            <div class="background-parallax" data-stellar-background-ratio="0.2"><img class="background-parallax-item" data-src="images/header-2.jpg" src="images/header-2.jpg" alt=""/></div>
            <div class="home-background-overlay"></div>
            <div class="content-header-content">
                <h2>Gallery</h2>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="gallery-masonry.html">Gallery</a></li>
                </ul>
            </div>
        </header>
        <!-- Content Block  -->
        <div class="content-block">
            <!-- Content Block Item-->
            <div class="content-block-item">
                <div class="container-fluid">
                    <h3>Our Work</h3>
                    <div class="container container-custom">
                        <div class="gallery-block-filter"><a class="active" data-filter="*" href="#">All</a><a data-filter=".computer" href="#">Computer</a><a data-filter=".phone" href="#">Phone</a><a data-filter=".tablet" href="#">Tablet</a></div>
                    </div>
                    <div class="gallery-block gallery-block-masonry-gutter row">
                        <!-- Gallery Block Start -->
                        <div class="gallery-block-item col-xs-12 col-sm-6 col-lg-3 computer"> <a href="gallery-item.html"><img src="images/gallery-3.jpg" alt=""/>
                                <div class="gallery-block-item-content">
                                    <h4>Basic Repair</h4>
                                    <div class="gallery-block-item-info"><span>Mac</span><span>Broken Screen </span></div>
                                </div></a></div>
                        <!-- Gallery Block Start -->
                        <div class="gallery-block-item col-xs-12 col-sm-6 col-lg-3 computer"> <a href="gallery-item.html"><img src="images/gallery-6.jpg" alt=""/>
                                <div class="gallery-block-item-content">
                                    <h4>Basic Repair</h4>
                                    <div class="gallery-block-item-info"><span>Mac</span><span>Broken Screen </span></div>
                                </div></a></div>
                        <!-- Gallery Block Start -->
                        <div class="gallery-block-item col-xs-12 col-sm-6 col-lg-3 phone"> <a href="gallery-item.html"><img src="images/gallery-4.jpg" alt=""/>
                                <div class="gallery-block-item-content">
                                    <h4>Basic Repair</h4>
                                    <div class="gallery-block-item-info"><span>Mac</span><span>Broken Screen </span></div>
                                </div></a></div>
                        <!-- Gallery Block Start -->
                        <div class="gallery-block-item col-xs-12 col-sm-6 col-lg-3 phone"> <a href="gallery-item.html"><img src="images/gallery-5.jpg" alt=""/>
                                <div class="gallery-block-item-content">
                                    <h4>Basic Repair</h4>
                                    <div class="gallery-block-item-info"><span>Mac</span><span>Broken Screen </span></div>
                                </div></a></div>
                        <!-- Gallery Block Start -->
                        <div class="gallery-block-item col-xs-12 col-sm-6 col-lg-3 phone"> <a href="gallery-item.html"><img src="images/gallery-4.jpg" alt=""/>
                                <div class="gallery-block-item-content">
                                    <h4>Basic Repair</h4>
                                    <div class="gallery-block-item-info"><span>Mac</span><span>Broken Screen </span></div>
                                </div></a></div>
                        <!-- Gallery Block Start -->
                        <div class="gallery-block-item col-xs-12 col-sm-6 col-lg-3 tablet"> <a href="gallery-item.html"><img src="images/gallery-3.jpg" alt=""/>
                                <div class="gallery-block-item-content">
                                    <h4>Basic Repair</h4>
                                    <div class="gallery-block-item-info"><span>Mac</span><span>Broken Screen </span></div>
                                </div></a></div>
                        <!-- Gallery Block Start -->
                        <div class="gallery-block-item col-xs-12 col-sm-6 col-lg-3 tablet"> <a href="gallery-item.html"><img src="images/gallery-6.jpg" alt=""/>
                                <div class="gallery-block-item-content">
                                    <h4>Basic Repair</h4>
                                    <div class="gallery-block-item-info"><span>Mac</span><span>Broken Screen </span></div>
                                </div></a></div>
                        <!-- Gallery Block Start -->
                        <div class="gallery-block-item col-xs-12 col-sm-6 col-lg-3 tablet"> <a href="gallery-item.html"><img src="images/gallery-4.jpg" alt=""/>
                                <div class="gallery-block-item-content">
                                    <h4>Basic Repair</h4>
                                    <div class="gallery-block-item-info"><span>Mac</span><span>Broken Screen </span></div>
                                </div></a></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content Footer  -->
        @include('front.partials.footer')
    </div>
@endsection
