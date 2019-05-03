<?php $__env->startSection('title', 'All beats'); ?>
<?php $__env->startSection('content'); ?>

    <div class="container col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2> All beats </h2>
            </div>
            <?php if(session('status')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('status')); ?>

                </div>
            <?php endif; ?>
            <?php if($beats->isEmpty()): ?>
                <p> There is no beat.</p>
            <?php else: ?>
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Slug</th>
                        <th>Created At</th>
                        <th>Updated At</th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $beats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $beat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo $beat->id; ?></td>
                            <td>
                                <a href="<?php echo e(action('Admin\BeatsController@edit', $beat->id)); ?>"><?php echo $beat->title; ?> </a>
                            </td>
                            <td><?php echo $beat->slug; ?></td>
                            <td><?php echo $beat->created_at; ?></td>
                            <td><?php echo $beat->updated_at; ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            <?php endif; ?>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
<?php $__env->stopPush(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>