<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title'); ?></title>
<link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.css')); ?>">
</head>
<body>
  <div class="container pt-5">
<?php echo $__env->yieldContent('content'); ?>
</div>
<script src="<?php echo e(asset('js/jquery.js')); ?>"></script>
<script src="<?php echo e(asset('js/bootstrap.bundle.js')); ?>"></script>

</body>
</html>

<?php /**PATH C:\xampp\htdocs\library\resources\views/layout.blade.php ENDPATH**/ ?>