@extends('admin.layouts.user_type.auth')

@section('content')

<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Post</h6>
                        @if ($message = Session::get('success'))
                        <div>
                            {{ $message }}
                        </div>
                        @endif

                        @if ($message = Session::get('error'))
                        <div>
                            {{ $message }}
                        </div>
                        @endif
                    </div>
                    <div class="card-body ">
                        <form role="form" action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <label>Titulo*</label>
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Titulo" name="title" required>
                                @error('title')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <label>Subtitulo*</label>
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Subtitulo" name="subtitle" required>
                                @error('subtitle')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <label>Video (Link youtube)</label>
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Video" name="youtube">
                                @error('youtube')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <label>Categoria*</label>
                            <div class="mb-3">
                                <select class="form-control" id="category-select" name="category_id" required>
                                    <option>Selecione...</option>
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}"> {{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <label>Imagem (Proporção 16:9)</label>
                            <div id="preview" class="d-block shadow border-radius-xl max-width-400 min-height-250 mb-2" style="background-color: grey; background-position-y: 50%;  background-size: cover">
                            </div>
                            <div class="mb-3">
                                <input type="file" class="form-control" id="image" name="image" accept="image/*" />
                                @error('image')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <label>Ativo?</label>
                            <div class="mb-3">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="active" checked="" value="">
                                    <label class="form-check-label" for="active">Ativar</label>
                                    <input type="hidden" id="active-hidden" name="active" value="1">
                                </div>

                                @error('active')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <label>Conteúdo*</label>
                            <div class="mb-3">
                                <textarea id="content" name="content" class="form-control" rows="10" cols="50"></textarea>
                                @error('content')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn bg-gradient-info w-25 mt-4 mb-0">Salvar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script>
    document.addEventListener('change', function(event) {
        if (event.target && event.target.id === 'active') {
            if (event.target.checked) {
                document.getElementById('active-hidden').value = 1;
            } else {
                document.getElementById('active-hidden').value = 0;
            }
        }
    });

    // FUNÇÃO PARA O BOTÂO DE UPLOAD
    function readFile(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.readAsDataURL(input.files[0]);
            reader.onload = function(e) {
                document.getElementById("preview").style.backgroundImage = 'url(' + e.target.result + ')';

            };

        }
    }
    document.getElementById("image").addEventListener("change", function() {
        readFile(this)
    });

</script>

@endsection
