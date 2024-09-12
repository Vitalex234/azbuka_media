@extends('front.master.layout')

@section('head')
    <title>{{$article->title}}</title>
@endsection

@section('content')
    @php
    $imagePath = $article->source_url === 'self' ? '/storage/' . $article->image : $article->image;
    @endphp
    <div class="shop-page">
        <!-- Content Header-->
        <header class="content-header">
            <!-- Sub Header Block-->
            @include('front.partials.main_image')
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
                <div class="container container-custom clearfix">
                    <!-- Content -->
                    <div class="col-xs-12 col-md-12 col-lg-12 clearfix">
                        <div class="blog-single-block">
                            <div class="blog-single-block-image"><img src="{{ $article->image }}"></div>
                            <div class="blog-single-block-content">
                                <h3>{{$article->title}}</h3>
                                <div class="blog-single-block-content-description">
                                    <p>
                                        {{ $article->full_content }}</p>
                                    @if ($article->source_url === 'self')
                                        <p>Иcточник: <a href="{{ $article->source_url }}">{{ $article->source_url }}</a></p>
                                    @endif


                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- SideBar -->

                </div>
            </div>
        </div>
        <!-- Content Footer  -->
        @include('front.partials.footer')
    </div>
@endsection
