@extends('site.layouts.simple')

@section('content')
<!-- Login Section Begin -->
<section class="login spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="login__form">
                    <h3>Login</h3>
                    <form action="#">
                        <div class="input__item">
                            <input type="text" placeholder="Seu Email ">
                            <span class="icon_mail"></span>
                        </div>
                        <div class="input__item">
                            <input type="password" placeholder="Sua Senha">
                            <span class="icon_lock"></span>
                        </div>
                        <button type="submit" class="site-btn">Entrar</button>
                    </form>
                    <!--<a href="#" class="forget_pass">Esqueceu a senha?</a>-->
                </div>
            </div>
            <div class="col-lg-6">
                <div class="login__register">
                    <h3>Não tem uma conta?</h3>
                    <a href="/registrar" class="primary-btn">Se registrar</a>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- Login Section End -->
@endsection
