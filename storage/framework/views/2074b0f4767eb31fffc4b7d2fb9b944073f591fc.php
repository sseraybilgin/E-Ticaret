<?php $__env->startSection('title','Sepet'); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="bg-content">
            <h2>Sepet</h2>
            <?php echo $__env->make('layouts.partials.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php if(count(\Gloudemans\Shoppingcart\Facades\Cart::content())>0): ?>
            <table class="table table-bordererd table-hover">
                <tr>
                    <th colspan="2">Ürün</th>
                    <th>Adet Fiyatı</th>
                    <th>Adet</th>
                    <th>Tutar</th>
                </tr>
                <?php $__currentLoopData = Cart::content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $urunCartItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td style="width: 120px;">
                            <a href="<?php echo e(route('urun',$urunCartItem->options->get('slug'))); ?>">
                                <img src="http://via.placeholder.com/120x100?text=UrunResmi">
                                
                            </a>
                        </td>
                        <td>
                            <a href="<?php echo e(route('urun',$urunCartItem->options->get('slug'))); ?>"><?php echo e($urunCartItem->name); ?></a>

                            <form action="<?php echo e(route('sepet.kaldir', $urunCartItem->rowId)); ?>" method="post">
                                <?php echo e(csrf_field()); ?>

                                <?php echo e(method_field('DELETE')); ?>

                                <input type="submit" class="btn btn-danger btn-xs" value="Sepetten Kaldır">
                            </form>
                        </td>
                        <td>
                            <?php echo e($urunCartItem->price); ?> ₺
                        </td>
                        <td>
                            
                            <a href="#" class="btn btn-xs btn-default urun-adet-azalt" data-id="<?php echo e($urunCartItem->rowId); ?>" data-adet="<?php echo e($urunCartItem->qty-1); ?>">-</a>
                            <span style="padding: 10px 20px"><?php echo e($urunCartItem->qty); ?></span>
                            <a href="#" class="btn btn-xs btn-default urun-adet-artir" data-id="<?php echo e($urunCartItem->rowId); ?>" data-adet="<?php echo e($urunCartItem->qty+1); ?>">+</a>
                        </td>
                        <td class="text-right">
                            
                            <?php echo e($urunCartItem->subtotal); ?> ₺
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th colspan="4" class="text-right">Alt Toplam</th>
                    <td class="text-right"><?php echo e(\Gloudemans\Shoppingcart\Facades\Cart::subtotal()); ?> ₺</td>
                </tr>
                <tr>
                    <th colspan="4" class="text-right">KDV</th>
                    <td class="text-right"><?php echo e(\Gloudemans\Shoppingcart\Facades\Cart::tax()); ?> ₺</td>
                </tr>
                <tr>
                    <th colspan="4" class="text-right">Genel Toplam</th>
                    <td class="text-right"><?php echo e(\Gloudemans\Shoppingcart\Facades\Cart::total()); ?> ₺</td>
                </tr>
            </table>
                <div>
                    <form action="<?php echo e(route('sepet.bosalt')); ?>" method="post">
                        <?php echo e(csrf_field()); ?>

                        <?php echo e(method_field('DELETE')); ?>

                        <input type="submit" class="btn btn-info pull-left" value="Sepeti Boşalt">
                    </form>
                    <a href="<?php echo e(route('odeme')); ?>" class="btn btn-success pull-right btn-lg">Ödeme Yap</a>
                </div>
            <?php else: ?>
                <div class="text-center">
                    <img style="padding-left:25px"  src="https://bi-eticaret.com/images/sepet-bos.png" class="img-fluid" alt="Boş Sepet">
                    <a href="<?php echo e(route('anasayfa')); ?>">
                        <button class="btn btn-theme">ALIŞVERİŞE BAŞLA</button>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
            <script>
                $(function (){
                    $('.urun-adet-artir, .urun-adet-azalt').on('click',function (){
                        var id= $(this).attr('data-id');
                        var adet=$(this).attr('data-adet');
                        $.ajax({
                            type:'PATCH',
                            url:'<?php echo e(url('sepet/guncelle')); ?>/'+id,
                            data:{adet:adet},
                            success:function (){
                                window.location.href='<?php echo e(route('sepet')); ?>';
                            }
                        });
                    });
                });
            </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Courses\laravelecommerce\Project\resources\views/sepet.blade.php ENDPATH**/ ?>