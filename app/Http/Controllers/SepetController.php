<?php

namespace App\Http\Controllers;

use App\Models\Sepet;
use App\Models\SepetUrun;
use App\Models\Urun;
use Cart;
use Illuminate\Http\Request;
use Validator;

class SepetController extends Controller
{

    public function index(){
        return view('sepet');
    }

    public function ekle(){
        $urun=Urun::find(request('id'));
        $cartItem=Cart::add($urun->id,$urun->urun_adi,1,$urun->fiyati,0,['slug'=>$urun->slug]);

        //kullanıcı girisi kontrol ve sepet olusturma
        if(auth()->check()){
            $aktif_sepet_id=session('aktif_sepet_id');

            //daha onceden sepet yoksa ekler
            if (!isset($aktif_sepet_id)){
                $aktif_sepet=Sepet::create([
                    'kullanici_id'=>auth()->id()
                ]);
                $aktif_sepet_id=$aktif_sepet->id;
                session()->put('aktif_sepet_id',$aktif_sepet_id);
            }

            //ilk parametreye gore kontrol idler varsa bu bilgilere adet, fiyat, durum bilgilerini gunceller
            //yoksa urunu ve bu bilgilere adet, fiyat, durum bilgilerini sıfırdan ekler
            SepetUrun::updateOrCreate(
                ['sepet_id'=>$aktif_sepet_id,'urun_id'=>$urun->id],
                ['adet'=>$cartItem->qty,'fiyati'=>$urun->fiyati,'durum'=>'Beklemede']
            );
        }

        //KDV oranı
        Cart::setGlobalTax(18);

        return redirect()->route('sepet')->with('mesaj','Ürün Sepete Eklendi.')->with('mesaj_tur','success');
    }

    public function kaldir($rowId){
        if(auth()->check()){
            $aktif_sepet_id=session('aktif_sepet_id');
            $cartItem=Cart::get($rowId);
            SepetUrun::where('sepet_id',$aktif_sepet_id)->where('urun_id',$cartItem->id)->delete();
        }

        Cart::remove($rowId);
        return redirect()->route('sepet')->with('mesaj','Ürün Sepetten Kaldırıldı.')->with('mesaj_tur','success');
    }

    public function bosalt(){
        if(auth()->check()){
            $aktif_sepet_id=session('aktif_sepet_id');
            SepetUrun::where('sepet_id',$aktif_sepet_id)->delete();
        }

        //destroy => Butun urunleri siler
        Cart::destroy();
        return redirect()->route('sepet')->with('mesaj','Sepetiniz Boşaltıldı.')->with('mesaj_tur','success');
    }

    public function guncelle($rowId){
        $validator=Validator::make(request()->all(),[
            'adet'=>'required|numeric|between:1,5'
            ]);
        if ($validator->fails()){
            session()->flash('mesaj_tur','danger');
            session()->flash('mesaj','Adet Degeri En Az 1 En Fazla 5 Olabilir.');
            return response()->json(['success'=>false]);
        }

        if(auth()->check()){
            $aktif_sepet_id=session('aktif_sepet_id');
            $cartItem=Cart::get($rowId);
            SepetUrun::where('sepet_id',$aktif_sepet_id)->where('urun_id',$cartItem->id)->update(['adet'=>request('adet')]);
        }

        Cart::update($rowId,request('adet'));

        session()->flash('mesaj_tur','success');
        session()->flash('mesaj','Adet Bilgisi Güncellendi.');

        return response()->json(['success'=>true]);
    }
}
