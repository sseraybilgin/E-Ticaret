<div class="list-group">
    <a href="<?php echo e(route('yonetim.anasayfa')); ?>" class="list-group-item">
        <span class="fa fa-fw fa-dashboard"></span> Kontrol Paneli
    </a>
    <a href="<?php echo e(route('yonetim.urun')); ?>" class="list-group-item">
        <span class="fa fa-fw fa-cubes"></span> Ürünler
        <span class="badge badge-dark badge-pill pull-right"><?php echo e($istatistikler['toplam_urun']); ?></span>
    </a>
    <a href="<?php echo e(route('yonetim.kategori')); ?>" class="list-group-item">
        <span class="fa fa-fw fa-folder"></span> Kategoriler
        <span class="badge badge-dark badge-pill pull-right"><?php echo e($istatistikler['toplam_kategori']); ?></span>
    </a>
   <a href="<?php echo e(route('yonetim.kullanici')); ?>" class="list-group-item">
        <span class="fa fa-fw fa-users"></span> Kullanıcılar
        <span class="badge badge-dark badge-pill pull-right"><?php echo e($istatistikler['toplam_kullanici']); ?></span>
    </a>
    <a href="<?php echo e(route('yonetim.siparis')); ?>" class="list-group-item">
        <span class="fa fa-fw fa-shopping-cart"></span> Siparişler
        <span class="badge badge-dark badge-pill pull-right"><?php echo e($istatistikler['toplam_siparis']); ?></span>
    </a>
</div>
<?php /**PATH C:\Courses\laravelecommerce\Project\resources\views/yonetim/layouts/partials/sidebar.blade.php ENDPATH**/ ?>