<nav class="navbar navbar-default">
    <div class="row-md-12">
        <div style="float: right;margin-right: 25px">
        <a href="http://eticaret.local/yonetim/oturumac" target="_blank"><i class="fa fa-globe"></i>Yönetici</a>

        </div>
    </div>
    <hr style="width: 100%;">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo e(route('anasayfa')); ?>">
                <img src="/uploads/logo.jpg" style="width: 50%;">
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <form class="navbar-form navbar-left" action="<?php echo e(route('urun_ara')); ?>" method="post">
                
                <?php echo e(csrf_field()); ?>

                <div class="input-group">
                    <input type="text" name="aranan" id="navbar-search" class="form-control" placeholder="Ara" value="<?php echo e(old('aranan')); ?>">
                    <span class="input-group-btn">
                            <button type="submit" class="btn btn-default">
                                <i class="fa fa-search"></i>
                            </button>
                    </span>
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo e(route('sepet')); ?>"><i class="fa fa-shopping-cart"></i> Sepet <span class="badge badge-theme"><?php echo e(\Gloudemans\Shoppingcart\Facades\Cart::count()); ?></span></a></li>
                
                <?php if(auth()->guard()->guest()): ?>
                <li><a href="<?php echo e(route('kullanici.oturumac')); ?>">Oturum Aç</a></li>
                <li><a href="<?php echo e(route('kullanici.kaydol')); ?>">Kaydol</a></li>
                <?php endif; ?>

                
                <?php if(auth()->guard()->check()): ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <?php echo e(Auth::user()->adsoyad); ?> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo e(route('siparisler')); ?>">Siparişlerim</a></li>
                        <li role="separator" class="divider"></li>
                        <li>
                            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Çıkış</a>

                            
                            <form id="logout-form" action="<?php echo e(route('kullanici.oturumukapat')); ?>" method="post" style="display: none;">
                                <?php echo e(csrf_field()); ?>

                            </form>
                        </li>
                    </ul>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH C:\Courses\laravelecommerce\Project\resources\views/layouts/partials/navbar.blade.php ENDPATH**/ ?>