
<?php if($errors->any()): ?>
<div class="alert alert-danger">
<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<p class="text-black"><?php echo e($error); ?></p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\library\resources\views/inc/errors.blade.php ENDPATH**/ ?>