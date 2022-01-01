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
            @include('front.partials.main_image')
            <div class="home-background-overlay"></div>

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
                                <img src="{{ Storage::url($project->thumbnail('medium','image')) }}"  alt="{{$project->title}}">
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
