<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php $__env->startSection('conteudo'); ?>
<h1>Calcular IMC</h1>

   <ul class="list-group">
       <li class="list-group-item">
        <?php if($imc_formatado >=18.6 && $imc_formatado<=24.9): ?>
            <div class="bg-success p-2 text-white"><?php echo e($resposta); ?></div>
        <?php else: ?>
            <div class="bg-danger p-2 text-white"><?php echo e($resposta); ?></div>
        <?php endif; ?>



       </li>
   </ul>

   <?php $__env->stopSection(); ?>
</body>
</html>

<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\bruno\Documents\clinica\resources\views/imc.blade.php ENDPATH**/ ?>