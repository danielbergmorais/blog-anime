@extends('admin.layouts.user_type.auth')

@section('content')

<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Meu perfil</h6>
                    </div>
                    <div class="card-body ">
                        <form role="form">
                            <label>Email</label>
                            <div class="mb-3">
                                <input type="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email-addon">
                                @error('email')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <label>Senha</label>
                            <div class="mb-3">
                                <input type="password" class="form-control" placeholder="Senha" aria-label="password" aria-describedby="password-addon">
                                @error('password')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="text-center">
                                <button type="button" class="btn bg-gradient-info w-25 mt-4 mb-0">Salvar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
