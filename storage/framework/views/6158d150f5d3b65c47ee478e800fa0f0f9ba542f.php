<?php $__env->startSection('title', 'Sipariş Detayı'); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="bg-content">
            <a href="<?php echo e(route('siparisler')); ?>" class="btn btn-xs btn-primary">
                <i class="glyphicon glyphicon-arrow-left"></i> Siparişlere Dön
            </a>
            <h2>Sipariş (SP-<?php echo e($siparis->id); ?>)</h2>
            <table class="table table-bordererd table-hover">
                <tr>
                    <th colspan="2">Ürün</th>
                    <th>Tutar</th>
                    <th>Adet</th>
                    <th>Ara Toplam</th>
                    <th>Durum</th>
                </tr>
                <?php $__currentLoopData = $siparis->sepet->sepet_urunler; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sepet_urun): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td style="width:120px">
                            <a href="<?php echo e(route('urun', $sepet_urun->urun->slug)); ?>">
                                <img src="<?php echo e($sepet_urun->urun->detay->urun_resmi!=null ? asset('uploads/urunler/' . $sepet_urun->urun->detay->urun_resmi) : 'http://via.placeholder.com/120x100?text=UrunResmi'); ?>" style="height: 120px;">
                            </a>
                        </td>
                        <td>
                            <a href="<?php echo e(route('urun', $sepet_urun->urun->slug)); ?>">
                                <?php echo e($sepet_urun->urun->urun_adi); ?>

                            </a>
                        </td>
                        <td><?php echo e($sepet_urun->fiyati); ?> ₺</td>
                        <td><?php echo e($sepet_urun->adet); ?></td>
                        <td><?php echo e($sepet_urun->fiyati * $sepet_urun->adet); ?> ₺</td>
                        <td><?php echo e($sepet_urun->durum); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th colspan="4" class="text-right">Toplam Tutar</th>
                    <td colspan="2"><?php echo e($siparis->siparis_tutari); ?> ₺</td>
                </tr>
                <tr>
                    <th colspan="4" class="text-right">Toplam Tutar (KDV'li)</th>
                    <td colspan="2"><?php echo e($siparis->siparis_tutari* ((100+config('cart.tax'))/100)); ?> ₺</td>
                </tr>
                <tr>
                    <th colspan="4" class="text-right">Sipariş Durumu</th>
                    <td colspan="2"><?php echo e($siparis->durum); ?></td>
                </tr>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Courses\laravelecommerce\Project\resources\views/siparis.blade.php ENDPATH**/ ?>