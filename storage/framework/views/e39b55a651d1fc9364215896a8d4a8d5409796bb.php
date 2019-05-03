<?php $__env->startSection('title', 'Edit User'); ?>
<?php $__env->startSection('content'); ?>
	<h1>Edit a User</h1>
	<?php if(session('status')): ?>
		<p style="color: green"><?php echo e(session('status')); ?></p>
	<?php endif; ?>
	<ul>
		<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<li style="color: red"><?php echo e($error); ?></li>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</ul>
	<form method="post">
		<?php echo csrf_field(); ?>

		<input type="text" name="name" id="name" placeholder="Name" value="<?php echo e($user->name); ?>">
		<input type="text" name="email" id="email" placeholder="Email" value="<?php echo e($user->email); ?>">
		<select id="role" name="role[]" multiple>
            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo $role->name; ?>"  <?php if(in_array($role->name, $selectedRoles)): ?>
                selected="selected" <?php endif; ?> ><?php echo $role->name; ?>

                </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <input type="password" name="password" id="password" placeholder="Password">
        <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password">

        <button type="submit">Submit</button>
	</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>