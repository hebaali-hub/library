<?php $__env->startSection('title'); ?>
register form
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('inc.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<form method="POST" action="<?php echo e(route('auth.handlereg')); ?>" >


<?php echo csrf_field(); ?>
  <div class="mb-3">

    <input type="text" class="form-control" placeholder="name" name="name">

  </div>
  <div class="mb-3">

    <input type="email" class="form-control" placeholder="email" name="email">
  </div>
 <div class="mb-3">
    <input type="password" class="form-control" placeholder="password" name="password">


  </div>
  <button type="submit" class="btn btn-primary">register</button>

</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\library\resources\views/auth/register.blade.php ENDPATH**/ ?>