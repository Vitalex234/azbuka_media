@extends('front.master.layout')

@section('head')
    <title>Азбука Медиа. Контакты компании</title>
@endsection

@section('content')
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
                <div class="container container-custom clearfix">
                    <!-- Content -->
                    <div class="col-xs-12 col-md-12 col-lg-12 clearfix">
                        <div class="blog-single-block">
                            <div class="blog-single-block-image"><img src="/images/blog-1.jpg"></div>
                            <div class="blog-single-block-content">
                                <h3>Heading</h3>
                                <div class="blog-single-block-content-description">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum libero quasi
                                        labore quos rem? Enim necessitatibus in accusamus vel illo fugit, accusantium
                                        ipsam blanditiis quam impedit voluptatem repellat quo molestias. ipsum dolor sit
                                        amet, consectetur adipisicing elit. Provident rerum quis magni, voluptatibus
                                        sint exercitationem. Quod recusandae fugit laborum adipisci dolore iste odio
                                        iure, eos. Incidunt, autem voluptatibus perspiciatis aspernatur. Ipsum dolor sit
                                        amet, consectetur adipisicing elit. Consequatur quibusdam voluptate labore
                                        quaerat ipsa libero reiciendis ab tempore culpa eos beatae dolorum doloribus,
                                        nostrum nesciunt perspiciatis enim natus ullam voluptatibus. ipsum dolor sit
                                        amet, consectetur adipisicing elit. Nulla explicabo ullam cupiditate vitae
                                        necessitatibus reprehenderit debitis laudantium quae, consequatur quod assumenda
                                        corrupti aliquam. Natus distinctio, provident dolorem. Quas, voluptas, odio.
                                        ipsum dolor sit amet, consectetur adipisicing elit. Commodi consectetur quis
                                        facilis quasi quo assumenda, beatae quas eius. Tempore sequi reiciendis cum
                                        vero, minima nemo, sed molestiae recusandae necessitatibus expedita.</p>

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
