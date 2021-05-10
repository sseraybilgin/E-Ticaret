<?php $__env->startSection('content'); ?>
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="<?php echo e(route('anasayfa')); ?>">Anasayfa</a></li>
            <li class="active">Arama Sonucu</li>
        </ol>

        <div class="products bg-content">
            <div class="row">
                <?php if(count($urunler)==0): ?>
                    <div class="col-md-12 text-center">
                        Bir Urun Bulunamadi!
                    </div>
                <?php endif; ?>
                <?php $__currentLoopData = $urunler; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $urun): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-3 product">
                        <a href="<?php echo e(route('urun',$urun->slug)); ?>">
                            <img src="http://lorempixel.com/640/400/food/1" alt="<?php echo e($urun->urun_adi); ?>" style="width: 100%">
                        </a>
                        <p>
                            <a href="<?php echo e(route('urun',$urun->slug)); ?>">
                                <?php echo e($urun->urun_adi); ?>

                            </a>
                        </p>
                        <p class="price">
                            <?php echo e($urun->fiyati); ?> ₺
                        </p>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            
            
            <?php echo e($urunler->appends(['aranan'=> old('aranan')])->links()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Courses\laravelecommerce\Project\resources\views/arama.blade.php ENDPATH**/ ?>