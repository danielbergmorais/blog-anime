<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="{{ route('site') }}">
                            <img src="{{ asset('assets/site/img/logo.png') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li><a href="{{ route('site') }}">Home</a></li>
                                <li><a href="{{ route('site.posts') }}">Categorias <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                        @foreach($navCategories as $navCategory)
                                        <li><a href="{{ route('site.posts', $navCategory) }}">{{ $navCategory->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li><a href="{{ route('site.posts') }}">Notícias</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="header__right">
                        <a href="#" class="search-switch"><span class="icon_search"></span></a>
                        @auth
                        <a href="{{ route('posts.index') }}"><span class="icon_profile"></span></a>
                        @endauth
                        @guest
                        <a href="{{ route('login') }}"><span class="icon_profile"></span></a>
                        @endguest

                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->
