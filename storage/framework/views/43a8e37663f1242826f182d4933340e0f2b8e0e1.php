<!DOCTYPE html>
<html lang="zxx" class="no-js">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title><?php echo $__env->yieldContent('title', 'Education'); ?></title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet" />
    <meta charset="UTF-8" />
    
    <?php echo $__env->make('frontend.layout._share.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>

<?php echo $__env->make('frontend.layout._share.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<?php echo $__env->yieldContent('banner'); ?>


<?php echo $__env->yieldContent('content'); ?>



<?php echo $__env->make('frontend.layout._share.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php echo $__env->make('frontend.layout._share.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\du-an-tot-nghiep\du-an-tot-nghiep\resources\views/frontend/layout/main.blade.php ENDPATH**/ ?>