<?php $__env->startSection('title', 'Sipariş Yönetimi'); ?>
<?php $__env->startSection('content'); ?>
    <h1 class="page-header">Sipariş Yönetimi</h1>

    <form method="post" action="<?php echo e(route('yonetim.siparis.kaydet', $entry->id)); ?>">
        <?php echo e(csrf_field()); ?>


        <div class="pull-right">
            <button type="submit" class="btn btn-primary">
                <?php echo e($entry->id > 0 ? "Güncelle" : "Kaydet"); ?>

            </button>
        </div>
        <h3 class="sub-header">
            Sipariş <?php echo e($entry->id > 0 ? "Düzenle" : "Ekle"); ?>

        </h3>

        <?php echo $__env->make('layouts.partials.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('layouts.partials.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="adsoyad">Ad Soyad</label>
                    <input type="text" class="form-control" id="adsoyad" name="adsoyad" placeholder="Ad Soyad" value="<?php echo e(old('adsoyad', $entry->adsoyad)); ?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="telefon">Telefon</label>
                    <input type="text" class="form-control" id="telefon" name="telefon" placeholder="Telefon" value="<?php echo e(old('telefon', $entry->telefon)); ?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="ceptelefonu">Cep Telefonu</label>
                    <input type="text" class="form-control" id="ceptelefonu" name="ceptelefonu" placeholder="Cep Telefonu" value="<?php echo e(old('ceptelefonu', $entry->ceptelefonu)); ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="adres">Adres</label>
                    <input type="text" class="form-control" id="adres" name="adres" placeholder="Adres" value="<?php echo e(old('adres', $entry->adres)); ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="durum">Durum</label>
                    <select name="durum" class="form-control" id="durum">
                        <option <?php echo e(old('durum', $entry->durum) == 'Siparişiniz alındı' ? 'selected' : ''); ?>>Siparişiniz alındı</option>
                        <option <?php echo e(old('durum', $entry->durum) == 'Ödeme onaylandı' ? 'selected' : ''); ?>>Ödeme onaylandı</option>
                        <option <?php echo e(old('durum', $entry->durum) == 'Kargoya verildi' ? 'selected' : ''); ?>>Kargoya verildi</option>
                        <option <?php echo e(old('durum', $entry->durum) == 'Sipariş tamamlandı' ? 'selected' : ''); ?>>Sipariş tamamlandı</option>
                    </select>
                </div>
            </div>
        </div>
    </form>

    <h3>Sipariş (SP-<?php echo e($entry->id); ?>)</h3>
    <table class="table table-bordererd table-hover">
        <tr>
            <th colspan="2">Ürün</th>
            <th>Tutar</th>
            <th>Adet</th>
            <th>Ara Toplam</th>
            <th>Durum</th>
        </tr>
        <?php $__currentLoopData = $entry->sepet->sepet_urunler; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sepet_urun): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
            <td colspan="2"><?php echo e($entry->siparis_tutari); ?> ₺</td>
        </tr>
        <tr>
            <th colspan="4" class="text-right">Toplam Tutar (KDV'li)</th>
            <td colspan="2"><?php echo e($entry->siparis_tutari* ((100+config('cart.tax'))/100)); ?> ₺</td>
        </tr>
        <tr>
            <th colspan="4" class="text-right">Sipariş Durumu</th>
            <td colspan="2"><?php echo e($entry->durum); ?></td>
        </tr>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('yonetim.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Courses\laravelecommerce\Project\resources\views/yonetim/siparis/form.blade.php ENDPATH**/ ?>