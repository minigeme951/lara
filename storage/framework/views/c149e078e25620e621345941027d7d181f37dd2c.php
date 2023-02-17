

<?php $__env->startSection('content'); ?>
<?php $__currentLoopData = $prod; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $obprod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<h2><?php echo e($obprod->name); ?></h2>
<img src="<?php echo e($obprod->img); ?>" alt="">
<h4>цена:<?php echo e($obprod->price); ?>руб</h4>
<h4>стрнана изготовитель:<?php echo e($obprod->country); ?></h4>
<h4>год производства:<?php echo e($obprod->year); ?></h4>
<h4>модель:<?php echo e($obprod->model); ?></h4>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/snykbsph/gfbniet-m1/resources/views/oneprod.blade.php ENDPATH**/ ?>