@extends('front.page')

@push('css')
@endpush

@section('page')
    <div class="page page-news-main">

        @include('front.block.header')

        @include('front.block.nav-menu')

        <div class="mountain-wrapper display-none js_mobile_show">
            <img class="mountain" src="/img/mountain.png">
            <h2 class="title_uppercase shadow">{{ !empty($seo) ? $seo->seo_heading : 'Новости' }}</h2>
            <a class="yellow_icon yellow_icon_home" href="{{ route('index') }}"><img src="/img/home.png"></a>
        </div>

        <h1 class="title_uppercase catalog-top-title js_mobile_hide js-padding-top-90">{{ !empty($seo) ? $seo->seo_heading : 'Новости' }}</h1>

        <div class="page-news-list">
            <div class="page-inner">
                <div class="main-catalog flex">

                    @foreach($newses as $news)
                        <a href="{{ route('news.show', $news) }}" class="child-news-block flex shadow">
                            <div class="pattern-bottom"></div>
                            <div class="child-news-text">{{ str_limit( $news->title, 50, '...' ) }}</div>
                            <img src="{{ $news->getNewsImage($news, 'cart') }}" class="child-news-img">
                        </a>
                    @endforeach

                </div>
            </div>

            <img class="field-mobile display-none js_mobile_show" src="/img/field.png">

        </div>
    </div>
@endsection

@push('js')
@endpush
