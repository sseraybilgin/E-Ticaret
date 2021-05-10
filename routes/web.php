<?php
Route::group(['prefix'=>'yonetim'],function (){
    Route::redirect('/','/yonetim/oturumac');

    Route::match(['get','post'],'/oturumac','App\Http\Controllers\Yonetim\KullaniciController@oturumac')->name('yonetim.oturumac');
    Route::get('/oturumukapat','App\Http\Controllers\Yonetim\KullaniciController@oturumukapat')->name('yonetim.oturumukapat');

    Route::group(['middleware'=>'yonetim'],function () {
        Route::get('/anasayfa', 'App\Http\Controllers\Yonetim\AnasayfaController@index')->name('yonetim.anasayfa');

        // => /yonetim/kullanici
        Route::group(['prefix' => 'kullanici'], function () {
            Route::match(['get', 'post'], '/', 'App\Http\Controllers\Yonetim\KullaniciController@index')->name('yonetim.kullanici');
            Route::get('/yeni', 'App\Http\Controllers\Yonetim\KullaniciController@form')->name('yonetim.kullanici.yeni');
            Route::get('/duzenle/{id}', 'App\Http\Controllers\Yonetim\KullaniciController@form')->name('yonetim.kullanici.duzenle');
            Route::post('/kaydet/{id?}', 'App\Http\Controllers\Yonetim\KullaniciController@kaydet')->name('yonetim.kullanici.kaydet');
            Route::get('/sil/{id}', 'App\Http\Controllers\Yonetim\KullaniciController@sil')->name('yonetim.kullanici.sil');
        });

        // => /yonetim/kategori
        Route::group(['prefix' => 'kategori'], function () {
            Route::match(['get', 'post'], '/', 'App\Http\Controllers\Yonetim\KategoriController@index')->name('yonetim.kategori');
            Route::get('/yeni', 'App\Http\Controllers\Yonetim\KategoriController@form')->name('yonetim.kategori.yeni');
            Route::get('/duzenle/{id}', 'App\Http\Controllers\Yonetim\KategoriController@form')->name('yonetim.kategori.duzenle');
            Route::post('/kaydet/{id?}', 'App\Http\Controllers\Yonetim\KategoriController@kaydet')->name('yonetim.kategori.kaydet');
            Route::get('/sil/{id}', 'App\Http\Controllers\Yonetim\KategoriController@sil')->name('yonetim.kategori.sil');
        });

        // => /yonetim/urun
        Route::group(['prefix' => 'urun'], function () {
            Route::match(['get', 'post'], '/', 'App\Http\Controllers\Yonetim\UrunController@index')->name('yonetim.urun');
            Route::get('/yeni', 'App\Http\Controllers\Yonetim\UrunController@form')->name('yonetim.urun.yeni');
            Route::get('/duzenle/{id}', 'App\Http\Controllers\Yonetim\UrunController@form')->name('yonetim.urun.duzenle');
            Route::post('/kaydet/{id?}', 'App\Http\Controllers\Yonetim\UrunController@kaydet')->name('yonetim.urun.kaydet');
            Route::get('/sil/{id}', 'App\Http\Controllers\Yonetim\UrunController@sil')->name('yonetim.urun.sil');
        });

        // => /yonetim/siparis
        Route::group(['prefix' => 'siparis'], function () {
            Route::match(['get', 'post'], '/', 'App\Http\Controllers\Yonetim\SiparisController@index')->name('yonetim.siparis');
            Route::get('/yeni', 'App\Http\Controllers\Yonetim\SiparisController@form')->name('yonetim.siparis.yeni');
            Route::get('/duzenle/{id}', 'App\Http\Controllers\Yonetim\SiparisController@form')->name('yonetim.siparis.duzenle');
            Route::post('/kaydet/{id?}', 'App\Http\Controllers\Yonetim\SiparisController@kaydet')->name('yonetim.siparis.kaydet');
            Route::get('/sil/{id}', 'App\Http\Controllers\Yonetim\SiparisController@sil')->name('yonetim.siparis.sil');
        });
    });
});
Route::get('/', 'App\Http\Controllers\AnasayfaController@index')->name('anasayfa');

Route::get('/kategori/{slug_kategoriadi}', 'App\Http\Controllers\KategoriController@index')->name('kategori');

Route::get('/urun/{slug_urunadi}', 'App\Http\Controllers\UrunController@index')->name('urun');

Route::post('/ara','App\Http\Controllers\UrunController@ara')->name('urun_ara');
Route::get('/ara','App\Http\Controllers\UrunController@ara')->name('urun_ara');

Route::group(['prefix'=>'sepet'],function (){
    Route::get('/', 'App\Http\Controllers\SepetController@index')->name('sepet');
    Route::post('/ekle', 'App\Http\Controllers\SepetController@ekle')->name('sepet.ekle');
    Route::delete('/kaldir/{rowId}', 'App\Http\Controllers\SepetController@kaldir')->name('sepet.kaldir');
    Route::delete('/bosalt', 'App\Http\Controllers\SepetController@bosalt')->name('sepet.bosalt');
    Route::patch('/guncelle/{rowId}', 'App\Http\Controllers\SepetController@guncelle')->name('sepet.guncelle');
});

Route::get('/odeme', 'App\Http\Controllers\OdemeController@index')->name('odeme');
Route::post('/odeme', 'App\Http\Controllers\OdemeController@odemeyap')->name('odemeyap');


//icindeki tüm route tanimlari sadece giris yapmis kisiler tarafindan erisilebilir
Route::group(['middleware'=>'auth'],function (){
    Route::get('/siparisler', 'App\Http\Controllers\SiparislerController@index')->name('siparisler');
    Route::get('/siparisler/{id}', 'App\Http\Controllers\SiparislerController@detay')->name('siparis');
});

Route::group(['prefix'=>'kullanici'], function (){
    Route::get('/oturumac','App\Http\Controllers\KullaniciController@giris_form')->name('kullanici.oturumac');
    Route::Post('/oturumac','App\Http\Controllers\KullaniciController@giris');

    Route::get('/kaydol','App\Http\Controllers\KullaniciController@kaydol_form')->name('kullanici.kaydol');
    Route::post('/kaydol','App\Http\Controllers\KullaniciController@kaydol');

    Route::get('/aktiflestir/{anahtar}','App\Http\Controllers\KullaniciController@aktiflestir')->name('aktiflestir');

    Route::post('/oturumkapat','App\Http\Controllers\KullaniciController@oturumukapat')->name('kullanici.oturumukapat');
});

Route::get('/test/mail',function (){
    $kullanici =App\Models\Kullanici::find(1);
    return new App\Mail\KullaniciKayitMail($kullanici);
});

Auth::routes();
