<?php

namespace App\Http\Controllers;

use App\Mail\KullaniciKayitMail;
use App\Models\Kullanici;
use App\Models\KullaniciDetay;
use App\Models\Sepet;
use App\Models\SepetUrun;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Cart;



class KullaniciController extends Controller
{
    //oturumu kapat disindaki butun fonksiyonlara ziyaretciler erisebilir
    public function __construct(){
        $this->middleware('guest')->except('oturumukapat');
    }

    public function giris_form(){
        return view('kullanici.oturumac');
    }

    public function giris(){
        $this->validate(request(),[
            'email'=>'required|email',
            'sifre'=>'required'
        ]);

        $credentials=[
            'email'=>request('email'),
            'password'=>request('sifre'),
            'aktif_mi'=>1,
        ];

        if(auth()->attempt($credentials, request()->has('benihatirla'))){
            request()->session()->regenerate();

            $aktif_sepet_id=Sepet::aktif_sepet_id();
            if(is_null($aktif_sepet_id)){
                $aktif_sepet=Sepet::create(['kullanici_id'=>auth()->id()]);
                $aktif_sepet_id=$aktif_sepet->id;
            }
            session()->put('aktif_sepet_id',$aktif_sepet_id);

            if(Cart::count()>0){
                foreach (Cart::content() as $cartItem){
                    SepetUrun::updateOrCreate(
                        ['sepet_id'=>$aktif_sepet_id,'urun_id'=>$cartItem->id],
                        ['adet'=>$cartItem->qty,'fiyati'=>$cartItem->price,'durum'=>'Beklemede']
                    );
                }
            }

            Cart::destroy();
            $sepetUrunler=SepetUrun::with('urun')->where('sepet_id',$aktif_sepet_id)->get();
            foreach ($sepetUrunler as $sepetUrun){
                Cart::add($sepetUrun->urun->id,$sepetUrun->urun->urun_adi,$sepetUrun->adet,$sepetUrun->urun->fiyati,0,['slug'=>$sepetUrun->urun->slug]);
            }

            //giris isleminden sonra ödeme sayfasina yönlendirme
            return redirect()->intended('/');
        }
        else{
            $errors=['email'=>'Hatalı Giriş'];
            return back()->withErrors($errors);
        }
    }

    public function kaydol_form(){
        return view('kullanici.kaydol');
    }

    public function kaydol(){
        $this->validate(request(),[
            'adsoyad'=>'required|min:5|max:60',
            'email'=>'required|email|unique:kullanici',
            'sifre'=>'required|confirmed|min:5|max:15',
        ]);

        $kullanici=Kullanici::create([
            'adsoyad'=>request('adsoyad'),
            'email'=>request('email'),
            'sifre'=>Hash::make(request('sifre')),
            'aktivasyon_anahtari'=>Str::random(60),
            'aktif_mi'=>0,
        ]);
        $kullanici->detay()->save(new KullaniciDetay());

        Mail::to(request('email'))->send(new KullaniciKayitMail($kullanici));

        auth()->login($kullanici);

        return redirect()->route('anasayfa');
    }

    public function aktiflestir($anahtar){
        $kullanici=Kullanici::where('aktivasyon_anahtari',$anahtar)->first();
        if(!is_null($kullanici)){
            $kullanici->aktivasyon_anahtari=null;
            $kullanici->aktif_mi=1;
            $kullanici->save();

            return redirect()->to('/')
                ->with('mesaj', 'Kullanıcı kaydınız aktifleştirildi')
                ->with('mesaj_tur', 'success');
        }
        else {
            return redirect()->to('/')
                ->with('mesaj', 'Kullanıcı kaydınız aktifleştirilemedi')
                ->with('mesaj_tur', 'warning');
        }
    }

    public function oturumukapat(){
        auth()->logout();
        request()->session()->flush();
        request()->session()->regenerate();
        return redirect()->route('anasayfa');
    }
}
