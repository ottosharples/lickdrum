<?php $__env->startSection('title', 'sign up'); ?>
<?php $__env->startSection('content'); ?>

	<ul>
		<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<li style="color: red"><?php echo e($error); ?></li>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</ul>

	

	<form method="post">
		<?php echo e(csrf_field()); ?>

		<input type="text" name="email" id="email" placeholder="Email" value="<?php echo e(old('email')); ?>">
		<input type="password" name="password" id="name" placeholder="Password">

		<button type="submit">Submit</button>
	</form>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/login.css')); ?>">
<?php $__env->stopPush(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>