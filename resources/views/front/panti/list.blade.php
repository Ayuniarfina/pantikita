@extends('front.template')
@section('main')

<br>

<div class="container">


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