<?php $__env->startSection('title',$urun->urun_adi); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="<?php echo e(route('anasayfa')); ?>">Anasayfa</a></li>
            <?php $__currentLoopData = $kategoriler; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><a href="<?php echo e(route('kategori',$kategori->slug)); ?>"><?php echo e($kategori->kategori_adi); ?></a></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <li class="active"><?php echo e($urun->urun_adi); ?></li>
        </ol>
        <div class="bg-content">
            <div class="row">
                <div class="col-md-5">
                    <img src="<?php echo e($urun->detay->urun_resmi!=null ? asset('/uploads/urunler/'.$urun->detay->urun_resmi) : 'http://via.placeholder.com/400x400?text=UrunResmi'); ?>" class="img-responsive" style="min-width: 100%;max-width: 100%">
                    <hr>
                </div>
                <div class="col-md-7">
                    <h1><?php echo e($urun->urun_adi); ?></h1>
                    <p class="price"><?php echo e($urun->fiyati); ?> ₺</p>
                    <form action="<?php echo e(route('sepet.ekle')); ?>" method="post">
                        <?php echo e(csrf_field()); ?>

                        <input type="hidden" name="id" value="<?php echo e($urun->id); ?>">
                        <input type="submit" class="btn btn-theme" value="Sepete Ekle">
                    </form>
                </div>
            </div>

            <div>
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#t1" data-toggle="tab">Ürün Açıklaması</a></li>
                    <li role="presentation"><a href="#t2" data-toggle="tab">Yorumlar</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="t1"><?php echo e($urun->aciklama); ?></div>
                    <div role="tabpanel" class="tab-pane" id="t2">Henüz Yorum Yapılmadı!</div>
                </div>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Courses\laravelecommerce\Project\resources\views/urun.blade.php ENDPATH**/ ?>