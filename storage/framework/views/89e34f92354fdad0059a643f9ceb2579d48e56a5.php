<?php $__env->startSection('title', 'Kullanıcı Yönetimi'); ?>
<?php $__env->startSection('content'); ?>
    <h1 class="page-header">Kullanıcı Yönetimi</h1>

    <h3 class="sub-header">Kullanıcı Listesi</h3>
    <div class="well">
        <div class="btn-group pull-right">
            <a href="<?php echo e(route('yonetim.kullanici.yeni')); ?>" class="btn btn-primary">Yeni</a>
        </div>
        <form method="post" action="<?php echo e(route('yonetim.kullanici')); ?>" class="form-inline">
            <?php echo e(csrf_field()); ?>

            <div class="form-group">
                <label for="aranan">Ara</label>
                <input type="text" class="form-control form-control-sm" name="aranan" id="aranan" placeholder="Ad, Email Ara..." value="<?php echo e(old('aranan')); ?>">
            </div>
            <button type="submit" class="btn btn-primary">Ara</button>
            <a href="<?php echo e(route('yonetim.kullanici')); ?>" class="btn btn-primary">Temizle</a>
        </form>
    </div>

    <?php echo $__env->make('layouts.partials.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Ad Soyad</th>
                <th>Email</th>
                <th>Aktif Mi</th>
                <th>Kullanıcı Tipi</th>
                <th>Kayıt Tarihi</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php if(count($list) == 0): ?>
                <tr><td colspan="7" class="text-center">Kayıt bulunamadı!</td></tr>
            <?php endif; ?>
            <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($entry->id); ?></td>
                    <td><?php echo e($entry->adsoyad); ?></td>
                    <td><?php echo e($entry->email); ?></td>
                    <td>
                        <?php if($entry->aktif_mi): ?>
                            <span class="label label-success">Aktif</span>
                        <?php else: ?>
                            <span class="label label-warning">Pasif</span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <?php if($entry->yonetici_mi): ?>
                            <span class="label label-success">Yönetici</span>
                        <?php else: ?>
                            <span class="label label-warning">Müşteri</span>
                        <?php endif; ?>
                    </td>
                    <td><?php echo e($entry->created_at); ?></td>
                    <td style="width: 100px">
                        <a href="<?php echo e(route('yonetim.kullanici.duzenle', $entry->id)); ?>" class="btn btn-xs btn-success" data-toggle="tooltip" data-placement="top" title="Düzenle">
                            <span class="fa fa-pencil"></span>
                        </a>
                        <a href="<?php echo e(route('yonetim.kullanici.sil', $entry->id)); ?>" class="btn btn-xs btn-danger" data-toggle="tooltip" data-placement="top" title="Sil" onclick="return confirm('Emin misiniz?')">
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

<?php echo $__env->make('yonetim.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Courses\laravelecommerce\Project\resources\views/yonetim/kullanici/index.blade.php ENDPATH**/ ?>