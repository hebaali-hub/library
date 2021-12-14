<?php $__env->startSection('title'); ?>
abook<?php echo e($book->title); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
<h1><?php echo e($book->id); ?> </h1>

<h3> <?php echo e($book->title); ?> </h3>
<img src='<?php echo e(asset("uploads/books/$book->img")); ?>' alt="">
<p> <?php echo e($book->desc); ?> </p>
<p class="alert bg-danger text-white">category:</p>
<ul>
    <?php $__currentLoopData = $book->category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li><p> <?php echo e($cat->name); ?></p></li>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>


<br>
<a class="btn btn-primary" href="<?php echo e(route('books.show',$book->id)); ?>">show</a>
<a class="btn btn-secondary" href="<?php echo e(route('books.updatefm',$book->id)); ?>">edit</a>
<a class="btn btn-danger" href="<?php echo e(route('books.delete',$book->id)); ?>">delete</a>
<br>



<a class="btn btn-success mt-5" href="<?php echo e(route('books.index')); ?>">back</a>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\library\resources\views/books/show.blade.php ENDPATH**/ ?>