@extends('site.layouts.blog')

@section('content')
<!-- Product Section Begin -->
<section class="product-page spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="product__page__content">
                    <div class="product__page__title">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-6">
                                <div class="section-title">
                                    <h4>{{ isset($category) ? $category : 'Notícias' }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($posts as $post)
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="{{ asset('storage/blog/'. $post->file ) }}">
                                    <div class="ep">{{ $post->category->name }}</div>
                                </div>
                                <div class="product__item__text">
                                    <ul>
                                        <li>{{ date('d/m/Y', strtotime($post->created_at)) }}</li>
                                    </ul>
                                    <h5>
                                        <a href="{{ route('site.post', $post) }}">
                                            {{ \Illuminate\Support\Str::limit($post->title , 100, $end='...')}}
                                        </a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                {{$posts->links()}}
            </div>

            @include('site.parts.sidebar')
        </div>
    </div>
</section>
<!-- Product Section End -->
@endsection
