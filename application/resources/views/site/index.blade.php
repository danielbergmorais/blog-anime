@extends('site.layouts.blog')

@section('content')
<!-- Hero Section Begin -->
<section class="hero">
    <div class="container">
        <div class="hero__slider owl-carousel">

            @foreach($bannerPosts as $bannerPost)
            <div class="hero__items set-bg" data-setbg="{{ asset('storage/blog/'. $bannerPost->file ) }}">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero__text">
                            <div class="label">{{ $bannerPost->category->name }}</div>
                            <h2>{{ \Illuminate\Support\Str::limit($bannerPost->title , 100, $end='...')}}</h2>
                            <p>{{ \Illuminate\Support\Str::limit($bannerPost->subtitle , 50, $end='...')}}</p>
                            <a href="{{ route('site.post', $bannerPost) }}">
                                <span>Saiba mais</span> <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="product__page__content">
                    <div class="product__page__title">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-6">
                                <div class="section-title">
                                    <h4>Mais notícias</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        @foreach($indexPosts as $indexPost)
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="{{ asset('storage/blog/'. $indexPost->file ) }}">
                                    <div class="ep">{{ $indexPost->category->name }}</div>
                                </div>
                                <div class="product__item__text">
                                    <ul>
                                        <li>{{ date('d/m/Y', strtotime($indexPost->created_at)) }}</li>
                                    </ul>
                                    <h5>
                                        <a href="{{ route('site.post', $indexPost) }}">
                                            {{ \Illuminate\Support\Str::limit($indexPost->title , 100, $end='...')}}
                                        </a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            @include('site.parts.sidebar')
        </div>
    </div>
</section>
<!-- Product Section End -->

@endsection
