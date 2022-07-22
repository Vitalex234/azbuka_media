@extends('front.master.layout')

@section('head')
    <title>{{ $meta->title }}</title>
    <meta name="keywords" content="{{ $meta->keywords }}">
    <meta name="description" content="{{ $meta->description }}">
@endsection

@section('content')
    <div class="home-page">
        <!-- Content Header-->
        <header class="home content-header">
            @include('front.partials.main_image')
            <div class="home-background-overlay"></div>
            <div class="home-content"><span
                    class="home-content-heading">{{ $text->where('name','main_title')->first()->content }}</span><span
                    class="home-content-subheading">{{ $text->where('name','main_subtitle')->first()->content }}</span>
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
                                <h3>{{ $text->where('name','about_block_title')->first()->content }}</h3>
                                <p>{{ $text->where('name','about_block_content')->first()->content }}</p>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <!-- About Block Image--><img

                                    src="{{ Storage::url($text->where('name','about_image')->first()->thumbnail('medium','image_url')) }}" alt="">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="counter-block">
                <!-- Counter Block Start -->
                <div class="counter-item col-xs-12 col-sm-6 col-md-3">
                    <div class="counter-item-icon"><i class="icon ion-clipboard"></i></div>
                    <h4>{{ $text->where('name','advantages_block_1')->first()->content }}</h4>
                </div>
                <!-- Counter Block Start -->
                <div class="counter-item col-xs-12 col-sm-6 col-md-3">
                    <div class="counter-item-icon"><i class="icon ion-model-s"></i></div>
                    <h4>{{ $text->where('name','advantages_block_2')->first()->content }}</h4>
                </div>
                <!-- Counter Block Start -->
                <div class="counter-item col-xs-12 col-sm-6 col-md-3">
                    <div class="counter-item-icon"><i class="icon ion-wrench"></i></div>
                    <h4>{{ $text->where('name','advantages_block_3')->first()->content }}</h4>
                </div>
                <!-- Counter Block Start -->
                <div class="counter-item col-xs-12 col-sm-6 col-md-3">
                    <div class="counter-item-icon"><i class="icon ion-university"></i></div>
                    <h4>{{ $text->where('name','advantages_block_4')->first()->content }}</h4>
                </div>
            </div>

            <div class="content-block-item">
                <div class="shop-block">
                    <div class="container container-custom">
                        <h3>{{ $text->where('name','news_title')->first()->content }}</h3>
                        <div class="row row-flex">
                            <!-- Grid Shop Item Block Start-->
                            @foreach($articles as $article)
                                <div class="shop-item-container col-xs-12 col-sm-6">
                                    <div class="shop-item-content">
                                        <div class="shop-item-content-image col-xs-12">
                                            <a href="{{route('newsItem', ['alias' => $article->alias]) }}">
                                                <img src="{{ $article->image_thumb }}" alt="{{ $article->title }}"/></a>
                                        </div>
                                        <h5 class="col-xs-12"><a href="{{route('newsItem', ['alias' => $article->alias]) }}">{{ $article->title }}</a></h5>
                                        <p class="col-xs-12">{{ $article->short_desc }}</p>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
            <!-- Content Block Item-->
            <div class="content-block-item">
                <div class="blog-block">
                    <div class="container-fluid ">
                        <h3>{{ $text->where('name','projects_title')->first()->content }}</h3>
                        <div class="gallery-block gallery-block-masonry-gutter row">
                            <!-- Gallery Block Start -->
                            @foreach ($projects as $project)
                                <div class="gallery-block-item col-xs-12 col-sm-6 col-lg-3 computer"><a
                                        href="{{route('projectItem', ['projectAlias' => $project->alias]) }}"><img
                                            src="{{ Storage::url($project->thumbnail('small','image')) }}"
                                            alt="{{$project->title}}"/>
                                        <div class="gallery-block-item-content">
                                            <h4>{{$project->title}}</h4>
                                            {{--                                            <div class="gallery-block-item-info"><span>Mac</span><span>Broken Screen </span></div>--}}
                                        </div>
                                    </a></div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>

            <div class="content-block-item">
                <div class="vendor-block">
                    <div class="container-fluid ">

                        <div class="row row-flex">
                            <div class="col-md-12 vendor-block-flex-container">
                            <!-- Gallery Block Start -->
                            @foreach ($vendors as $vendor)
                                <div class="vendor-item">
                                    <img src="{{ Storage::url($vendor->thumbnail('small','image')) }}" alt="" class="vendor-image">
                                </div>
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Content Footer  -->
        @include('front.partials.footer')
    </div>
@endsection
