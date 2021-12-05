<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="{{URL::asset('img/logo_ssw.png')}}" type="image/gif" sizes="16x16">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="/js/jquery-3.4.1.js"></script>
        <link rel="stylesheet" href='{{ asset("css/0823.css") }}'>
        <title>萬般珈琲店 Wanpan Coffee</title>

        

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>
    <!-- -------------------------pg_left---------------------------------- -->
    <div id="pg_left">
        <a href="{{ url('/') }}"><img src="{{ asset('img/logo_w.png') }}" id="logo"></a>

        <div id="my_list">
            <p><input type="text" id="findproduct" placeholder="搜尋"></p>
        </div>
        <p><a href="{{ url('/') }}">首頁</a></p>
        <p><a href="#">豆款介紹</a></p>
        <div class="btn-group dropright" data-trigger="hover">
            <p type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                珈琲體驗
            </p>
            <div class="dropdown-menu">
                <a class="dropdown-item " href="{{ url('/drop') }}">手沖珈琲</a>
                <a class="dropdown-item " href="{{ url('/mocktail') }}">珈琲特調體驗</a>
                <a class="dropdown-item " href="{{ url('/art') }}">拿鐵拉花</a>
            </div>
        </div>
        @if (Route::has('login'))
            {{-- <div id="login_bar"> --}}
                @auth
                <p>
                    <a href="{{ url('/user/profile') }}" class="">會員中心</a>
                </p>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <p>
                        <a href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            {{ __('登出') }}
                        </a>
                    </p>
                </form>
                @else
                <p>
                    <a href="{{ route('login') }}" class="">會員登入</a>
                </p>
                
                @endauth
            {{-- </div> --}}
        @endif
        <p><a href="{{ url('/contact') }}">聯絡萬般</a></p>
    </div>
    <!-- -------------------------pg_left---------------------------------- -->
        
    <div id="pg_right">
        <article>
            <header>
                <div class="drop" id="mydrop">
                    <div id="s_logo">
                        <a href="#"><img src="{{ asset('/img/logo_s.png') }}" style="width: 7rem; "></a>
                    </div>

                    <!-- -------------------------navbar---------------------------------- -->
                    <div class="navbar navbar-expand-sm navbar-light bg-white fixed-bottom">
                        <nav>
                            <div class="collapse navbar-collapse font-weight-bold" id="navbar">
                                <ul class="navbar-nav mr-auto">

                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{ url('/') }}">首頁</a>
                                    </li>

                                    <li class="nav-item dropup active">
                                        <a class="nav-link" href="#">豆款介紹</a>
                                    </li>
                                    <!-- -----------drpo------------ -->
                                    <li class="nav-item dropup">
                                        <a class="nav-link active " href="#" id="navbardrop" data-toggle="dropdown">
                                            珈琲體驗
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item " href="{{ url('/drop') }}">手沖珈琲</a>
                                            <a class="dropdown-item " href="{{ url('/mocktail') }}">珈琲特調體驗</a>
                                            <a class="dropdown-item " href="{{ url('/art') }}">拿鐵拉花</a>
                                        </div>
                                    </li>
                                    <!-- -----------drop------------ -->

                                    @if (Route::has('login'))
                                        {{-- <div id="login_bar"> --}}
                                            @auth
                                            <li class="nav-item active">
                                                <a href="{{ url('/user/profile') }}" class="nav-link">會員中心</a>
                                            </li>
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <li class="nav-item active">
                                                    <a href="{{ route('logout') }}"
                                                        class="nav-link"
                                                            onclick="event.preventDefault();
                                                                    this.closest('form').submit();">
                                                        {{ __('登出') }}
                                                    </a>
                                                </li>
                                            </form>
                                            @else
                                            <li class="nav-item active">
                                                <a href="{{ route('login') }}" class="nav-link">會員登入</a>
                                            </li>

                                            @endauth
                                        {{-- </div> --}}
                                    @endif

                                    <li class="nav-item active">
                                        <a class="nav-link " href="{{ url('/contact') }}">聯絡萬般</a>
                                    </li>
                                </ul>

                                <form class="form-inline my-2 my-lg-0">
                                    <input class="form-control mr-sm-2" type="search" placeholder="搜尋" aria-label="Search">
                                </form>

                            </div>
                        </nav>
                    </div>
                    <!-- -------------------------navbar---------------------------------- -->
                </div>
            </header>

            <div class="font-sans text-gray-900 antialiased">
                {{ $slot }}
            </div>
    
            <!-- -------------------------footer---------------------------------- -->
            <footer style="margin-top:10rem; margin-bottom: 5rem;">
                <div id="mydemo1" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#mydemo1" data-slide-to="0" class="active"></li>
                        <li data-target="#mydemo1" data-slide-to="1"></li>
                        <li data-target="#mydemo1" data-slide-to="2"></li>
                        <li data-target="#mydemo1" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('/img/幻燈片/母親節拉花1.jpg') }}" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('/img/幻燈片/清潔.jpg') }}" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('/img/幻燈片/甘單1.jpg') }}" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('/img/幻燈片/秤重.jpg') }}" alt="">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#mydemo1" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#mydemo1" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div id="footer_logo">
                    <img src="{{ asset('img/logo_s.png') }}" style="width: 7rem; ">
                </div>
                <br>
                <h6>Wanpan Cafe Copyright © 2021</h6>
                <h6>Website Powered by <a href="https://youtu.be/dQw4w9WgXcQ">Changgenglu Studios</a></h6>
            </footer>
            <!-- -------------------------footer---------------------------------- -->
        </article>
    </div>

    </body>
</html>
