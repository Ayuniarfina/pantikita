<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\userPanti;
use App\donasi;

class UserPantiController extends Controller
{
    //public function __construct()
    //{
    //    $this->middleware('guest');
    //}
    public function index()
    {
      $user_pantis = userPanti::all();
      return view('front.panti.index',compact('user_pantis'));
    }

    public function list()
    {
        $user_pantis = userPanti::all();
        return view('front.panti.list',compact('user_pantis'));
    }

    public function show($id)
    {
      $user_pantis = userPanti::find($id);
      $total = donasi::find($id)->sum('nominal');
      $orang = donasi::find($id)->count('nominal');
      return view('front.panti.show',compact('user_pantis','total','orang'));
      //return $user_pantis->id;
    }
    public function create()
    {
      return view('front.panti.form');
    }

    public function store(Request $request)
    {
      $user_pantis = new userPanti;

      $user_pantis->nama_panti = $request->input('nama_panti');
      $user_pantis->email_panti = $request->input('email_panti');
      $user_pantis->password_panti = $request->input('password_panti');
      $user_pantis->alamat_panti = $request->input('alamat_panti');
      $user_pantis->kondisi_panti = $request->input('kondisi_panti');
      $user_pantis->jml_penghuni = $request->input('jml_penghuni');
      $user_pantis->nama_pemilik = $request->input('nama_pemilik');
      $user_pantis->kontak_panti = $request->input('kontak_panti');
      //$user_pantis = $request->all();
      $file = $request->file('foto');
      $fileName = $file->getClientOriginalName();
      $request->file('foto')->move("image/", $fileName);

      $user_pantis->foto = $fileName;

      $user_pantis->save();
      $this->validate($request, [
    'nama_panti' => 'required|unique:posts|max:255',
]);

      //$user_pantis = userPanti::create(request(['nama_panti', 'email_panti', 'password_panti', 'alamat_panti', 'kondisi_panti', 'jml_penghuni', 'nama_pemilik', 'kondisi_panti', 'kontak_panti']));

      return redirect('/');
    }
}
