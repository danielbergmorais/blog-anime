@extends('admin.layouts.user_type.auth')

@section('content')

<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Categoria</h6>
                    </div>
                    <div class="card-body ">
                        <form role="form">
                            <label>Nome</label>
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Nome">
                                @error('name')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <label>Ativo?</label>
                            <div class="mb-3">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="active" checked="">
                                    <label class="form-check-label" for="active">Ativar</label>
                                </div>
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
