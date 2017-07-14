<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class donasi extends Model
{
  protected $fillable = ['nominal', 'pembayaran','panti_id'];
}
