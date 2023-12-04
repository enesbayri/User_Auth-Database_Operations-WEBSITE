<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UyeGiris;

class
UyeController extends Controller
{

    public function index()
    {
        $veriler=UyeGiris::all();
        return view('pages.index',compact('veriler'));
    }



    public function create()
    {
        return view('pages.create');
    }



    public function store(Request $request)
    {
        $request->validate([
            'adSoyad'=>'required',
            'kullaniciAdi'=>'required',
            'email'=>'required|email',
            'sifre'=>'required'
        ]);
        $uyem= new UyeGiris([
            'adSoyad'=>$request->get('adSoyad'),
            'tc'=>$request->get('tc'),
            'kullaniciAdi'=>$request->get('kullaniciAdi'),
            'email'=>$request->get('email'),
            'sifre'=>$request->get('sifre')
        ]);
        $uyem->save();
        return redirect('/uyeler')->with('basarili','Uye eklendi');
    }



    public function show(Request $request,$id)
    {
       //

    }


    public function edit($id)
    {
        $uyem= UyeGiris::find($id);
        return view('pages.edit',compact('uyem'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'adSoyad'=>'required',
            'kullaniciAdi'=>'required',
            'email'=>'required|email',
            'sifre'=>'required'
        ]);
        $uye=UyeGiris::find($id);
        $uye->adSoyad=$request->get('adSoyad');
        $uye->tc=$request->get('tc');
        $uye->kullaniciAdi=$request->get('kullaniciAdi');
        $uye->email=$request->get('email');
        $uye->sifre=$request->get('sifre');

        $uye->save();

        return redirect('/uyeler')->with('basarili','Uye Güncellendi');

    }


    public function destroy($id)
    {
        $uyem= UyeGiris::find($id);
        $uyem->delete();
        return redirect('/uyeler')->with('silindi','Uye Silindi');
    }



}
