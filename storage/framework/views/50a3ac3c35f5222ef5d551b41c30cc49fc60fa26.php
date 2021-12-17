<?php $__env->startSection('title'); ?>
all list
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

  <h1>All Books</h1>
<?php $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<h3> <a href="<?php echo e(url('/categories/show',$cat->id)); ?>"><?php echo e($cat->name); ?></a></h3>


<p><?php echo e($cat->name); ?></p>
<a class="btn btn-primary" href="<?php echo e(route('categories.show',$cat->id)); ?>">show</a>
<a class="btn btn-secondary" href="<?php echo e(route('categories.updatefm',$cat->id)); ?>">edit</a>
<a class="btn btn-danger" href="<?php echo e(route('categories.delete',$cat->id)); ?>">delete</a>
<h3> <a href="<?php echo e(route('categories.show',$cat->id)); ?>"><?php echo e($cat->name); ?></a></h3>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<br>

 <a class="btn btn-success" href="<?php echo e(route('categories.create')); ?>">create</a> 

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\library\resources\views/categories/index.blade.php ENDPATH**/ ?>