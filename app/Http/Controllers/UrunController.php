<?php

namespace App\Http\Controllers;

use App\Models\Urun;
use Illuminate\Http\Request;

class UrunController extends Controller
{
    public function index($slug_urunadi){
        $urun =Urun::whereSlug($slug_urunadi)->firstOrFail();

        //distinct()=>cift olanlari tekil hale getirme
        $kategoriler=$urun->kategoriler()->distinct()->get();

        return view('urun',compact('urun','kategoriler'));
    }

    public function ara(){
        //request=>formdan gelen input degeri alir
        $aranan=request()->input('aranan');

        //paginate()=>arama sonucunda 8 urun gosterir
        $urunler=Urun::where('urun_adi','like',"%$aranan%")->orWhere('aciklama','like',"%$aranan%")->paginate(8);

        //aranan degeri baska sayfaya yonlendirince gitmesini onler
        request()->flash();

        return view('arama',compact('urunler'));
    }
}
