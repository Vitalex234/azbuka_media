@extends('front.master.layout')

@section('head')
    <title>Азбука Медиа</title>
@endsection

@section('content')
    <div class="home-page">
        <!-- Content Header-->
        <header class="home content-header">
            <div class="home-background-container background-parallax" data-stellar-background-ratio="0.1"><img
                    class="background-parallax-item" src="/images/tochkarosta.jpg" data-src="/images/tochkarosta.jpg"
                    alt=""></div>
            <div class="home-background-overlay"></div>
            <div class="home-content"><span class="home-content-heading">Азбука Медиа</span><span
                    class="home-content-subheading">Проектная деятельность и аудио-видео интеграция</span>
            </div>
        </header>
        <!-- Content Block  -->
        <div class="content-block">
            <!-- Content Block Item-->
            <div class="content-block-item">
                <div class="about-block">
                    <div class="container container-custom">
                        <div class="row row-flex">
                            <div class="col-sm-12 col-md-6">
                                <!-- About Block Heading -->
                                <h3>О Компании</h3>
                                <p>Компания ориентирована на реализацию инженерных решений и проектную
                                    деятельность в направлениях образования и аудио-видео интеграции. Мы обладаем
                                    производственным, техническим и финансовым потенциалом для проектирования, поставки,
                                    монтажа и дальнейшего обслуживания современного интерактивного оборудования на особо
                                    важных социальных объектах.</p>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <!-- About Block Image--><img src="/images/homeabout.webp" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content Block Item-->
{{--            <div class="content-block-item">
                <div class="service-block">
                    <div class="container container-custom">
                        <h3>Our Service</h3>
                        <div class="row row-flex row-margin">
                            <!-- Service Icon Block Start-->
                            <div class="service-icon-container col-xs-12 col-sm-6 col-md-4">
                                <div class="service-icon-content">
                                    <div class="service-icon-image"><i class="icon ion-android-desktop"></i></div>
                                    <h4>Desktop Repair</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam autem sapiente
                                        dignissimos modi earum ex culpa, aperiam repudiandae? Quo quaerat eum ratione
                                        dignissimos similique itaque, cumque, nostrum veritatis esse aspernatur.</p><a
                                        href="service-item.html">Read More </a>
                                </div>
                            </div>
                            <!-- Service Icon Block Start-->
                            <div class="service-icon-container col-xs-12 col-sm-6 col-md-4">
                                <div class="service-icon-content">
                                    <div class="service-icon-image"><i class="icon ion-laptop"></i></div>
                                    <h4>Laptop Repair</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam doloremque maxime
                                        ullam quae necessitatibus quibusdam voluptatibus aspernatur, sapiente,
                                        cupiditate suscipit architecto nulla nihil itaque, ad et exercitationem.
                                        Voluptatem, amet.</p><a href="service-item.html">Read More </a>
                                </div>
                            </div>
                            <!-- Service Icon Block Start-->
                            <div class="service-icon-container col-xs-12 col-sm-6 col-md-4">
                                <div class="service-icon-content">
                                    <div class="service-icon-image"><i class="icon ion-ipad"></i></div>
                                    <h4>Tablet Repair</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam doloremque maxime
                                        ullam quae necessitatibus quibusdam voluptatibus aspernatur, sapiente,
                                        cupiditate suscipit architecto nulla nihil itaque, ad et exercitationem.
                                        Voluptatem, amet.</p><a href="service-item.html">Read More </a>
                                </div>
                            </div>
                            <!-- Service Icon Block Start-->
                            <div class="service-icon-container col-xs-12 col-sm-6 col-md-4">
                                <div class="service-icon-content">
                                    <div class="service-icon-image"><i class="icon ion-iphone"></i></div>
                                    <h4>Phone Repair</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam doloremque maxime
                                        ullam quae necessitatibus quibusdam voluptatibus aspernatur, sapiente,
                                        cupiditate suscipit architecto nulla nihil itaque, ad et exercitationem.
                                        Voluptatem, amet.</p><a href="service-item.html">Read More </a>
                                </div>
                            </div>
                            <!-- Service Icon Block Start-->
                            <div class="service-icon-container col-xs-12 col-sm-6 col-md-4">
                                <div class="service-icon-content">
                                    <div class="service-icon-image"><i class="icon ion-gear-b"></i></div>
                                    <h4>Selling Details</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam autem sapiente
                                        dignissimos modi earum ex culpa, aperiam repudiandae? Quo quaerat eum ratione
                                        dignissimos similique itaque, cumque, nostrum veritatis esse aspernatur.</p><a
                                        href="service-item.html">Read More </a>
                                </div>
                            </div>
                            <!-- Service Icon Block Start-->
                            <div class="service-icon-container col-xs-12 col-sm-6 col-md-4">
                                <div class="service-icon-content">
                                    <div class="service-icon-image"><i class="icon ion-ios-loop"></i></div>
                                    <h4>Buy Your Gadgets</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam doloremque maxime
                                        ullam quae necessitatibus quibusdam voluptatibus aspernatur, sapiente,
                                        cupiditate suscipit architecto nulla nihil itaque, ad et exercitationem.
                                        Voluptatem, amet.</p><a href="service-item.html">Read More </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content Block Item-->
            <div class="content-block-item">
                <div class="price-block">
                    <div class="container container-custom">
                        <h3>Our Price </h3>
                        <div class="row row-flex">
                            <!-- Price item -->
                            <div class="price-wrapper col-xs-12 col-sm-12 col-md-4">
                                <div class="price-block-item">
                                    <h4>Elite</h4><span>$20 / Hour</span>
                                    <ul>
                                        <li>Base Diagnostic</li>
                                        <li>Long Time of Work</li>
                                        <li>Low Price</li>
                                        <li>No Origial Spares</li>
                                    </ul>
                                    <a class="btn hvr-bounce-to-right" href="#">Purchase</a>
                                </div>
                            </div>
                            <!-- Price item -->
                            <div class="price-wrapper col-xs-12 col-sm-12 col-md-4">
                                <div class="price-block-item">
                                    <h4>Premium</h4><span>$35 / Hour</span>
                                    <ul>
                                        <li>Base Diagnostic</li>
                                        <li>Middle Time of Work</li>
                                        <li>Middle Price</li>
                                        <li>Origial Spares</li>
                                    </ul>
                                    <a class="btn hvr-bounce-to-right" href="#">Purchase</a>
                                </div>
                            </div>
                            <!-- Price item -->
                            <div class="price-wrapper col-xs-12 col-sm-12 col-md-4">
                                <div class="price-block-item">
                                    <h4>VIP</h4><span>$50 / Hour</span>
                                    <ul>
                                        <li>Goodest Diagnostic</li>
                                        <li>Fast Time of Work</li>
                                        <li>Middle Price</li>
                                        <li>Origial Spares</li>
                                    </ul>
                                    <a class="btn hvr-bounce-to-right" href="#">Purchase</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content Block Item-->
            <div class="content-block-item">
                <div class="team-block">
                    <div class="container container-custom">
                        <h3>Our Team </h3>
                        <div class="row row-flex">
                            <!-- College Block-->
                            <div class="team-wrapper col-xs-12 col-md-4">
                                <div class="team-block-item">
                                    <!-- College image--><img src="images/team-3.jpg" alt=""/>
                                    <div class="team-content-wrapper">
                                        <!-- College name --><span>Rose Doe</span><br/><span>Technical Support</span>
                                        <ul>
                                            <!-- College social item -->
                                            <li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
                                            <!-- College social item -->
                                            <li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
                                            <!-- College social item -->
                                            <li><a href="#"><i class="icon ion-social-github"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- College Block-->
                            <div class="team-wrapper col-xs-12 col-md-4">
                                <div class="team-block-item">
                                    <!-- College image--><img src="images/team-2.jpg" alt=""/>
                                    <div class="team-content-wrapper">
                                        <!-- College name --><span>Jane Doe</span><br/><span>Service Manager</span>
                                        <ul>
                                            <!-- College social item -->
                                            <li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
                                            <!-- College social item -->
                                            <li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
                                            <!-- College social item -->
                                            <li><a href="#"><i class="icon ion-social-instagram"></i></a></li>
                                            <!-- College social item -->
                                            <li><a href="#"><i class="icon ion-social-dribbble"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- College Block-->
                            <div class="team-wrapper col-xs-12 col-md-4">
                                <div class="team-block-item">
                                    <!-- College image--><img src="images/team-1.jpg" alt=""/>
                                    <div class="team-content-wrapper">
                                        <!-- College name --><span>Bob Doe</span><br/><span>Repairer</span>
                                        <ul>
                                            <!-- College social item -->
                                            <li><a href="#"><i class="icon ion-social-googleplus"></i></a></li>
                                            <!-- College social item -->
                                            <li><a href="#"><i class="icon ion-social-tumblr"></i></a></li>
                                            <!-- College social item -->
                                            <li><a href="#"><i class="icon ion-social-instagram"></i></a></li>
                                            <!-- College social item -->
                                            <li><a href="#"><i class="icon ion-social-designernews"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>--}}
            <!-- Counter Block-->
            <div class="counter-block">
                <!-- Counter Block Start -->
                <div class="counter-item col-xs-12 col-sm-6 col-md-3">
                    <div class="counter-item-icon"><i class="icon ion-clipboard"></i></div>
                    <h4>Проектирование</h4>
                </div>
                <!-- Counter Block Start -->
                <div class="counter-item col-xs-12 col-sm-6 col-md-3">
                    <div class="counter-item-icon"><i class="icon ion-model-s"></i></div>
                    <h4>Поставка оборудования</h4>
                </div>
                <!-- Counter Block Start -->
                <div class="counter-item col-xs-12 col-sm-6 col-md-3">
                    <div class="counter-item-icon"><i class="icon ion-wrench"></i></div>
                    <h4>Монтаж</h4>
                </div>
                <!-- Counter Block Start -->
                <div class="counter-item col-xs-12 col-sm-6 col-md-3">
                    <div class="counter-item-icon"><i class="icon ion-university"></i></div>
                    <h4>Обучение</h4>
                </div>
            </div>

            <div class="content-block-item">
                <div class="shop-block">
                    <div class="container container-custom">
                        <h3>Новости</h3>
                        <div class="row row-flex">
                            <!-- Grid Shop Item Block Start-->
                            <div class="shop-item-container col-xs-12 col-sm-6">
                                <div class="shop-item-content">
                                    <div class="shop-item-content-image col-xs-12"><a href="#"><img src="/images/RN3.png" alt=""/></a>
                                    </div>
                                    <h5 class="col-xs-12"><a href="#">RGBLink обновила ассортимент компактных видеомикшеров Mini</a></h5>
                                    <p class="col-xs-12">Компания RGBLink представила видеомикшер mini-Pro, который пришел
                                        на смену модели RGBlink Mini+, получив расширенные возможности.</p>
                                </div>
                            </div>
                            <div class="shop-item-container col-xs-12 col-sm-6">
                                <div class="shop-item-content">
                                    <div class="shop-item-content-image col-xs-12"><a href="#"><img src="/images/RN3.png" alt=""/></a>
                                    </div>
                                    <h5 class="col-xs-8"><a href="#">Xiaomi Redmi Note 3</a></h5>
                                    <p class="col-xs-12">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos
                                        obcaecati qui, ut neque voluptates magni officia consectetur minus nisi,
                                        pariatur accusantium magnam ducimus sed amet, id quasi quod enim. In.</p>
                                </div>
                            </div>
                            <div class="shop-item-container col-xs-12 col-sm-6">
                                <div class="shop-item-content">
                                    <div class="shop-item-content-image col-xs-12"><a href="#"><img src="/images/RN3.png" alt=""/></a>
                                    </div>
                                    <h5 class="col-xs-8"><a href="#">Xiaomi Redmi Note 3</a></h5>
                                    <p class="col-xs-12">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos
                                        obcaecati qui, ut neque voluptates magni officia consectetur minus nisi,
                                        pariatur accusantium magnam ducimus sed amet, id quasi quod enim. In.</p>
                                </div>
                            </div>
                            <div class="shop-item-container col-xs-12 col-sm-6">
                                <div class="shop-item-content">
                                    <div class="shop-item-content-image col-xs-12"><a href="#"><img src="/images/RN3.png" alt=""/></a>
                                    </div>
                                    <h5 class="col-xs-8"><a href="#">Xiaomi Redmi Note 3</a></h5>
                                    <p class="col-xs-12">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos
                                        obcaecati qui, ut neque voluptates magni officia consectetur minus nisi,
                                        pariatur accusantium magnam ducimus sed amet, id quasi quod enim. In.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Content Block Item-->
            <div class="content-block-item">
                <div class="blog-block">
                    <div class="container-fluid ">
                        <h3>Реализованные проекты</h3>
                        <div class="gallery-block gallery-block-masonry-gutter row">
                            <!-- Gallery Block Start -->
                            <div class="gallery-block-item col-xs-12 col-sm-6 col-lg-3 computer"> <a href="gallery-item.html"><img src="/images/gallery-3.jpg" alt=""/>
                                    <div class="gallery-block-item-content">
                                        <h4>Basic Repair</h4>
                                        <div class="gallery-block-item-info"><span>Mac</span><span>Broken Screen </span></div>
                                    </div></a></div>
                            <!-- Gallery Block Start -->
                            <div class="gallery-block-item col-xs-12 col-sm-6 col-lg-3 computer"> <a href="gallery-item.html"><img src="/images/gallery-6.jpg" alt=""/>
                                    <div class="gallery-block-item-content">
                                        <h4>Basic Repair</h4>
                                        <div class="gallery-block-item-info"><span>Mac</span><span>Broken Screen </span></div>
                                    </div></a></div>
                            <!-- Gallery Block Start -->
                            <div class="gallery-block-item col-xs-12 col-sm-6 col-lg-3 phone"> <a href="gallery-item.html"><img src="/images/gallery-4.jpg" alt=""/>
                                    <div class="gallery-block-item-content">
                                        <h4>Basic Repair</h4>
                                        <div class="gallery-block-item-info"><span>Mac</span><span>Broken Screen </span></div>
                                    </div></a></div>
                            <!-- Gallery Block Start -->
                            <div class="gallery-block-item col-xs-12 col-sm-6 col-lg-3 phone"> <a href="gallery-item.html"><img src="/images/gallery-5.jpg" alt=""/>
                                    <div class="gallery-block-item-content">
                                        <h4>Basic Repair</h4>
                                        <div class="gallery-block-item-info"><span>Mac</span><span>Broken Screen </span></div>
                                    </div></a></div>
                            <!-- Gallery Block Start -->
                            <div class="gallery-block-item col-xs-12 col-sm-6 col-lg-3 phone"> <a href="gallery-item.html"><img src="/images/gallery-4.jpg" alt=""/>
                                    <div class="gallery-block-item-content">
                                        <h4>Basic Repair</h4>
                                        <div class="gallery-block-item-info"><span>Mac</span><span>Broken Screen </span></div>
                                    </div></a></div>
                            <!-- Gallery Block Start -->
                            <div class="gallery-block-item col-xs-12 col-sm-6 col-lg-3 tablet"> <a href="gallery-item.html"><img src="/images/gallery-3.jpg" alt=""/>
                                    <div class="gallery-block-item-content">
                                        <h4>Basic Repair</h4>
                                        <div class="gallery-block-item-info"><span>Mac</span><span>Broken Screen </span></div>
                                    </div></a></div>
                            <!-- Gallery Block Start -->
                            <div class="gallery-block-item col-xs-12 col-sm-6 col-lg-3 tablet"> <a href="gallery-item.html"><img src="/images/gallery-6.jpg" alt=""/>
                                    <div class="gallery-block-item-content">
                                        <h4>Basic Repair</h4>
                                        <div class="gallery-block-item-info"><span>Mac</span><span>Broken Screen </span></div>
                                    </div></a></div>
                            <!-- Gallery Block Start -->
                            <div class="gallery-block-item col-xs-12 col-sm-6 col-lg-3 tablet"> <a href="gallery-item.html"><img src="/images/gallery-4.jpg" alt=""/>
                                    <div class="gallery-block-item-content">
                                        <h4>Basic Repair</h4>
                                        <div class="gallery-block-item-info"><span>Mac</span><span>Broken Screen </span></div>
                                    </div></a></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Content Footer  -->
        @include('front.partials.footer')
    </div>
@endsection
