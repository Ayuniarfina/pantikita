<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class userPanti extends Authenticatable
{
  protected $fillable = ['nama_panti', 'email_panti', 'password_panti', 'alamat_panti', 'kondisi_panti', 'jml_penghuni', 'nama_pemilik', 'kondisi_panti', 'kontak_panti', 'foto',];

  protected $connection = 'mysql';

/**
 * The attributes that should be hidden for arrays.
 *
 * @var array
 */
 protected $hidden = ['password_panti', 'remember_token',];
}
