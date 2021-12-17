<?php $__env->startSection('title'); ?>
form add category
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('inc.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<form method="POST" action="<?php echo e(url('/categories/store')); ?>" >


<?php echo csrf_field(); ?>
  <div class="mb-3">

    <input type="text" class="form-control" placeholder="category name" name="name" value=<?php echo e(old('name')); ?>>

  </div>

  <button type="submit" class="btn btn-primary">add category</button>

</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\library\resources\views/categories/create.blade.php ENDPATH**/ ?>