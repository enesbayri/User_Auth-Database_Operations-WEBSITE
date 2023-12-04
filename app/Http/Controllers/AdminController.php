<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\UyeGiris;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index()
    {
        $veriler=Admin::all();
        return view('pages.admins.index',compact('veriler'));
    }

    public function create()
    {
        return view('pages.admins.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'kullaniciAdi'=>'required',
            'sifre'=>'required',
        ]);
        $adminim=new Admin([
            'kullaniciAdi'=>$request->get('kullaniciAdi'),
            'sifre'=>$request->get('sifre'),
        ]);
        $adminim->save();
        return redirect('/adminler')->with('admin eklendi','Yeni admin yetkilendirmesi yapılmıştır!');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $uyem= Admin::find($id);
        return view('pages.admins.edit',compact('uyem'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'kullaniciAdi'=>'required',
            'sifre'=>'required'
        ]);
        $uye=Admin::find($id);
        $uye->kullaniciAdi=$request->get('kullaniciAdi');
        $uye->sifre=$request->get('sifre');

        $uye->save();

        return redirect('/adminler')->with('basarili','Admin Güncellendi');
    }


    public function destroy($id)
    {
        $uyem= Admin::find($id);
        $uyem->delete();
        return redirect('/adminler')->with('silindi','Admin Silindi');
    }
}
