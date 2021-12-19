@extends('front.master.layout')

@section('head')
    <title>Азбука Медиа. Контакты компании</title>
@endsection

@section('content')
{{--    @dd($project)--}}
    <div class="shop-page">
        <!-- Content Header-->
        <header class="content-header">
            <!-- Sub Header Block-->
            <div class="background-parallax" data-stellar-background-ratio="0.2"><img class="background-parallax-item"
                                                                                      data-src="/images/tochkarosta.jpg"
                                                                                      src="/images/tochkarosta.jpg"
                                                                                      alt=""/></div>
            <div class="home-background-overlay"></div>
            {{--            <div class="content-header-content">--}}
            {{--                <h2>Contact</h2>--}}
            {{--                <ul>--}}
            {{--                    <li><a href="index.html">Home</a></li>--}}
            {{--                    <li><a href="contact.html">Contact</a></li>--}}
            {{--                </ul>--}}
            {{--            </div>--}}
        </header>
        <!-- Content Block  -->
        <div class="content-block">
            <!-- Content Block Item-->
            <div class="content-block-item">
                <div class="container container-custom">
                    <h3>{{$project->title}}</h3>
                    <div class="row row-flex">
                        <div class="col-xs-12 col-md-8 col-md-offset-2">
                            <div class="gallery-item-gallery-item project-detail">
                                <img src="/uploads/{{$project->thumbnail('medium','image')}}"  alt="{{$project->title}}">
                            </div>
                        </div>
{{--                        <div class="col-xs-12 col-md-6">
                            <h4>Story about this work </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic porro tenetur magnam doloremque, incidunt vitae reiciendis nemo asperiores quas explicabo molestias magni exercitationem illo voluptas repellendus distinctio, perferendis blanditiis voluptatum. ipsum dolor sit amet, consectetur adipisicing elit. Quidem nam, dolorum similique omnis excepturi ipsam impedit nihil, quis quisquam reiciendis, autem earum accusamus minima repellat quibusdam cum debitis eligendi? Unde. ipsum dolor sit amet, consectetur adipisicing elit. Non maxime explicabo nesciunt saepe numquam sint, eius iste id, mollitia, architecto at hic commodi ab consequatur ducimus alias veritatis quasi dolorem?</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi et recusandae tempora repudiandae animi, placeat tempore blanditiis assumenda voluptas officia soluta nihil nam vitae. Magni facere, eum dolore optio et.</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="gallery-item-image"> </div>
                            <div class="gallery-item-gallery row row-flex">
                                <div class="col-xs-6">
                                    <div class="gallery-item-gallery-item active"><img src="/images/gallery-1.jpg" data-src="/images/gallery-1.jpg" alt=""></div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="gallery-item-gallery-item"><img src="/images/gallery-2.jpg" data-src="/images/gallery-2.jpg" alt=""></div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="gallery-item-gallery-item"><img src="/images/gallery-3.jpg" data-src="/images/gallery-3.jpg" alt=""></div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="gallery-item-gallery-item"><img src="/images/gallery-4.jpg" data-src="/images/gallery-4.jpg" alt=""></div>
                                </div>
                            </div>
                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
        <!-- Content Footer  -->
        @include('front.partials.footer')
    </div>
@endsection
