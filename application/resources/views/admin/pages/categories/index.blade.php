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
                    <div class="card-header pb-0 ">
                        <h6>Categorias</h6>
                        <div class="text-end">
                            <a href="{{ route('categories.create') }}" class="btn btn-outline-primary btn-sm mb-0">Adicionar nova</a>
                        </div>
                    </div>

                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nome</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Ativo?</th>
                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($categories as $category)
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $category->name }}</h6>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-{{$category->active ? 'success' : 'danger'}}"> {{$category->active ? 'Ativo' : 'Inativo'}} </span>
                                        </td>
                                        <td class="align-middle">
                                            <a href="{{ route('categories.edit', $category) }}" class="text-secondary font-weight-bold text-xs pr-2" data-toggle="tooltip" data-original-title="Edit user">
                                                <i class="fa fa-pencil text-xs"></i>
                                                Editar
                                            </a>
                                            <br>
                                            <form action="{{ route('categories.destroy', $category) }}" method="POST" id="delete-{{$category->id}}">
                                                @csrf
                                                @method('DELETE')
                                                <a href="javascript:;" onclick="event.preventDefault(); document.getElementById('delete-{{$category->id}}').submit();" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
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
            {{ $categories->links() }}
        </div>

    </div>
</main>

@endsection
