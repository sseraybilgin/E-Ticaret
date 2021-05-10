<!DOCTYPE html>
<html lang="<?php echo e(config('app.locale')); ?>">

<head>
    <meta charset="UTF-8">
    <title><?php echo $__env->yieldContent('title',config('app.name')); ?></title>
    <?php echo $__env->make('layouts.partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('head'); ?>
</head>
<body id="commerce" style="background-color:#efe6e5; ">
<?php echo $__env->make('layouts.partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('content'); ?>
<?php echo $__env->make('layouts.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="/js/app.js"></script>
<?php echo $__env->yieldContent('footer'); ?>
</body>
</html>
<?php /**PATH C:\Courses\laravelecommerce\Project\resources\views/layouts/master.blade.php ENDPATH**/ ?>