<!DOCTYPE html>
<html lang="<?php echo e(config('app.locale')); ?>">
<head>
    <meta charset="UTF-8">
    <title><?php echo $__env->yieldContent('title', config('app.name') . " | Yönetim"); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="/css/admin.css">
    <?php echo $__env->yieldContent('head'); ?>
</head>

<body>
<?php echo $__env->make('yonetim.layouts.partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-3 col-lg-2 sidebar collapse" id="sidebar" style="background-color: #efe6e5">
            <?php echo $__env->make('yonetim.layouts.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-9 col-md-offset-3 col-lg-10 col-lg-offset-2 main">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>
</div>
<script src='https://code.jquery.com/jquery-3.2.1.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script src="/js/admin-app.js"></script>
<?php echo $__env->yieldContent('footer'); ?>
</body>
</html>
<?php /**PATH C:\Courses\laravelecommerce\Project\resources\views/yonetim/layouts/master.blade.php ENDPATH**/ ?>