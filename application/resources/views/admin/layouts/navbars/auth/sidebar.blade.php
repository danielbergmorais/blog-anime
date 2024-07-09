<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">

    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="align-items-center d-flex m-0 navbar-brand text-wrap" href="{{ route('posts.index') }}">
            <span class="ms-3 font-weight-bold">Anime</span>
        </a>
    </div>

    <hr class="horizontal dark mt-0">

    <div class="collapse navbar-collapse  w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">

            <li class="nav-item mt-2">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Notícias</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ (Request::is('admin/posts','admin/posts/*') ? 'active' : '') }} " href="{{ route('posts.index') }}">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1rem;" class="fas fa-lg fa-list-ul ps-2 pe-2 text-center text-dark {{ (Request::is('admin/posts','admin/posts/*') ? 'text-white' : 'text-dark') }} " aria-hidden="true"></i>
                    </div>
                    <span class="nav-link-text ms-1">Listagem</span>
                </a>
            </li>
            <li class="nav-item pb-2">
                <a class="nav-link {{ (Request::is('admin/categories','admin/categories/*') ? 'active' : '') }}" href="{{ route('categories.index') }}">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1rem;" class="fas fa-lg fa-tag ps-2 pe-2 text-center text-dark {{ (Request::is('admin/categories','admin/categories/*') ? 'text-white' : 'text-dark') }} " aria-hidden="true"></i>
                    </div>
                    <span class="nav-link-text ms-1">Categorias</span>
                </a>
            </li>

            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Usuário</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ (Request::is('admin/perfil') ? 'active' : '') }}" href="{{ route('admin.perfil') }}">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i style="font-size: 1rem;" class="fas fa-lg fa-user ps-2 pe-2 text-center text-dark {{ (Request::is('admin/perfil') ? 'text-white' : 'text-dark') }} " aria-hidden="true"></i>
                        </div>
                    </div>
                    <span class="nav-link-text ms-1">Perfil</span>
                </a>
            </li>
            <li class="nav-item">
                @if (Auth::check())
                <form id="logout-form-side" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <a href="javascript:;" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form-side').submit();">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i style="font-size: 1rem;" class="fas fa-lg fa-arrow-right ps-2 pe-2 text-center text-dark text-dark" aria-hidden="true"></i>
                        </div>
                    </div>
                    <span class="nav-link-text ms-1">Sair</span>
                </a>
                @endif

            </li>
        </ul>
    </div>

</aside>
