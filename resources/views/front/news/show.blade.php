@extends('front.page')

@push('css')
    <link href="@css(swiper.min.css)" rel="stylesheet">
@endpush

@section('page')
    <div class="page page-news-main">

        @include('front.block.header')

        @include('front.block.nav-menu')

        <div class="mountain-wrapper display-none js_mobile_show">
            <img class="mountain" src="/img/mountain.png">
            <h2 class="title_uppercase shadow">{{ $seo->seo_heading ?? $news->title }}</h2>
            <a class="yellow_icon yellow_icon_home" href="{{ route('index') }}"><img src="/img/home.png"></a>
        </div>

        <div class="page-news-list js-padding-top-90">
            <div class="page-inner">
                <a class="button button_yellow position-button-back flex" href="{{ route('news.index') }}"><img src="/img/back.png" alt="">назад</a>
                <h1 class="news-title title_uppercase js_mobile_hide">{{ $seo->seo_heading ?? $news->title }}</h1>
                <div class="news-text ckeditor-about">{!! $news->text !!}</div>
                <div class="news-slider">
                    <div class="swiper-container swiper-container-news">
                        <div class="swiper-wrapper">
                            @foreach($images as $image)
                                <img class="swiper-slide" src="{{ $image->getUrl('item') }}" alt="слайд 1"/>
                            @endforeach
                        </div>
                        <div class="swiper-pagination swiper-pagination-main"></div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
            <img class="field-mobile display-none js_mobile_show" src="/img/field.png">
        </div>
@endsection

@push('js')
    <script src="@js(app/swiper.min.js)"></script>
    <script src="@js(app/swiper.js)"></script>
@endpush
