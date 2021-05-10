<?php $__env->startSection('title',$kategori->kategori_adi); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="<?php echo e(route('anasayfa')); ?>">Anasayfa</a></li>
            
           <li class="active"><?php echo e($kategori->kategori_adi); ?></li>
        </ol>
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading"><?php echo e($kategori->kategori_adi); ?></div>
                    <div class="panel-body">
                        <?php if(count($alt_kategoriler)>0): ?>
                            <h3>Alt Kategoriler</h3>
                            <div class="list-group categories">
                                <?php $__currentLoopData = $alt_kategoriler; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alt_kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a href="<?php echo e(route('kategori',$alt_kategori->slug)); ?>" class="list-group-item">
                                        <i class="fa fa-fa-arrow-circle-right"></i>
                                        <?php echo e($alt_kategori->kategori_adi); ?>

                                    </a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php else: ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="products bg-content">
                    Sırala
                    <a href="?order=coksatanlar" class="btn btn-default">Çok Satanlar</a>
                    <a href="?order=yeni" class="btn btn-default">Yeni Ürünler</a>
                    <hr>
                    <div class="row">
                        <?php if(count($urunler)==0): ?>
                            <div class="col-md-12">
                                Bu Kategoride Henüz Ürün Bulunmamaktadır!
                            </div>
                        <?php endif; ?>

                        <?php $__currentLoopData = $urunler; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $urun): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <form action="<?php echo e(route('sepet.ekle')); ?>" method="post">
                                    <?php echo e(csrf_field()); ?>

                            <div class="col-md-3 product">
                                <a href="<?php echo e(route('urun',$urun->slug)); ?>">
                                    <img src="<?php echo e($urun->detay->urun_resmi!=null ? asset('/uploads/urunler/'.$urun->detay->urun_resmi) : 'http://via.placeholder.com/400x485?text=UrunResmi'); ?>" class="img-responsive" style="min-width: 100%;max-width: 100%">
                                </a>
                                <p><a href="<?php echo e(route('urun',$urun->slug)); ?>"><?php echo e($urun->urun_adi); ?></a></p>
                                <p class="price"><?php echo e($urun->fiyati); ?> ₺</p>
                                <p>
                                    <input type="hidden" name="id" value="<?php echo e($urun->id); ?>">
                                    <input type="submit" class="btn btn-theme" value="Sepete Ekle">
                                </p>
                            </div>
                                </form>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    
                    <?php echo e(request()->has('order')? $urunler->appends(['order'=> request('order')])->links() :$urunler->links()); ?>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Courses\laravelecommerce\Project\resources\views/kategori.blade.php ENDPATH**/ ?>