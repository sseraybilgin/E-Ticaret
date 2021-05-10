<h1><?php echo e(config('app.name')); ?></h1>
<p>Merhaba <?php echo e($kullanici->adsoyad); ?>, Kaydınız Başarılı Bir Şekilde Yapıldı.</p>
<p>Kaydınızı Aktifleştirmek için<a href="<?php echo e(config('app.url')); ?>/kullanici/aktiflestir/<?php echo e($kullanici->aktivasyon_anahtari); ?>">tıklayın</a> veya aşağıdaki bağlantıyı Tarayıcınızdan açınız.</p>
<p><?php echo e(config('app.url')); ?>/kullanici/aktiflestir/<?php echo e($kullanici->aktivasyon_anahtari); ?></p>
<?php /**PATH C:\Courses\laravelecommerce\Project\resources\views/mails/kullanici_kayit.blade.php ENDPATH**/ ?>