<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\donasi;
use App\userPanti;

class donasiController extends Controller
{
  public function index()
  {
    return view('front.donasi.index');
  }

  public function show()
  {
    return view('front.donasi.show');
  }

  public function create($id_panti)
  {
    $panti =userPanti::where('id',$id_panti)->first();
    return view('front.donasi.form',compact('panti'));
  }

  public function store(Request $request)
  {
    $donasis = new donasi;

    $donasis->nominal = $request->input('nominal');
    $donasis->pembayaran = $request->input('pembayaran');
    $donasis->panti_id = $request->input('panti_id');
    $donasis->save();
    return redirect('/');
  }
}
