<?php $__env->startSection('title', 'All Users'); ?>
<?php $__env->startSection('content'); ?>
    <h1>Users</h1>
	<?php if(session('status')): ?>
		<p style="color: green"><?php echo e(session('status')); ?></p>
	<?php endif; ?>
	<?php if($users->isEmpty()): ?>
		<p>There is no user</p>
	<?php endif; ?>
	<table>
		 <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Joined at</th>

            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo $user->id; ?></td>
                    <td>
                        <a href="<?php echo action('Admin\UsersController@edit', $user->id); ?>"><?php echo $user->name; ?> </a>
                    </td>
                    <td><?php echo $user->email; ?></td>
                    <td><?php echo $user->created_at; ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>