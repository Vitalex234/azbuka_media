@extends('front.master.layout')

@section('head')
    <title>{{ $meta->title }}</title>
    <meta name="keywords" content="{{ $meta->keywords }}">
    <meta name="description" content="{{ $meta->description }}">
    <script src="https://api-maps.yandex.ru/2.1/?apikey=db5c5f9a-b0bc-4e1c-9b72-d75874b06bb8&lang=ru_RU" type="text/javascript">
    </script>
@endsection

@section('content')
    <div class="contact-page">
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
                <div class="contact-block">
                    <div class="container container-custom">
                        <div class="row row-flex">
                            <div class="col-xs-12 col-md-6 contact-block-content">
                                <h4>{{ $text->where('name','contact_title')->first()->content }}</h4>
                                <ul>
                                    <li>Email:  <b>{{ $text->where('name','contact_email')->first()->content }}</b></li>
                                    <li>Телефон:  <b>{{ $text->where('name','contact_phone')->first()->content }}</b></li>
                                    <li>Адрес:  <b>{{ $text->where('name','contact_address')->first()->content }}</b></li>
                                </ul>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <form method="post">
                                    @csrf
                                    <div class="row row-flex">
                                        <div class="col-xs-12 col-md-6">
                                            <input placeholder="Введите ваше имя" name="name" id="con_name">
                                        </div>
                                        <div class="col-xs-12 col-md-6">
                                            <input placeholder="Введите ваш E-mail" name="email" id="con_email">
                                        </div>
                                        <div class="col-xs-12">
                                            <textarea placeholder="Сообщение" name="text" id="con_text"></textarea>
                                        </div>
                                    </div>
                                    <button class="btn hvr-bounce-to-right" type="submit">Отправить</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="contact-block-map">
                        <div id="yandex-map" style="width: 100%; height: 100%; filter: grayscale(0.7);"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content Footer  -->
        @include('front.partials.footer')
    </div>
@endsection

@section('scripts')
<script>
    ymaps.ready(init);

    function init() {
    var myMap = new ymaps.Map("yandex-map", {
    center: [53.214610, 50.222795],
    zoom: 17,
    controls: ['zoomControl']
    }),
    myGeoObject = new ymaps.GeoObject({
    // Описание геометрии.
    geometry: {
    type: "Point",
    coordinates: [53.214610, 50.222795]
    },
    // Свойства.
    properties: {
    // Контент метки.
    iconContent: '<b>Азбука медиа</b>',
    hintContent: '<p>{{ $text->where('name','contact_address')->first()->content }}</p>'
    }
    }, {
    // Опции.
    // Иконка метки будет растягиваться под размер ее содержимого.
    preset: 'islands#darkOrangeStretchyIcon',

    });

    myMap.geoObjects.add(myGeoObject);
    }
</script>
@endsection
