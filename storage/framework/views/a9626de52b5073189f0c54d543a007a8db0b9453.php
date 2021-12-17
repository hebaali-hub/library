<?php $__env->startSection('title'); ?>
abook<?php echo e($cats->name); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
<h1><?php echo e($cats->id); ?> </h1>

<h3> <?php echo e($cats->name); ?> </h3>

<br>
<ul>
    <?php $__currentLoopData = $cats->book; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li><p> <?php echo e($book->title); ?></p></li>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<a class="btn btn-success mt-5" href="<?php echo e(route('categories.index')); ?>">back</a>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\library\resources\views/categories/show.blade.php ENDPATH**/ ?>