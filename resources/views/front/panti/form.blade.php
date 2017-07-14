@extends('front.template')
@section('main')

<div class="row	">
          <div class="col-lg-6 col-centered">
            <div class="well bs-component">
		<form method="POST" action=/userPanti class="form-horizontal" enctype="multipart/form-data">
      <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
      <fieldset>
		    <legend>Register Panti</legend>

          <div class="form-group{{ $errors->has('nama_panti') ? ' has-error' : '' }}">
		      <label for="nama_panti" class="col-lg-2 control-label">Nama Panti</label>
		      <div class="col-lg-10">
		        <input type="text" class="form-control" name="nama_panti" placeholder="Nama Panti" required="">
		      </div>
		    </div>

        <div class="form-group{{ $errors->has('email_panti') ? ' has-error' : '' }}">
		      <label for="email_panti" class="col-lg-2 control-label">Email Panti</label>
		      <div class="col-lg-10">
		        <input type="text" class="form-control" name="email_panti" placeholder="Email Panti" required="">
		      </div>
		    </div>

		    <div class="form-group">
		      <label for="password_panti" class="col-lg-2 control-label">Password</label>
		      <div class="col-lg-10">
		        <input type="password" class="form-control" name="password_panti" placeholder="Password" required="">
		      </div>
		    </div>

		    <div class="form-group">
		      <label for="alamat_panti" class="col-lg-2 control-label">Alamat Panti</label>
		      <div class="col-lg-10">
		        <input type="text" class="form-control" name="alamat_panti" placeholder="Alamat Panti" required="">
		      </div>
		    </div>

		    <div class="form-group">
		      <label for="kondisi_panti" class="col-lg-2 control-label">Kondisi Panti</label>
		      <div class="col-lg-10">
		        <input type="text" class="form-control" name="kondisi_panti" placeholder="Kondisi Panti" required="">
		      </div>
		    </div>

		    <div class="form-group">
		      <label for="jml_penghuni" class="col-lg-2 control-label">Jumlah Penghuni</label>
		      <div class="col-lg-10">
		        <input type="text" class="form-control" name="jml_penghuni" placeholder="Jumlah Penghuni" required="">
		      </div>
		    </div>

		    <div class="form-group">
		      <label for="nama_pemilik" class="col-lg-2 control-label">Nama Pemilik</label>
		      <div class="col-lg-10">
		        <input type="text" class="form-control" name="nama_pemilik" placeholder="Nama Pemilik" required="">
		      </div>
		    </div>

		    <div class="form-group">
		      <label for="kontak_panti" class="col-lg-2 control-label">Kontak Panti</label>
		      <div class="col-lg-10">
		        <input type="text" class="form-control" name="kontak_panti" placeholder="Kontak Panti" required="">
		      </div>
		    </div>

        <div class="col-lg-10">
				    <label for="foto" class="col-lg-2 control-label">Foto Panti</label>
<<<<<<< HEAD
				    <br>
				    <input type="file" class="col-lg-10" name="foto" required="">
=======
				    <input type="file" class="col-lg-10" name="foto">
>>>>>>> 7bdf8376ada774977ff88728382f12d0a14e5458
			  </div>

		    <div class="form-group">
		      <div class="col-lg-10 col-lg-offset-2">
		      <br>
            <button type="submit" class="btn btn-primary">Register</button>
		      </div>
		    </div>

		  </fieldset>
		</form>
	  </div>
	</div>
</div>
@endsection
