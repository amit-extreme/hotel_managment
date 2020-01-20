<?php $__env->startSection('content'); ?>
    <h3 class="page-title"><?php echo app('translator')->getFromJson('quickadmin.rooms.title'); ?></h3>
    <?php echo Form::open(['method' => 'POST', 'route' => ['admin.rooms.store']]); ?>


    <div class="panel panel-default">
        <div class="panel-heading">
            <?php echo app('translator')->getFromJson('quickadmin.qa_create'); ?>
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('room_number', trans('quickadmin.rooms.fields.room-number').'*', ['class' => 'control-label']); ?>

                    <?php echo Form::text('room_number', old('room_number'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('room_number')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('room_number')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('category_id', trans('quickadmin.rooms.fields.category').'', ['class' => 'control-label']); ?>

                    <?php echo Form::select('category_id', $categories, old('category_id'), ['class' => 'form-control select2']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('category_id')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('category_id')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('floor', trans('quickadmin.rooms.fields.floor').'*', ['class' => 'control-label']); ?>

                    <?php echo Form::number('floor', old('floor'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('floor')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('floor')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('description', trans('quickadmin.rooms.fields.description').'*', ['class' => 'control-label']); ?>

                    <?php echo Form::textarea('description', old('description'), ['class' => 'form-control ', 'placeholder' => '', 'required' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('description')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('description')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            
        </div>
    </div>

    <?php echo Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>