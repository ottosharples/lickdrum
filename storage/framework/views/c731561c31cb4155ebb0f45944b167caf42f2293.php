<?php $__env->startSection('title', 'Create a Role'); ?>
<?php $__env->startSection('content'); ?>
	<h1>Create a Role<h1>
	<?php if(session('status')): ?>
		<p style="color: green"><?php echo e(session('status')); ?></p>
	<?php endif; ?>
	<ul>
		<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<li style="color: red"><?php echo e($error); ?></li>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</ul>
	<form method='post'>
		<?php echo e(csrf_field()); ?>

		<input type="text" name="name" id="name" placeholder="Name">
		<button type="submit">Submit</button>
	</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>