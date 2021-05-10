<?php

namespace App\Http\Controllers;

use App\Models\Urun;
use App\Models\UrunDetay;
use Illuminate\Http\Request;
use App\Models\Kategori;

class AnasayfaController extends Controller
{
    public function index()
    {
        $kategoriler = Kategori::whereRaw('ust_id is null')->get();

        //With ile urunler de cekilir.
        $urunler_slider=Urun::select('urun.*')->join('urun_detay','urun_detay.urun_id','urun.id')->where('urun_detay.goster_slider',1)->orderBy('updated_at','desc')->take(5)->get();

        //join bir modeli baska bir tabloyu baglayarak cekilmesini saglar
        //first = 1 urun gosterir
        $urun_gunu_firsati=Urun::select('urun.*')->join('urun_detay','urun_detay.urun_id','urun.id')->where('urun_detay.goster_gunu_firsati',1)->orderBy('updated_at','desc')->first();

        $urunler_one_cikan=Urun::select('urun.*')->join('urun_detay','urun_detay.urun_id','urun.id')->where('urun_detay.goster_one_cikan',1)->orderBy('updated_at','desc')->take(4)->get();
        $urunler_cok_satan=Urun::select('urun.*')->join('urun_detay','urun_detay.urun_id','urun.id')->where('urun_detay.goster_cok_satan',1)->orderBy('updated_at','desc')->take(4)->get();
        $urunler_indirimlisi=Urun::select('urun.*')->join('urun_detay','urun_detay.urun_id','urun.id')->where('urun_detay.goster_indirimlisi',1)->orderBy('updated_at','desc')->take(4)->get();

        return view('anasayfa', compact('kategoriler','urunler_slider','urun_gunu_firsati','urunler_one_cikan','urunler_cok_satan','urunler_indirimlisi'));
    }
}
