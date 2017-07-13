<div class="col-sm-4">
  <a href="/panti-detail/{{ $user_pantis->id }}">
    <img src="{{ asset('image/' . $user_pantis->foto) }}" class="img-responsive" style="width:400px; height: 300px" alt="Image">   
    <h4 class="text-primary">{{ $user_pantis->nama_panti }}</h4>
  </a>
  <p>{{ $user_pantis->kondisi_panti }}</p>
</div>