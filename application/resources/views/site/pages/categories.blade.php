@extends('site.layouts.blog')

@section('content')
<!-- Product Section Begin -->
<section class="product-page spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="product__page__content">
                    <div class="product__page__title">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-6">
                                <div class="section-title">
                                    <h4>Jogos</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="{{ asset('assets/site/img/zzz.webp') }}">
                                    <div class="ep">06/07/2024</div>
                                    <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                    <div class="view"><i class="fa fa-eye"></i> 9141</div>
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
                                    <div class="ep">Jogos</div>
                                </div>
                                <div class="product__item__text">
                                    <ul>
                                        <li>06/07/2024</li>
                                    </ul>
                                    <h5><a href="#">Metaphor: ReFantazio, novo RPG dos criadores de Persona, ganha trailer estonteante e data de lançamento</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="{{ asset('assets/site/img/wukong.webp') }}">
                                    <div class="ep">Jogos</div>
                                </div>
                                <div class="product__item__text">
                                    <ul>
                                        <li>06/07/2024</li>
                                    </ul>
                                    <h5><a href="#">Metaphor: ReFantazio, novo RPG dos criadores de Persona, ganha trailer estonteante e data de lançamento</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product__pagination">
                    <a href="#" class="current-page">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                    <a href="#"><i class="fa fa-angle-double-right"></i></a>
                </div>
            </div>

            @include('site.parts.sidebar')
        </div>
    </div>
</section>
<!-- Product Section End -->
@endsection
