<?php $__env->startSection('title'); ?>
form add book
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('inc.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<form method="POST" action="<?php echo e(route('notes.store')); ?>">


<?php echo csrf_field(); ?>


 <div class="mb-3">

    <textarea class="form-control" name="content"></textarea>

  </div>
  <button type="submit" class="btn btn-primary">add note</button>

</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\library\resources\views/notes/create.blade.php ENDPATH**/ ?>