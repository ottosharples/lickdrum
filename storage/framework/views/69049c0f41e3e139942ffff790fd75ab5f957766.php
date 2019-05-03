<?php $__env->startSection('title', $beat->title); ?>
<?php $__env->startSection('content'); ?>
        <h1><?php echo e($beat->title); ?></h1><a href="<?php echo e($pdf); ?>"><i class="fa fa-file-pdf-o"></i></a>
        <img src="<?php echo e($image); ?>" id="sheets"/>
        <div id="sample"><iframe width='500' height='294' src="https://www.youtube.com/embed/<?php echo $beat->video_slug; ?>?&theme=light&autohide=2&showinfo=0"frameborder="0"></iframe></div>
        <div id="tags">
            <ul>
                <h3>Tags:</h3>
                <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(action('TagsController@serve', $tag->name)); ?>"><li><?php echo e($tag->name); ?></li></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
        <?php echo $setup[0]->html; ?>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/beat.css')); ?>">
<?php $__env->stopPush(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>