<?php $__env->startSection('title', 'Ürün Yönetimi'); ?>
<?php $__env->startSection('content'); ?>
    <h1 class="page-header">Ürün Yönetimi</h1>

    <form method="post" action="<?php echo e(route('yonetim.urun.kaydet', $entry->id)); ?>" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>


        <div class="pull-right">
            <button type="submit" class="btn btn-primary">
                <?php echo e($entry->id > 0 ? "Güncelle" : "Kaydet"); ?>

            </button>
        </div>
        <h3 class="sub-header">
            Ürün <?php echo e($entry->id > 0 ? "Düzenle" : "Ekle"); ?>

        </h3>

        <?php echo $__env->make('layouts.partials.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('layouts.partials.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="urun_adi">Ürün Adı</label>
                    <input type="text" class="form-control" id="urun_adi" name="urun_adi" placeholder="Ürün Adı" value="<?php echo e(old('urun_adi', $entry->urun_adi)); ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="hidden" name="original_slug" value="<?php echo e(old('slug', $entry->slug)); ?>">
                    <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug" value="<?php echo e(old('slug', $entry->slug)); ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="aciklama">Açıklama</label>
                    <textarea class="form-control" id="aciklama" name="aciklama" placeholder="Açıklama"><?php echo e(old('urun_adi', $entry->urun_adi)); ?></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="fiyati">Fiyatı</label>
                    <input type="text" class="form-control" id="fiyati" name="fiyati" placeholder="Fiyatı" value="<?php echo e(old('fiyati', $entry->fiyati)); ?>">
                </div>
            </div>
        </div>
        <div class="checkbox">
            <ul>
            <label>
                <input type="hidden" name="goster_slider" value="0">
                <input type="checkbox" name="goster_slider" value="1" <?php echo e(old('goster_slider', $entry->detay->goster_slider) ? 'checked' : ''); ?>> Slider'da Göster
            </label>
            </ul>
            <ul>
            <label>
                <input type="hidden" name="goster_gunun_firsati" value="0">
                <input type="checkbox" name="goster_gunun_firsati" value="1" <?php echo e(old('goster_gunun_firsati', $entry->detay->goster_gunun_firsati) ? 'checked' : ''); ?>> Günün Fırsatında Göster
            </label>
            </ul>
            <ul>
            <label>
                <input type="hidden" name="goster_one_cikan" value="0">
                <input type="checkbox" name="goster_one_cikan" value="1" <?php echo e(old('goster_one_cikan', $entry->detay->goster_one_cikan) ? 'checked' : ''); ?>> Öne Çıkan Alanında Göster
            </label>
            </ul>
            <ul>
            <label>
                <input type="hidden" name="goster_cok_satan" value="0">
                <input type="checkbox" name="goster_cok_satan" value="1" <?php echo e(old('goster_cok_satan', $entry->detay->goster_cok_satan) ? 'checked' : ''); ?>> Çok Satan Ürünlerde Göster
            </label>
            </ul>
            <ul>
            <label>
                <input type="hidden" name="goster_indirimlisi" value="0">
                <input type="checkbox" name="goster_indirimlisi" value="1" <?php echo e(old('goster_indirimlisi', $entry->detay->goster_indirimlisi) ? 'checked' : ''); ?>> İndirimli Ürünlerde Göster
            </label>
            </ul>
        </div>
        <div class="row">
            <br>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="kategoriler">Kategoriler</label>
                    <select name="kategoriler[]" class="form-control" id="kategoriler" multiple>
                        <?php $__currentLoopData = $kategoriler; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            
                            
                            <option value="<?php echo e($kategori->id); ?>" <?php echo e(collect(old('kategoriler', $urun_kategorileri))->contains($kategori->id) ? 'selected': ''); ?>><?php echo e($kategori->kategori_adi); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <br>
            <?php if($entry->detay->urun_resmi!=null): ?>
                <img src="/uploads/urunler/<?php echo e($entry->detay->urun_resmi); ?>" style="height: 100px; margin-right: 20px;" class="thumbnail pull-left">
            <?php endif; ?>
            <label for="urun_resmi">Ürün Resmi</label>
            <input type="file" id="urun_resmi" name="urun_resmi">
        </div>

    </form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('head'); ?>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
    <script src="//cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.9.2/plugins/autogrow/plugin.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
     <script>
         $(function () {
             $('#kategoriler').select2({
                 placeholder: 'Lütfen kategori seçiniz'
             });
            
         });
     </script>
 <?php $__env->stopSection(); ?>

<?php echo $__env->make('yonetim.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Courses\laravelecommerce\Project\resources\views/yonetim/urun/form.blade.php ENDPATH**/ ?>