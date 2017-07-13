@extends('front.template')
@section('main')

<div class="jumbotron">
<div class="container text-center jumbotron-text">
  <h2 class="text-50">Ayo lestarikan panti</h2>
  <h2 class="text-50">Untuk masa depan bangsa</h2>
  <br>
  <h3>“Sesungguhnya tidak akan berkurang harta yang disedekahkan, kecuali bertambah dan bertambah”</h3>
  <h4>(HR. Tirmidzi)</h4>
  <br><br>
  <p><a href="../register" class="btn btn-primary btn-lg">Gabung</a></p>
</div>
</div>

<br><br><br>

<div class="container">

<blockquote>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. khiuril iulrsilji lklji io99uoi wwwiuworbashuidk uhkjhih hiuhikjh hjihhuiuh</p>
  <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
</blockquote>
<br>
<div class="container text-center">  

 <div class="row">
    <div class="col-sm-3">
      <h3 class="pull-left">Panti Terdaftar </h3>
    </div>
    <div>
    <a href="../regispanti" class="btn btn-primary pull-right">
      <h4>Daftarkan Panti</h4></a>
    </div>
  </div>
  <hr>
  <div>
    @foreach ($user_pantis as $user_pantis)
      @include ('front/panti.index')
    @endforeach
  </div>
<ul class="pager">
  <li><a href="../panti-list">Lihat semua</a></li>
</ul>
<br>
</div>

@endsection