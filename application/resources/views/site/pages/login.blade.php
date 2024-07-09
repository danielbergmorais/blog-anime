@extends('site.layouts.simple')

@section('content')
<!-- Login Section Begin -->
<section class="login spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="login__form">
                    <h3>Login</h3>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                        {{ $error }}
                        @endforeach
                    </div>
                    @endif
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="input__item">
                            <input type="email" placeholder="Seu Email " value="{{ old('email') }}" name="email" required autofocus autocomplete="username">
                            <span class="icon_mail"></span>

                            @error('email')
                            <span class="invalid-feedback text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="input__item">
                            <input type="password" placeholder="Sua Senha" type="password" name="password" required autocomplete="current-password">
                            <span class="icon_lock"></span>
                        </div>
                        @error('password')
                        <span class="invalid-feedback text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
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
