<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticate;

class Kullanici extends Authenticate
{
    use SoftDeletes;

    protected $table='kullanici';

    protected $fillable=['adsoyad','email','sifre','aktivasyon_anahtari','aktif_mi','yonetici_mi'];
    protected  $hidden=['sifre','aktivasyon_anahtari',];

    //KullaniciController'deki password'ü sifre ile degistirme
    public function getAuthPassword(){
        return $this->sifre;
    }

    public function detay(){
        return $this->hasOne('App\Models\KullaniciDetay')->withDefault();
    }
}
