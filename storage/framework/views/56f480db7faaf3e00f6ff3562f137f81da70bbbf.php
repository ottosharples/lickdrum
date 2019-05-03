<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title> <?php echo $__env->yieldContent('title'); ?> </title>

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/master.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/nav.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/footer.css')); ?>">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto+Slab" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php echo $__env->yieldPushContent('styles'); ?>

</head>
<body>
	<?php echo $__env->make('shared.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<div class="content">
    <div class="content-wrap">
    	<?php echo $__env->yieldContent('content'); ?>
    </div>
    </div>

   	<script src="<?php echo e(asset('js/nav.js')); ?>" type="application/javascript"></script>

   	<?php echo $__env->make('shared.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

   	<?php echo $__env->yieldPushContent('js'); ?>
   	<script type="text/javascript" href="<?php echo e(asset('js/nav.js')); ?>"></script>

</body>
</html>