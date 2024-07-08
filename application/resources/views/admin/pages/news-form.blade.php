@extends('admin.layouts.user_type.auth')

@section('content')

<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Notícia</h6>
                    </div>
                    <div class="card-body ">
                        <form role="form">
                            <label>Titulo*</label>
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Titulo">
                                @error('title')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <label>Subtitulo*</label>
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Subtitulo">
                                @error('subtitle')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <label>Video (Link youtube)</label>
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Video">
                                @error('Video')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <label>Categoria*</label>
                            <div class="mb-3">
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>Selecione...</option>
                                    <option value="1">Anime</option>
                                    <option value="2">Filme</option>
                                    <option value="3">Jogo</option>
                                </select>
                                @error('subtitle')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <label>Imagem (Proporção 4:3)</label>
                            <div class="mb-3">
                                <input type="file" class="form-control" name="myImage" accept="image/*" />
                                @error('Video')
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

                            <label>Conteúdo*</label>
                            <div class="mb-3">
                                <textarea id="content" name="content" class="form-control" rows="10" cols="50"></textarea>
                                @error('content')
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
