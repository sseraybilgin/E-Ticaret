<?php $__env->startSection('title', 'Sipariş Yönetimi'); ?>
<?php $__env->startSection('content'); ?>
    <h1 class="page-header">Sipariş Yönetimi</h1>

    <h3 class="sub-header">Sipariş Listesi</h3>
    <div class="well">
        <form method="post" action="<?php echo e(route('yonetim.siparis')); ?>" class="form-inline">
            <?php echo e(csrf_field()); ?>

            <div class="form-group">
                <label for="aranan">Ara</label>
                <input type="text" class="form-control form-control-sm" name="aranan" id="aranan" placeholder="Sipariş Ara..." value="<?php echo e(old('aranan')); ?>">
            </div>
            <button type="submit" class="btn btn-primary">Ara</button>
            <a href="<?php echo e(route('yonetim.siparis')); ?>" class="btn btn-primary">Temizle</a>
        </form>
    </div>

    <?php echo $__env->make('layouts.partials.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <thead class="thead-dark">
            <tr>
                <th>Sipariş Kodu</th>
                <th>Müşteri</th>
                <th>Tutar</th>
                <th>Durum</th>
                <th>Sipariş Tarihi</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php if(count($list) == 0): ?>
                <tr>
                    <td colspan="7" class="text-center">Kayıt bulunamadı!</td>
                </tr>
            <?php endif; ?>
            <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td>SP-<?php echo e($entry->id); ?></td>
                    <td><?php echo e($entry->sepet->kullanici->adsoyad); ?></td>
                    <td><?php echo e($entry->siparis_tutari * ((100 + config('cart.tax')) / 100)); ?> ₺</td>
                    <td><?php echo e($entry->durum); ?></td>
                    <td><?php echo e($entry->created_at); ?></td>
                    <td style="width: 100px">
                        <a href="<?php echo e(route('yonetim.siparis.duzenle', $entry->id)); ?>" class="btn btn-xs btn-success" data-toggle="tooltip" data-placement="top" title="Düzenle">
                            <span class="fa fa-pencil"></span>
                        </a>
                        <a href="<?php echo e(route('yonetim.siparis.sil', $entry->id)); ?>" class="btn btn-xs btn-danger" data-toggle="tooltip" data-placement="top" title="Sil" onclick="return confirm('Emin misiniz?')">
                            <span class="fa fa-trash"></span>
                        </a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <?php echo e($list->links()); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('yonetim.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Courses\laravelecommerce\Project\resources\views/yonetim/siparis/index.blade.php ENDPATH**/ ?>