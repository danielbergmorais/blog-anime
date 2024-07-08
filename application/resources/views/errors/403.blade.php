@extends('site.layouts.simple')

@section('content')
<!-- Login Section Begin -->
<section class="login spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="login__form">
                    <h1 class="text-white">403</h1>
                    <h3>Ops! Você não deveria estar aqui!</h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="login__register">
                    <h3>Que tal tentar recomeçar?</h3>
                    <a href="javascript:void(0);" onclick="history.back();" class="primary-btn">Voltar</a>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- Login Section End -->

@endsection
