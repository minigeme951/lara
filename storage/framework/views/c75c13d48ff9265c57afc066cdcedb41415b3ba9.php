

<?php $__env->startSection('content'); ?>
<div class="sort">
    <a href="<?php echo e(url('/catalog/sort')); ?>/name/asc">Имя по убыванию</a>
    <a href="<?php echo e(url('/catalog/sort')); ?>/name/desc">Имя по возрастанию</a>
    <a href="<?php echo e(url('/catalog/sort')); ?>/id/asc">От старых товаров к новым</a>
    <a href="<?php echo e(url('/catalog/sort')); ?>/id/desc">От новых к старым</a> 
</div>
<div class="filter">
    <?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $obcat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <a href="<?php echo e(url('/catalog/filter')); ?>/<?php echo e($obcat->id); ?>"><?php echo e($obcat->name); ?></a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<div class="reset">
    <a href="<?php echo e(url('/catalog')); ?>">сброс фильторов</a>
</div>
<div class="items">
    <?php $__currentLoopData = $prod; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $obprod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <a href="<?php echo e(url('/catalog/one')); ?>/<?php echo e($obprod->id); ?>">
    <div class="item">
        <img class="w-50" src="<?php echo e($obprod->img); ?>" alt="">
        <h4><?php echo e($obprod->name); ?></h4>
        <p><?php echo e($obprod->price); ?></p>
    </div>
    </a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/snykbsph/gfbniet-m1/resources/views/catalog.blade.php ENDPATH**/ ?>