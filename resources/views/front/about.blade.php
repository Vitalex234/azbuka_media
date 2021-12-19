@extends('front.master.layout')

@section('head')
    <title>{{ $meta->title }}</title>
    <meta name="keywords" content="{{ $meta->keywords }}">
    <meta name="description" content="{{ $meta->description }}">
@endsection

@section('content')
    <div class="shop-page">
        <!-- Content Header-->
        <header class="content-header">
            <!-- Sub Header Block-->
            <div class="background-parallax" data-stellar-background-ratio="0.2"><img class="background-parallax-item"
                                                                                      data-src="images/tochkarosta.jpg"
                                                                                      src="images/tochkarosta.jpg"
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
                    <h3>{{ $text->where('name','about_title')->first()->content }}</h3>
                    <div class="row row-flex">
                        {!! $text->where('name','about_content')->first()->content !!}
                    </div>
                </div>
            </div>
        </div>
        <!-- Content Footer  -->
        @include('front.partials.footer')
    </div>
@endsection
