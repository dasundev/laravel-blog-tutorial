<!-- Navigation-->
<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
        <!--logo-->
        <div class="logo">
            <a href="/">
                <img src="{{ asset('themes/noonpost/img/logo-dark.png') }}"alt="" class="logo-dark">
                <img src="{{ asset('themes/noonpost/img/logo-white.png') }}" alt="" class="logo-white">
            </a>
        </div><!--/-->

        <!--navbar-collapse-->
        <div class="collapse navbar-collapse" id="main_nav">
            <ul class="navbar-nav ml-auto mr-auto">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}"> Login </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}"> Register </a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}"> Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('posts.all') }}"> All Posts </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"> Logout </a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endguest
            </ul>
        </div><!--/-->

        <!--navbar-right-->
        <div class="navbar-right ml-auto">
            <div class="theme-switch-wrapper">
                <label class="theme-switch" for="checkbox">
                    <input type="checkbox" id="checkbox" />
                    <div class="slider round"></div>
                </label>
            </div>

            <div class="social-icones">
                <ul class="list-inline">
                    <li>
                        <a href="https://facebook.com/dasundev/">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://github.com/dasundev/">
                            <i class="fab fa-github"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/in/dasundev/">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://youtube.com/c/DasunDEV/">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="search-icon">
                <i class="icon_search"></i>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</nav>
<!--/-->
