<?php $__env->startSection('title', 'Kategori Yönetimi'); ?>
<?php $__env->startSection('content'); ?>
    <h1 class="page-header">Kategori Yönetimi</h1>

    <h3 class="sub-header">Kategori Listesi</h3>
    <div class="well">
        <div class="btn-group pull-right">
            <a href="<?php echo e(route('yonetim.kategori.yeni')); ?>" class="btn btn-primary">Yeni</a>
        </div>
        <form method="post" action="<?php echo e(route('yonetim.kategori')); ?>" class="form-inline">
            <?php echo e(csrf_field()); ?>

            <div class="form-group">
                <label for="aranan">Ara</label>
                <input type="text" class="form-control form-control-sm" name="aranan" id="aranan" placeholder="Kategori Ara..." value="<?php echo e(old('aranan')); ?>">
                <label for="ust_id">Üst Kategori</label>
                <select name="ust_id" id="ust_id" class="form-control">
                    <option value="">Seçiniz</option>
                   <?php $__currentLoopData = $anakategoriler; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($kategori->id); ?>" <?php echo e(old('ust_id') == $kategori->id ? 'selected' : ''); ?>><?php echo e($kategori->kategori_adi); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Ara</button>
            <a href="<?php echo e(route('yonetim.kategori')); ?>" class="btn btn-primary">Temizle</a>
        </form>
    </div>

    <?php echo $__env->make('layouts.partials.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Üst Kategori</th>
                <th>Kategori Adı</th>
                <th>Slug</th>
                <th>Kayıt Tarihi</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php if(count($list) == 0): ?>
                <tr><td colspan="6" class="text-center">Kayıt bulunamadı!</td></tr>
            <?php endif; ?>
            <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($entry->id); ?></td>
                    <td><?php echo e($entry->ust_kategori->kategori_adi); ?></td>
                    <td><?php echo e($entry->kategori_adi); ?></td>
                    <td><?php echo e($entry->slug); ?></td>
                    <td><?php echo e($entry->created_at); ?></td>
                    <td style="width: 100px">
                        <a href="<?php echo e(route('yonetim.kategori.duzenle', $entry->id)); ?>" class="btn btn-xs btn-success" data-toggle="tooltip" data-placement="top" title="Düzenle">
                            <span class="fa fa-pencil"></span>
                        </a>
                        <a href="<?php echo e(route('yonetim.kategori.sil', $entry->id)); ?>" class="btn btn-xs btn-danger" data-toggle="tooltip" data-placement="top" title="Sil" onclick="return confirm('Emin misiniz?')">
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

<?php echo $__env->make('yonetim.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Courses\laravelecommerce\Project\resources\views/yonetim/kategori/index.blade.php ENDPATH**/ ?>