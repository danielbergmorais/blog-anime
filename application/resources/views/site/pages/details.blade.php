@extends('site.layouts.blog')


@section('content')
<!-- Anime Section Begin -->
<section class="anime-details spad">
    <div class="container">
        <div class="anime__details__content">
            <div class="row">
                <div class="col-lg-12 mb-5">
                    <div class="anime__details__title">
                        <h3>Data de lançamento da 2ª temporada de Tower of God é revelada</h3>
                        <span>Prepare-se para voltar à torre</span>
                    </div>
                    <div class="anime__details__pic set-bg" data-setbg="{{ asset('assets/site/img/tower-of-god.jpg') }}">
                        <!--<div class="comment"><i class="fa fa-comments"></i> 11</div>
                        <div class="view"><i class="fa fa-eye"></i> 9141</div>-->
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="anime__details__text ">
                        <p>Já sabíamos que a segunda temporada de Tower of God chegaria no dia 7 de julho, mas agora temos o horário exato que o tão esperado anime retorna à Crunchyroll. Você poderá assistir à 2ª temporada de Tower of God na Crunchyroll a partir de 7 de julho de 2024, às 11:00 (horário de Brasília).</p>
                        <div class="anime__details__widget">
                            <iframe width="100%" height="400" src="https://www.youtube.com/embed/wMqlnGZRUZ8" frameborder="0" allow="accelerometer;  encrypted-media; gyroscope;" allowfullscreen></iframe>
                        </div>
                        <p>
                            <span>Fonte: Crunchyroll</span>
                        </p>
                        <div class="anime__details__btn">
                            <a href="#">
                                <span class="follow-btn">
                                    Anime
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
