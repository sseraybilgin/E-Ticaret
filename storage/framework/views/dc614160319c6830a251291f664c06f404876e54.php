<?php $__env->startSection('title', 'Siparişler'); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="bg-content">
            <h2>Siparişler</h2>
            <?php if(count($siparisler) == 0): ?>
                <p>Henüz siparişiniz yok</p>
            <?php else: ?>
                <table class="table table-bordererd table-hover">
                    <tr>
                        <th>Sipariş Kodu</th>
                        <th>Tutar</th>
                        <th>Toplam Ürün</th>
                        <th>Durum</th>
                        <th></th>
                    </tr>
                    <?php $__currentLoopData = $siparisler; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $siparis): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td>SP-<?php echo e($siparis->id); ?></td>
                            <td><?php echo e($siparis->siparis_tutari * ((100+config('cart.tax'))/100)); ?></td>
                            <td><?php echo e($siparis->sepet->sepet_urun_adet()); ?></td>
                            <td><?php echo e($siparis->durum); ?></td>
                            <td><a href="<?php echo e(route('siparis', $siparis->id)); ?>" class="btn btn-sm btn-success">Detay</a></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Courses\laravelecommerce\Project\resources\views/siparisler.blade.php ENDPATH**/ ?>