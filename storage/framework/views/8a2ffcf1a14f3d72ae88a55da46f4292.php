

<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/descHome.css')); ?>">
<main>
    <div class="section">
        <h1><?php echo app('translator')->get('texts.title'); ?></h1>
        <p class="descricao"><?php echo app('translator')->get('texts.desc'); ?></p>
    </div>

</main>    
<?php $__env->stopSection(); ?>    
    
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\gisel\Desktop\DS-Etec\3-MODULO\PW3\codeflix-site\resources\views/descricaoHome.blade.php ENDPATH**/ ?>