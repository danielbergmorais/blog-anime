@extends('admin.layouts.user_type.auth')

@section('content')

<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-4">
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif
            </div>
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Posts</h6>
                        <div class="text-end">
                            <a href="{{ route('posts.create') }}" class="btn btn-outline-primary btn-sm mb-0">Adicionar nova</a>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Titulo</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Categoria</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Ativo?</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Data publicação</th>
                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach($posts as $post)
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $post->title }}</h6>
                                                    <p class="text-xs text-secondary mb-0">{{ $post->subtitle }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $post->category->name }}</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-{{ $post->active ? 'success' : 'danger' }}">{{ $post->active ? 'Ativo' : 'Inativo' }}</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">{{ date('d/m/Y', strtotime($post->created_at)) }}</span>
                                        </td>
                                        <td class="align-middle">
                                            <a href="{{ route('posts.edit', $post) }}" class="text-secondary font-weight-bold text-xs pr-2" data-toggle="tooltip" data-original-title="Editar Post">
                                                <i class="fa fa-pencil text-xs"></i>
                                                Editar
                                            </a>
                                            <br>
                                            <form action="{{ route('posts.destroy', $post) }}" method="POST" id="delete-{{$post->id}}">
                                                @csrf
                                                @method('DELETE')
                                                <a href="javascript:;" onclick="event.preventDefault(); document.getElementById('delete-{{$post->id}}').submit();" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                                    <i class="fa fa-trash text-xs"></i>
                                                    Deletar
                                                </a>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            {{ $posts->links() }}
        </div>
    </div>
</main>

@endsection
