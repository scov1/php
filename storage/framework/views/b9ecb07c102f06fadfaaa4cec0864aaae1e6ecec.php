<?php $__env->startSection('content'); ?>
    <h2>Редактировать пост</h2>
    <?php echo Form::open(['action' => ['PostController@update',$post->id],'method'=>'POST','enctype'=>'multipart/form-data']); ?>

    <div class="form-group">
        <?php echo e(Form::label('title','Заголовок:')); ?>

        <?php echo e(Form::text('title',$post->title,['class'=>'form-control'])); ?>

    </div>
    <div class="form-group">
        <?php echo e(Form::label('desc','Описание:')); ?>

        <?php echo e(Form::textarea('desc',$post->desc,['class'=>'form-control'])); ?>

    </div>
    <div class="form-group">
        <?php echo e(Form::file('img')); ?>

    </div>
    <?php echo e(form::hidden("_method",'PUT')); ?>

    <?php echo e(Form::submit('Редактировать',['class'=>'btn btn-primary'])); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Open\OpenServer\domains\blog\resources\views/posts/edit.blade.php ENDPATH**/ ?>