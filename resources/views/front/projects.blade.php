@extends('front.master.layout')

@section('head')
    <title>{{ $meta->title }}</title>
    <meta name="keywords" content="{{ $meta->keywords }}">
    <meta name="description" content="{{ $meta->description }}">
@endsection

@section('content')
    <div class="gallery-page">
        <!-- Content Header-->
        <header class="content-header">
            <!-- Sub Header Block-->
            @include('front.partials.main_image')
            <div class="home-background-overlay"></div>

        </header>
        <!-- Content Block  -->
        <div class="content-block">
            <!-- Content Block Item-->
            <div class="content-block-item">
                <div class="container-fluid">
                    <h3>{{ $text->where('name','projects_title')->first()->content }}</h3>

                    <div class="gallery-block gallery-block-masonry-gutter row">
                        @foreach ($projects as $project)
                        <div class="gallery-block-item col-xs-12 col-sm-6 col-lg-3 computer"><a
                                href="{{route('projectItem', ['projectAlias' => $project->alias]) }}">
                                <img src="{{ Storage::url($project->thumbnail('small','image')) }}" alt="{{$project->title}}"/>
                                <div class="gallery-block-item-content">
                                    <h4>{{$project->title}}</h4>
                                </div>
                            </a></div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- Content Footer  -->
        @include('front.partials.footer')
    </div>
@endsection
