<?php $__env->startSection('title'); ?>
form add book
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('inc.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<form method="POST" action="<?php echo e(url('/books/update',$book->id)); ?>" enctype="multipart/form-data">
<?php echo csrf_field(); ?>
<img src='<?php echo e(asset("uploads/books/$book->img")); ?>' alt="">
  <div class="mb-3">

    <input type="text" class="form-control" placeholder="book name" name="title" value="<?php echo e(old('title') ?? $book->title); ?>">

  </div>
  <div class="mb-3">

    <textarea class="form-control" placeholder="Description" name="desc" row="3"><?php echo e(old('desc') ?? $book->desc); ?></textarea>
  </div>
 <div class="mb-3">

    <input type="file" class="form-control" name="img">

  </div>
  <button type="submit" class="btn btn-primary">edit book</button>

</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\library\resources\views/books/edit.blade.php ENDPATH**/ ?>