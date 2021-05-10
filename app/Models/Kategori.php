<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kategori extends Model
{
    use SoftDeletes;

   protected $table="kategori";
   //protected $fillable=['kategori_adi','slug'];
   protected $guarded=[];

   public function urunler(){
       return $this->belongsToMany('App\Models\Urun','kategori_urun');
   }

    public function alt_kategoriler()
    {
        return $this->hasMany('App\Models\Kategori', 'ust_id', 'id');
    }

    public function ust_kategori() {
        return $this->belongsTo('App\Models\Kategori', 'ust_id')->withDefault([
            'kategori_adi' => 'Ana Kategori'
        ]);
    }
}
