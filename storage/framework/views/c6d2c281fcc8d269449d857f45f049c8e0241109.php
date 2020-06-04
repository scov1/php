<?php $__env->startSection('content'); ?>
    <h2>Редактировать комментарий</h2>
    <?php echo Form::open(['action' => ['CommentController@update',$comment->id],'method'=>'PUT']); ?>

    <div class="form-group">
        <?php echo e(Form::label('firstName','Имя:')); ?>

        <?php echo e(Form::text('firstName',$comment->firstName,['class'=>'form-control'])); ?>

    </div>
    <div class="form-group">
        <?php echo e(Form::label('lastName','Фамилия:')); ?>

        <?php echo e(Form::text('lastName',$comment->lastName,['class'=>'form-control'])); ?>

    </div>

    <div class="form-group">
        <?php echo e(Form::label('comment','Комментарий:')); ?>

        <?php echo e(Form::textarea('comment',$comment->comment,['class'=>'form-control'])); ?>

    </div>

    <?php echo e(form::hidden("_method",'PUT')); ?>

    <?php echo e(Form::submit('Редактировать',['class'=>'btn btn-primary'])); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Open\OpenServer\domains\blog\resources\views/comments/edit.blade.php ENDPATH**/ ?>