@extends('site.layouts.blog')

@section('content')
<!-- Hero Section Begin -->
<section class="hero">
    <div class="container">
        <div class="hero__slider owl-carousel">
            <div class="hero__items set-bg" data-setbg="{{ asset('assets/site/img/tower-of-god.jpg') }}">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero__text">
                            <div class="label">Animes</div>
                            <h2>Data de lançamento da 2ª temporada de Tower of God é revelada</h2>
                            <p>Prepare-se para voltar à torre</p>
                            <a href="/noticia"><span>Saiba mais</span> <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__items set-bg" data-setbg="{{ asset('assets/site/img/venom.webp') }}">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero__text">
                            <div class="label">Filmes</div>
                            <h2>O que você precisa saber sobre Venom: The Last Dance</h2>
                            <p>A sequência de Venom chega aos cinemas no dia 28 de outubro deste ano!</p>
                            <a href="/noticia"><span>Saiba mais</span> <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__items set-bg" data-setbg="{{ asset('assets/site/img/wukong.webp') }}">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero__text">
                            <div class="label">Jogos</div>
                            <h2>Black Myth: Wukong será lançado em 20 de agosto</h2>
                            <p>Trailer também revela que um dos principais artefatos de Sun Wukong estará no game</p>
                            <a href="/noticia"><span>Saiba mais</span> <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
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
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="{{ asset('assets/site/img/zzz.webp') }}">
                                    <div class="ep">06/07/2024</div>
                                </div>
                                <div class="product__item__text">
                                    <ul>
                                        <li>Jogos</li>
                                    </ul>
                                    <h5><a href="#">Zenless Zone Zero, da HoYoverse, já está disponível</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="{{ asset('assets/site/img/elden.webp') }}">
                                    <div class="ep">06/07/2024</div>
                                </div>
                                <div class="product__item__text">
                                    <ul>
                                        <li>Jogos</li>
                                    </ul>
                                    <h5><a href="#">Novo trailer cinematográfico de Elden Ring: Shadow of the Erdtree apresenta trama de Messmer e Miquella</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="{{ asset('assets/site/img/metaphor.jpg') }}">
                                    <div class="ep">06/07/2024</div>
                                </div>
                                <div class="product__item__text">
                                    <ul>
                                        <li>Jogos</li>
                                    </ul>
                                    <h5><a href="#">Metaphor: ReFantazio, novo RPG dos criadores de Persona, ganha trailer estonteante e data de lançamento</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="{{ asset('assets/site/img/wukong.webp') }}">
                                    <div class="ep">06/07/2024</div>
                                </div>
                                <div class="product__item__text">
                                    <ul>
                                        <li>Jogos</li>
                                    </ul>
                                    <h5><a href="#">Metaphor: ReFantazio, novo RPG dos criadores de Persona, ganha trailer estonteante e data de lançamento</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            @include('site.parts.sidebar')
        </div>
    </div>
</section>
<!-- Product Section End -->

@endsection
