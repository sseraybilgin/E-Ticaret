<?php $__env->startSection('title', 'Kategori Yönetimi'); ?>
<?php $__env->startSection('content'); ?>
    <h1 class="page-header">Kategori Yönetimi</h1>

    <form method="post" action="<?php echo e(route('yonetim.kategori.kaydet', $entry->id)); ?>">
        <?php echo e(csrf_field()); ?>


        <div class="pull-right">
            <button type="submit" class="btn btn-primary">
                <?php echo e($entry->id > 0 ? "Güncelle" : "Kaydet"); ?>

            </button>
        </div>
        <h3 class="sub-header">
            Kategori <?php echo e($entry->id > 0 ? "Düzenle" : "Ekle"); ?>

        </h3>

        <?php echo $__env->make('layouts.partials.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('layouts.partials.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="ust_id">Üst Kategori</label>
                    <select name="ust_id" id="ust_id" class="form-control">
                        <option value="">Ana Kategori</option>
                        <?php $__currentLoopData = $kategoriler; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($kategori->id); ?>" <?php echo e($kategori->id == old('ust_id', $entry->ust_id) ? 'selected' : ''); ?>><?php echo e($kategori->kategori_adi); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="kategori_adi">Kategori Adı</label>
                    <input type="text" class="form-control" id="kategori_adi" name="kategori_adi" placeholder="Kategori Adı" value="<?php echo e(old('kategori_adi', $entry->kategori_adi)); ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="hidden" name="original_slug" value="<?php echo e(old('slug', $entry->slug)); ?>">
                    <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug" value="<?php echo e(old('slug', $entry->slug)); ?>">
                </div>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('yonetim.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Courses\laravelecommerce\Project\resources\views/yonetim/kategori/form.blade.php ENDPATH**/ ?>