<?php $__env->startSection('title', 'Lickdrum - Beats/Licks/Fills'); ?>
<?php $__env->startSection('content'); ?>
<h1 id="beats">Beats</h1>
        <ul>
            <?php if(empty($beats)): ?>
                <p style="color: #31393C;">No beats found</p>
            <?php else: ?>
                <?php $__currentLoopData = $beats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $beat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><a href="<?php echo e(action('BeatsController@show', $beat->slug)); ?>"> <?php echo $beat->title; ?></a></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </ul>
        <h1 id="licks">Licks</h1>
        <ul>
            <?php if(empty($licks)): ?>
                <p style="color: #31393C;">No licks found</p>
            <?php else: ?>
                <?php $__currentLoopData = $licks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lick): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><a href="<?php echo e(action('BeatsController@show', $lick->slug)); ?>"> <?php echo $lick->title; ?></a></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </ul>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>