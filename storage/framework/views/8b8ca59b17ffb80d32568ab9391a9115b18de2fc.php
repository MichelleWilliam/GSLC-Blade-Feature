<?php $__env->startSection('title','login'); ?>

<?php $__env->startSection('content'); ?>
    <form action="/login" method="post">
        <?php echo csrf_field(); ?>
        <input type="text" name="name" id=""> <br>
        <input type="password" name="password" id=""> <br>
        <input type="submit" value="submit">
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Karvin\Binus\belajar with cinhe\Laravel\Laravel\contekIndah\resources\views/login.blade.php ENDPATH**/ ?>