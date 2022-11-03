<?php $__env->startSection('title','Home'); ?>

<?php $__env->startSection('content'); ?>
    <center><h1>Halaman Home</h1></center>

    <?php if($name == 'admin'): ?>
        <p>hello,<?php echo e($name); ?></p>
    <?php elseif($name == 'user'): ?>
        <p>hello,<?php echo e($name); ?></p>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Michelle William\Downloads\WebProg1\resources\views/home.blade.php ENDPATH**/ ?>