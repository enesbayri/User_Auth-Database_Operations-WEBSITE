<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\UyeGiris;
use Illuminate\Http\Request;
use function Webmozart\Assert\Tests\StaticAnalysis\string;

class GirisController extends Controller
{


    public function index(Request $request)
    {
        $sifrem="";
        $kAdi="";
        $adminler=Admin::all();
        foreach($adminler as $admin){

            if($request->get('k')==$admin->kullaniciAdi){
                $giris=Admin::find($admin->id);

                if($request->get('s')==$admin->sifre ){
                    $veriler = UyeGiris::all();
                    return view('pages.index', compact('veriler'));
                }
                return redirect('/')->with('Sifre Hatali','Sifre hatalıdır!');
            }
        }
        return redirect('/')->with('Admin yok','Admin Bilgisi Sistemde Bulunamadı!');
    }







}
