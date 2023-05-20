<header class="header_section">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index.html">
                <span>
                    Cryptop
                </span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                    <ul class="navbar-nav  ">
                        <li class="nav-item {{ Route::currentRouteName() == 'site.home' ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('site.home') }}">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item {{ Route::currentRouteName() == 'site.about' ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('site.about') }}"> About </a>
                        </li>
                        <li class="nav-item {{ Route::currentRouteName() == 'site.faq' ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('site.faq') }}"> How </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('posts.index') }}">
                                <span>Posts</span> <img src="images/wallet.png" alt="" />
                            </a>
                        </li>
                        @auth
                        <li class="nav-item {{ Route::currentRouteName() == 'user.logout' ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('user.logout') }}"> Logout</a>
                        </li>
                        @else
                        <li class="nav-item {{ Route::currentRouteName() == 'login' ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('login') }}"> Login</a>
                        </li>
                        <li class="nav-item {{ Route::currentRouteName() == 'user.signup' ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('user.signup') }}"> Sign Up</a>
                        </li>
                        @endauth

                        @can("isAdmin")
                        <li class="nav-item ">
                            <a class="nav-link" href="http://www.google.com"> Google If Admin</a>
                        </li>
                        @endcan



                    </ul>
                    <div class="user_option">
                        <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                            <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
