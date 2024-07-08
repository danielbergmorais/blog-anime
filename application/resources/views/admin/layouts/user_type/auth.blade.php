@extends('admin.layouts.app')

@section('auth')


@include('admin.layouts.navbars.auth.sidebar')
<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg {{ (Request::is('rtl') ? 'overflow-hidden' : '') }}">
    @include('admin.layouts.navbars.auth.nav')
    <div class="container-fluid py-4">
        @yield('content')
        @include('admin.layouts.footers.footer')
    </div>
</main>



@endsection
