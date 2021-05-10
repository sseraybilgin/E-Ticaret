<?php $__env->startSection('title', 'Kullanıcı Yönetimi'); ?>
<?php $__env->startSection('content'); ?>
    <h1 class="page-header">Kullanıcı Yönetimi</h1>

    <form method="post" action="<?php echo e(route('yonetim.kullanici.kaydet', $entry->id)); ?>">
        <?php echo e(csrf_field()); ?>


        <div class="pull-right">
            <button type="submit" class="btn btn-primary">
                <?php echo e($entry->id > 0 ? "Güncelle" : "Kaydet"); ?>

            </button>
        </div>
        <h3 class="sub-header">
            Kullanıcı <?php echo e($entry->id > 0 ? "Düzenle" : "Ekle"); ?>

        </h3>

        <?php echo $__env->make('layouts.partials.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('layouts.partials.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="adsoyad">Ad Soyad</label>
                    <input type="text" class="form-control" id="adsoyad" name="adsoyad" placeholder="Ad Soyad" value="<?php echo e(old('adsoyad', $entry->adsoyad)); ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo e(old('email', $entry->email)); ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="sifre">Şifre</label>
                    <input type="password" class="form-control" id="sifre" name="sifre" placeholder="Şifre">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="adres">Adres</label>
                    <input type="text" class="form-control" id="adres" name="adres" placeholder="Adres" value="<?php echo e(old('adres', $entry->detay->adres)); ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="telefon">Telefon</label>
                    <input type="text" class="form-control" id="telefon" name="telefon" placeholder="Telefon" value="<?php echo e(old('telefon', $entry->detay->telefon)); ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="ceptelefonu">Cep Telefonu</label>
                    <input type="text" class="form-control" id="ceptelefonu" name="ceptelefonu" placeholder="Cep Telefonu" value="<?php echo e(old('ceptelefonu', $entry->detay->ceptelefonu)); ?>">
                </div>
            </div>
        </div>
        <div class="checkbox">
            <label>
                <input type="hidden" name="aktif_mi" value="0">
                <input type="checkbox" name="aktif_mi" value="1" <?php echo e(old('aktif_mi', $entry->aktif_mi) ? 'checked' : ''); ?>> Aktif Mi
            </label>
        </div>
        <div class="checkbox">
            <label>
                <input type="hidden" name="yonetici_mi" value="0">
                <input type="checkbox" name="yonetici_mi" value="1" <?php echo e(old('yonetici_mi', $entry->yonetici_mi) ? 'checked' : ''); ?>> Yönetici Mi
            </label>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('yonetim.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Courses\laravelecommerce\Project\resources\views/yonetim/kullanici/form.blade.php ENDPATH**/ ?>