<!DOCTYPE html>
<html lang="<?php echo e(config('app.locale')); ?>">

<head>
    <meta charset="UTF-8">
    <title>E-Ticaret Projesi  Yönetim</title>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="/css/login.css">
</head>

<body>
<div class="container">
    <form class="form-signin" action="<?php echo e(route('yonetim.oturumac')); ?>" method="post" style="background-color:#efe6e5; height: 200%">
        <?php echo e(csrf_field()); ?>

        <img src="/uploads/logo.jpg" class="logo" style="width: 50%;">

        <?php echo $__env->make('layouts.partials.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <label for="email" class="sr-only">Email</label>
        <input type="email" id="email" name="email" class="form-control" placeholder="Email" required autofocus>
        <label for="sifre" class="sr-only">Şifre</label>
        <input type="password" id="sifre" name="sifre" class="form-control" placeholder="Şifre" required>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="benihatirla" value="1" checked> Beni Hatırla
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Giriş Yap</button>
        <div class="links">
            <a href="<?php echo e(route('anasayfa')); ?>">&larr; Siteye Dön</a>
        </div>
    </form>
</div>
<script src='https://code.jquery.com/jquery-3.2.1.slim.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>

</body>

</html>
<?php /**PATH C:\Courses\laravelecommerce\Project\resources\views/yonetim/oturumac.blade.php ENDPATH**/ ?>