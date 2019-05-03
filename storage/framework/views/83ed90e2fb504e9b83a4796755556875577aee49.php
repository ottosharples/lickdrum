<?php $__env->startSection('title', 'Roles'); ?>
<?php $__env->startSection('content'); ?>
    <?php if(session('status')): ?>
        <p style="color: green">
            <?php echo e(session('status')); ?>

        </p>
    <?php endif; ?>
    <?php if($roles->isEmpty()): ?>
        <p> There is no role.</p>
    <?php else: ?>
        <table class="table">
            <thead>
            <tr>
                <th>Name</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo $role->name; ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>