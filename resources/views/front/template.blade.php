<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'PantiKita') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<head>
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" />
</head>
<body>
<div id="app">
  <nav class="navbar navbar-default">
    <div class="navbar-header">
<<<<<<< HEAD
=======
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      </button>
>>>>>>> 7bdf8376ada774977ff88728382f12d0a14e5458
      <a class="navbar-brand" href="/">Panti Kita</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
<<<<<<< HEAD
        <li><a href="../panti-list"><h4>Panti</h4></a></li>
=======
        <li><a href="panti-list"><h4>Panti</h4></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="register"><h4>Daftar</h4></a></li>
>>>>>>> 7bdf8376ada774977ff88728382f12d0a14e5458
      </ul>
      <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
    </div>
</nav>
<div class="container-fluid">
    @yield('main')
</div>
</div>

      </body>
      <footer>
        <div class="container-fluid   row">
        <div class="col-lg-12 text-default">
          <p>Panti Kita menghubungkan masyarakat dengan panti. </p>
          <p>Mendukung negeri mensejahterakan panti.</p>
          <p>hubungi kami di : <ul><li><a href="ayuniarfina06@gmail.com">ayuniarfina06@gmail.com</a></li>
          <li><a href="selfqisth@gmail.com">selfqisth@gmail.com</a></li><li><a href="nabila.s.ramadhanti@gmail.com">nabila.s.ramadhanti@gmail.com</a></li></ul></p>
            <p class="text-center">copyright pantiKita 2017</p>
        </div>
        </div>

      </footer>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</html>