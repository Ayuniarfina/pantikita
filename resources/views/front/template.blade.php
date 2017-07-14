<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" />
</head>
<body>
<nav class="navbar navbar-default">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      </button>
      <a class="navbar-brand" href="/">Panti Kita</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="panti-list"><h4>Panti</h4></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="register"><h4>Daftar</h4></a></li>
      </ul>
    </div>
</nav>
<div class="container-fluid">
    @yield('main')
</div>

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

      </body>
</html>