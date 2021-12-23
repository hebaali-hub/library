<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        
           <li class="nav-item">
          <a class="nav-link" href="<?php echo e(route('books.index')); ?>"><?php echo app('translator')->get('site.books'); ?></a>
        </li>
          

<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
   <?php echo app('translator')->get('site.cats'); ?>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
<?php $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <li><a class="dropdown-item" href="#"><?php echo e($cat->name); ?></a></li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </ul>
</div>
  
  <div class="dropdown">
   <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
  choose
  </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">

  <li><a class="dropdown-item" href="<?php echo e(route('lang.ar')); ?>">ar</a></li>
  <li><a class="dropdown-item" href="<?php echo e(route('lang.en')); ?>">en</a></li>

  </ul>
</div>
          <li class="nav-item">
          <a class="nav-link" href="<?php echo e(route('auth.logout')); ?>"><?php echo app('translator')->get('site.logout'); ?></a>
        </li>
        

        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(route('auth.reg')); ?>">Register</a>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="<?php echo e(route('auth.login')); ?>">Login</a>
        </li>




      </ul>

    </div>
  </div>
</nav>

<?php /**PATH C:\xampp\htdocs\library\resources\views/components/navbar.blade.php ENDPATH**/ ?>