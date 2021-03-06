@extends('front.template')
@section('main')
<body style="background-color: #eeeeee">
<h1 class="text-center">{{ $user_pantis->nama_panti }}</h1> 
<br>
<div class="container panti-detail" style="background-color: #ffffff">
  <div class="row"> 
    <div class="col-sm-8">
    <img src="{{ asset('image/' . $user_pantis->foto) }}" class="img-responsive" style="width:800px; height: 600px" alt="Image">   

    <div>
      <h3>Kondisi Panti</h3>
      <p>{{ $user_pantis->kondisi_panti }}</p>
    </div>

    <!--<div>
      <h3>Kegiatan</h3>
      <ul>
      <li>Belajar bersama</li>
      <li>Pengajian mingguan</li>
    </ul>
    </div>!-->

  </div>
  

    <div class="col-sm-4">
    <a href="../donasi/create/{{ $user_pantis->id }}" class="btn btn-primary btn-lg btn-block">
    <h4  >Donasi</h4></a>

    <br>

    <div class="panel panel-primary">
      <div class="panel-body text-center">
        <h3>Donasi terkumpul:</h3>
        <h4>Rp {{ number_format($total) }}</h4>
      </div>
    </div>

    <div class="panel panel-primary">
      <div class="panel-body text-center">
        <h3>Jumlah donatur:</h3>
        <h4>{{ $orang }} donatur</h4> 
      </div>
    </div>

    <div class="panel panel-primary">
      <div class="panel-body text-center">
        <h3>Jumlah penghuni:</h3>
        <h4>{{ $user_pantis->jml_penghuni }}</h4> 
      </div>
    </div>

    <div class="panel panel-primary">
      <div class="panel-body text-center">
        <h3>Kontak:</h3>
        <h4>{{ $user_pantis->nama_pemilik }}</h4><h4>{{ $user_pantis->kontak_panti }}</h4> 
      </div>
    </div>

  <div class="panel panel-primary">
      <div class="panel-body text-center">
        <h3>Lokasi:</h3>
        <h4>{{ $user_pantis->alamat_panti }}</h4>  
    <div class="map-overlay-no-scroll" onclick="style.pointerEvents='none'"></div>
    <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBnQgjjby-kAt5zGNHCId09XfWmVijWBUU&amp;q=Indonesia" style="border:0; margin-top: 15px;" height="200" frameborder="0" width="100%"></iframe>
    </div>
    </div>


  </div>
</div>

  </div>
<br>
<br>
</body>
@endsection