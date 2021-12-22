<?php $__env->startSection('title'); ?>
all list
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<?php if (isset($component)) { $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Alert::class, ['msg' => 'hello world','type' => 'danger']); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975)): ?>
<?php $component = $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975; ?>
<?php unset($__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975); ?>
<?php endif; ?>
<?php if (isset($component)) { $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Alert::class, ['msg' => 'hello world','type' => 'success']); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975)): ?>
<?php $component = $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975; ?>
<?php unset($__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975); ?>
<?php endif; ?>
<?php $x="xxxxx"?>
<?php if (isset($component)) { $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Alert::class, ['msg' => $x,'type' => 'info']); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975)): ?>
<?php $component = $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975; ?>
<?php unset($__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975); ?>
<?php endif; ?>
 <input type="text" id="keyword">
  <h1>All Books</h1>
  <?php if(auth()->guard()->check()): ?>
 your Notes
 

  <?php $__currentLoopData = Auth::user()->notes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $note): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p> <?php echo e($note->content); ?></p>

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      
  <?php endif; ?>
  
<div id="allbooks">
  <?php $__currentLoopData = $book_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

 
    <h3><?php echo e($book->title); ?></h3>



<p><?php echo e($book->desc); ?></p>



<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<br>



<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script>
    $('#keyword').keyup(function(){
        let keyword=$(this).val();
        // console.log(keyword);
        let url="<?php echo e(route('books.search')); ?>"+"?keyword="+keyword;
        // console.log(url);
$.ajax(
{
    type:"GET",
    url:url,
    contentType: false,
    processData: false,
    success: function (data) {   // success callback function
        // console.log(data);
        $('#allbooks').empty();
        for(book of data){
        $('#allbooks').text();
          $('#allbooks').append(`<h3>${book.title}</h3><p>${book.desc}</p>`);
        }

    },

});
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\library\resources\views/books/index.blade.php ENDPATH**/ ?>