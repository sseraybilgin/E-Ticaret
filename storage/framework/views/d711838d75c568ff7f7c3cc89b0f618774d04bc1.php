<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="jumbotron text-center">
            <h1>404</h1>
            <h2>Aradığınız Sayfa Bulunamadı!</h2>
            <a href="<?php echo e(route('anasayfa')); ?>" class="btn btn-primary">Anasayfa'ya Dön</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Courses\laravelecommerce\Project\resources\views/errors/404.blade.php ENDPATH**/ ?>