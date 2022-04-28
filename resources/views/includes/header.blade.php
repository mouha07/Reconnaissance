<!doctype html>
<html lang="en" ng-app="Agro">

<head>
    <title>AgriNews</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('bower_components/summernote/dist/summernote.min.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .imgbackground {
            background-image: url("/image/acceuil_06.jpg");
            position: fixed;
            left: 0;
            right: 0;
            z-index: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            filter: blur(15 px);
            animation: image 30s linear infinite both;
        }

    </style>


</head>

<body>
    <div class="imgbackground ">

    </div>
    <div class=" mb-5 my-0">
        <nav class="navbar   navbar-expand-sm navbar-white bg-white shadow-lg fixed-top pb-1 pt-3 mb-5  ">
            <div class="container">
                <a class="navbar-brand font-italic font-weight-bold text-success    " href="/">AgriNews</a>

                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                    data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"> <i class="fa fa-toggle-off" aria-hidden="true"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-body" href="/">Accueil <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="#">Marché</a>
                        </li> --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link  text-body" href="/documentation" id="dropdownId">Documentation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-body" href="/fertilisation">Fertilisation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-body" href="/sante">Phytopathologie</a>
                        </li>
                        @if (Auth::guest())
                            {{-- <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li> --}}
                        @else
                            <li class="nav-item dropdown text-body">
                                <a class="nav-link dropdown-toggle text-body" data-toggle="dropdown" href="#"
                                    role="button" aria-haspopup="true" aria-expanded="false">CRUD</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="/speculation">Spéculation</a>
                                    <a class="dropdown-item" href="/sol">Sol</a>
                                    <a class="dropdown-item" href="/nutriment">Apport nutritif des aliments</a>
                                    <a class="dropdown-item" href="/phytopatologie">Phytopathologie</a>
                                    <a class="dropdown-item" href="/engrais">Engrais</a>
                                </div>

                            </li>
                        @endif
                    </ul>




                    <ul class="nav navbar-nav navbar-right">


                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            {{-- <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li> --}}
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                            Déconnexion
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif

                        @if (Auth::guest())
                            <form class="form-inline my-2 my-lg-0">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                            </form>
                        @endif
                    </ul>
                </div>

            </div>

        </nav>
    </div>
    <div class="container mt-3">
        <div class="row mt-3">
            <div class="col-12 m-2">
                @yield('content')
            </div>
        </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="{{ asset('bower_components/angular/angular.min.js') }}"></script>
    <script src="{{ asset('bower_components/angular-sanitize/angular-sanitize.min.js') }}"></script>
    <script src="{{ asset('bower_components/summernote/dist/summernote.min.js') }}"></script>
    <script src="{{ asset('bower_components/angular-summernote/dist/angular-summernote.min.js') }}"></script>

    <script src="{{ asset('angular/app.js') }}"></script>

</body>

</html>
