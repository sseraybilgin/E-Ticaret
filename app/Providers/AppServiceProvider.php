<?php

namespace App\Providers;

use App\Models\Kategori;
use App\Models\Siparis;
use App\Models\Urun;
use App\Models\Kullanici;
use Illuminate\Support\ServiceProvider;
use View;
use Cache;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        View::composer(['yonetim.*'],function ($view){
            $bitisZamani=now()->addMinutes(10);
            $istatistikler=Cache::remember('istatistikler',$bitisZamani,function (){
                return [
                    'bekleyen_siparis'=>Siparis::where('durum','Siparişiniz alındı')->count(),
                    'tamamlanan_siparis'=>Siparis::where('durum','Sipariş tamamlandı')->count(),
                    'toplam_urun'=>Urun::count(),
                    'toplam_kategori'=>Kategori::count(),
                    'toplam_kullanici'=>Kullanici::count(),
                    'toplam_siparis'=>Siparis::count()
                ];
            });
            $view->with('istatistikler',$istatistikler);
        });
    }
}
