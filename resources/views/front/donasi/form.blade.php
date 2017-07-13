@extends('front.template')
@section('main')

<div class="row ">
          <div class="col-lg-6 col-centered">
            <div class="well bs-component">
    <form class="form-horizontal">
      <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
      <fieldset>
        <legend>Donasi</legend>

        <div class="form-group">
          <label for="nominal" class="col-lg-2 control-label">Nominal</label>
          <div class="col-lg-10">
            <input class="form-control" name="nominal" placeholder="Besar uang yang akan kamu donasikan" type="text">
          </div>
        </div>

        <div class="form-group">
            <label for="pembayaran" class="col-lg-2 control-label">Metode Pembayaran</label>
            <p>
              <input name="pembayaran" type="radio" name="bca" value="bca"/>
              <label for="bca">Transfer BCA</label>
            </p>
            <p>
              <input name="pembayaran" type="radio" name="mandiri" value="mandiri"/>
              <label for="mandiri">Transfer Mandiri</label>
            </p>
            <p>
              <input name="pembayaran" type="" name="lainnya" />
              <label for="lainnya">Transfer Lainnya</label>
            </p>
          </div>

        <div class="form-group">
          <div class="col-lg-10 col-lg-offset-2">
            <button type="submit" class="btn btn-primary">Donasi</button>
          </div>
        </div>

      </fieldset>
    </form>
    </div>
  </div>
</div>
@endsection
