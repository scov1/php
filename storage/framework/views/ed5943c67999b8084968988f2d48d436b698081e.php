<?php $__env->startSection('content'); ?>
    <h2>Редактировать тег</h2>
    <?php echo Form::open(['action' => ['TagController@update',$tag->id],'method'=>'PUT']); ?>

    <div class="form-group">
        <?php echo e(Form::label('tagName','Название тега:')); ?>

        <?php echo e(Form::text('tagName',$tag->tagName,['class'=>'form-control'])); ?>

    </div>


    <?php echo e(form::hidden("_method",'PUT')); ?>

    <?php echo e(Form::submit('Редактировать',['class'=>'btn btn-primary'])); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Open\OpenServer\domains\blog\resources\views/tags/edit.blade.php ENDPATH**/ ?>