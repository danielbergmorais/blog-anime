@extends('site.layouts.blog')

@section('content')
<!-- Anime Section Begin -->
<section class="anime-details spad">
    <div class="container">
        <div class="anime__details__content">
            <div class="row">
                <div class="col-lg-12 mb-5">
                    <div class="anime__details__title">
                        <h3>{{ $post->title }}</h3>
                        <span>{{ $post->subtitle }}</span>
                    </div>
                    @if($post->file)
                    <div class="anime__details__pic set-bg" data-setbg="{{ asset('storage/blog/'. $post->file ) }}">
                    </div>
                    @endif
                </div>

                <div class="col-lg-8">
                    <div class="anime__details__text ">
                        <p>{!! nl2br($post->content) !!}</p>

                        <div class="anime__details__widget">
                            @if($post->youtube)
                            <iframe width="100%" height="400" src="{{ $post->youtube }}" frameborder="0" allow="accelerometer;  encrypted-media; gyroscope;" allowfullscreen></iframe>
                            @endif
                        </div>
                        <p>
                            <span>Publicado em {{ date('d/m/Y', strtotime($post->created_at)) }}</span>
                        </p>
                        <div class="anime__details__btn">
                            <a href="{{ route('site.posts', $post->category) }}">
                                <span class="follow-btn">
                                    {{ $post->category->name }}
                                </span>
                            </a>
                        </div>

                    </div>
                </div>
                @include('site.parts.sidebar')
            </div>
        </div>
    </div>
</section>
<!-- Anime Section End -->
@endsection
