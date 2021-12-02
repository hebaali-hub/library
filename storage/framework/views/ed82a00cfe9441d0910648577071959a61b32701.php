<?php $__env->startSection('title'); ?>
all list
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

  <h1>All Books</h1>
<?php $__currentLoopData = $book_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<hr>
<h3> <a href="<?php echo e(url('/books/show',$book->id)); ?>"><?php echo e($book->title); ?></a></h3>
<img src='<?php echo e(asset("uploads/books/$book->img")); ?>' alt="">

<p><?php echo e($book->desc); ?></p>
<a class="btn btn-primary" href="<?php echo e(route('books.show',$book->id)); ?>">show</a>
<a class="btn btn-secondary" href="<?php echo e(route('books.updatefm',$book->id)); ?>">edit</a>
<a class="btn btn-danger" href="<?php echo e(route('books.delete',$book->id)); ?>">delete</a>


<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<br>
<?php echo e($book_list->render()); ?>

<a class="btn btn-success" href="<?php echo e(route('books.create')); ?>">create</a>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\library\resources\views/books/index.blade.php ENDPATH**/ ?>