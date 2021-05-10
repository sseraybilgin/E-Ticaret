<?php if(session()->has('mesaj')): ?>
        <div class="alert alert-<?php echo e(session('mesaj_tur')); ?>">
            <?php echo e(session('mesaj')); ?>

        </div>
<?php endif; ?>
<?php /**PATH C:\Courses\laravelecommerce\Project\resources\views/layouts/partials/alert.blade.php ENDPATH**/ ?>