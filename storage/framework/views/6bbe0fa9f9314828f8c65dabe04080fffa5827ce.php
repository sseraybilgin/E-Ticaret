<?php $__env->startSection('title','Anasayfa'); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <?php echo $__env->make(('layouts.partials.alert'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Kategoriler</div>
                    <div class="list-group categories">
                        <?php $__currentLoopData = $kategoriler; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(route('kategori', $kategori->slug)); ?>" class="list-group-item">
                            <i class="fa fa-arrow-circle-o-right"></i>
                            <?php echo e($kategori->kategori_adi); ?>

                        </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <a href="http://eticaret.local/kategori/gulbuketleri">
                            <img src="/uploads/slider1.jpg" alt="...">
                            <div class="carousel-caption">
                                Gül Buketleri
                            </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="http://eticaret.local/kategori/gul">
                            <img src="/uploads/slider2.jpg" alt="...">
                            <div class="carousel-caption">
                                Güller
                            </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="http://eticaret.local/kategori/saksicicekleri">
                            <img src="/uploads/slider3.jpg" alt="...">
                            <div class="carousel-caption">
                                Saksı Çiçekleri
                            </div>
                            </a>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            
        </div>
    </div>
    <div class="container">
        <div class="products">
            <div class="panel panel-theme">
                <div class="panel-heading">Öne Çıkan Ürünler</div>
                <div class="panel-body">
                    <div class="row">
                        <?php $__currentLoopData = $urunler_one_cikan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $urun): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-3 product">
                            <a href="<?php echo e(route('urun',$urun->slug)); ?>">
                                <img src="<?php echo e($urun->detay->urun_resmi!=null ? asset('/uploads/urunler/'.$urun->detay->urun_resmi) : 'http://via.placeholder.com/400x400?text=UrunResmi'); ?>" class="img-responsive" style="min-width: 100%;max-width: 100%">
                            </a>
                            <p><a href="<?php echo e(route('urun',$urun->slug)); ?>"><?php echo e($urun->urun_adi); ?></a></p>
                            <p class="price"><?php echo e($urun->fiyati); ?> ₺</p>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="products">
            <div class="panel panel-theme">
                <div class="panel-heading">Çok Satan Ürünler</div>
                <div class="panel-body">
                    <div class="row">
                        <?php $__currentLoopData = $urunler_cok_satan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $urun): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-3 product">
                                <a href="<?php echo e(route('urun',$urun->slug)); ?>">
                                    <img src="<?php echo e($urun->detay->urun_resmi!=null ? asset('/uploads/urunler/'.$urun->detay->urun_resmi) : 'http://via.placeholder.com/400x400?text=UrunResmi'); ?>" class="img-responsive" style="min-width: 100%;max-width: 100%">
                                </a>
                                <p><a href="<?php echo e(route('urun',$urun->slug)); ?>"><?php echo e($urun->urun_adi); ?></a></p>
                                <p class="price"><?php echo e($urun->fiyati); ?> ₺</p>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="products">
            <div class="panel panel-theme">
                <div class="panel-heading">İndirimli Ürünler</div>
                <div class="panel-body">
                    <div class="row">
                        <?php $__currentLoopData = $urunler_indirimlisi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $urun): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-3 product">
                                <a href="<?php echo e(route('urun',$urun->slug)); ?>">
                                    <img src="<?php echo e($urun->detay->urun_resmi!=null ? asset('/uploads/urunler/'.$urun->detay->urun_resmi) : 'http://via.placeholder.com/400x400?text=UrunResmi'); ?>" class="img-responsive" style="min-width: 100%;max-width: 100%">
                                </a>
                                <p><a href="<?php echo e(route('urun',$urun->slug)); ?>"><?php echo e($urun->urun_adi); ?></a></p>
                                <p class="price"><?php echo e($urun->fiyati); ?> ₺</p>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Courses\laravelecommerce\Project\resources\views/anasayfa.blade.php ENDPATH**/ ?>