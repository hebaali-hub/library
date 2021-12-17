<?php $__env->startSection('title'); ?>
form add book
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('inc.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<form method="POST" action="<?php echo e(url('/categories/update',$cat->id)); ?>">
<?php echo csrf_field(); ?>

  <div class="mb-3">

    <input type="text" class="form-control" placeholder="category name" name="name" value="<?php echo e(old('name') ?? $cat->name); ?>">

  </div>

  <button type="submit" class="btn btn-primary">edit category</button>

</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\library\resources\views/categories/edit.blade.php ENDPATH**/ ?>