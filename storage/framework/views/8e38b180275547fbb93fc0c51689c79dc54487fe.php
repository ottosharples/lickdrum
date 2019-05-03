<?php $__env->startSection('title', 'Create New Beat'); ?>
<?php $__env->startSection('content'); ?>
<div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">

            <form class="form-horizontal" method="post" enctype="multipart/form-data">

                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <p class="alert alert-danger"><?php echo e($error); ?></p>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php if(session('status')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('status')); ?>

                    </div>
                <?php endif; ?>

                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                <fieldset>
                    <legend>Create a new beat</legend>
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Title</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="title" placeholder="Title" name="title" value="<?php echo e(old('title')); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="slug" class="col-lg-2 control-label">Video Slug</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="slug" placeholder="Slug" name="slug" value="<?php echo e(old('slug')); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pdf" class="col-lg-2 control-label">PDF</label>
                        <div class="col-lg-10">
                            <input type="file" class="form-control" id="pdf" name="pdf">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="img" class="col-lg-2 control-label">Image</label>
                        <div class="col-lg-10">
                            <input type="file" class="form-control" id="img" name="img">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tags" class="col-lg-2 control-label">Tags (comma seperated)</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" id="tags" name="tags" value="<?php echo e(old('tags')); ?>"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="setup" class="col-lg-2 control-label">Categories</label>

                        <div class="col-lg-10">
                            <select class="form-control" id="setup" name="setup">
                                <?php $__currentLoopData = $setups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $setup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo $setup->id; ?>">
                                        <?php echo $setup->name; ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button type="reset" class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('styles'); ?>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
	<link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
<?php $__env->stopPush(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>