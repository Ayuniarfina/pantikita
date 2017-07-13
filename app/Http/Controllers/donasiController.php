<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Donasi;

class DonasiController extends Controller
{
  public function index()
  {
    return view('front.donasi.index');
  }

  public function show()
  {
    return view('front.donasi.show');
  }

  public function create()
  {
    return view('front.donasi.form');
  }

  public function store(Request $request)
  {
    $donasis = new Donasi;

    $donasis->nominal = $request->input('nominal');
    $donasis->pembayaran = $request->input('pembayaran');

    $donasis->save();
    return redirect('/');
  }
}
