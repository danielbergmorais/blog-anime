@extends('admin.layouts.user_type.auth')

@section('content')
<div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
    <div class="container-fluid">
        <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('{{ asset('assets/admin/img/curved-images/white-curved.jpg') }}'); background-position-y: 50%;">
            <span class="mask bg-gradient-primary opacity-6"></span>
        </div>
        <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
            <div class="row gx-4">

                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">
                            Daniel Berg
                        </h5>
                        <p class="mb-0 font-weight-bold text-sm">
                            Autor
                        </p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                    <div class="nav-wrapper position-relative end-0">
                        <ul class="nav nav-pills nav-fill p-1 bg-transparent" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                                    <svg class="text-dark" width="16px" height="16px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <title>Configurações</title>
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g transform="translate(-2020.000000, -442.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                <g transform="translate(1716.000000, 291.000000)">
                                                    <g transform="translate(304.000000, 151.000000)">
                                                        <polygon class="color-background" opacity="0.596981957" points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667">
                                                        </polygon>
                                                        <path class="color-background" d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z" opacity="0.596981957"></path>
                                                        <path class="color-background" d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z">
                                                        </path>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                    <span class="ms-1">Configurações</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12 mt-4">
                <div class="card mb-4">
                    <div class="card-header pb-0 p-3">
                        <h6 class="mb-1">Notícias publicadas</h6>
                    </div>
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-xl-9 col-md-8">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-6 mb-4">
                                        <div class="card card-blog card-plain">
                                            <div class="position-relative">
                                                <a href="javascript:;">
                                                    <div class="d-block shadow border-radius-xl min-height-250" style="background-image: url('{{ asset('assets/site/img/venom.webp') }}'); background-position-y: 50%;  background-size: cover">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="card-body px-1 pb-0">
                                                <p class="text-gradient text-dark mb-2 text-sm">Filmes</p>
                                                <a href="javascript:;">
                                                    <h5>
                                                        O que você precisa saber sobre Venom: The Last Dance
                                                    </h5>
                                                </a>
                                                <p class="mb-4 text-sm">
                                                    A sequência de Venom chega aos cinemas no dia 28 de outubro deste ano!
                                                </p>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <button type="button" class="btn btn-outline-primary btn-sm mb-0">Ver Notícia</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-4 col-lg-6 mb-4">
                                        <div class="card card-blog card-plain">
                                            <div class="position-relative">
                                                <a href="javascript:;">
                                                    <div class="d-block shadow border-radius-xl min-height-250" style="background-image: url('{{ asset('assets/site/img/bluelock.webp') }}'); background-position-y: 50%;  background-size: cover">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="card-body px-1 pb-0">
                                                <p class="text-gradient text-dark mb-2 text-sm">Anime</p>
                                                <a href="javascript:;">
                                                    <h5>
                                                        2ª temporada de BLUE LOCK ganha trailer cheio de tensão
                                                    </h5>
                                                </a>
                                                <p class="mb-4 text-sm">
                                                    No vídeo, podemos ouvir pela primeira vez Satoshi Hino interpretando Oliver Aiku
                                                </p>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <button type="button" class="btn btn-outline-primary btn-sm mb-0">Ver Notícia</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-4 col-lg-6 mb-4">
                                        <div class="card card-blog card-plain">
                                            <div class="position-relative">
                                                <a href="javascript:;">
                                                    <div class="d-block shadow border-radius-xl min-height-250" style="background-image: url('{{ asset('assets/site/img/refantazio.jpg') }}'); background-position-y: 50%;  background-size: cover">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="card-body px-1 pb-0">
                                                <p class="text-gradient text-dark mb-2 text-sm">Jogos</p>
                                                <a href="javascript:;">
                                                    <h5>
                                                        Metaphor: ReFantazio, novo RPG dos criadores de Persona
                                                    </h5>
                                                </a>
                                                <p class="mb-4 text-sm">
                                                </p>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <button type="button" class="btn btn-outline-primary btn-sm mb-0">Ver Notícia</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-3 col-md-4">
                                <div class="card card-plain border min-height-250">
                                    <div class="card-body d-flex flex-column justify-content-center text-center">
                                        <a href="javascript:;">
                                            <i class="fa fa-plus text-secondary mb-3"></i>
                                            <h5 class=" text-secondary"> Publicar nova notícia </h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
