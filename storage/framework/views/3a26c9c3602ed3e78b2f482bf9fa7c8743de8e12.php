<?php $__env->startSection('content'); ?>
    <a href="/posts" class="btn btn-light">Вернуться назад</a>
            <div class="row">
                <div class="col-md-7">
                    <table class="table table stripped">
                        <tr>
                            <th>Список тегов</th>
                            <th></th>
                            <th></th>
                        </tr>
                        <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th><a href="<?php echo e(route('tags.show',$tag->id)); ?>"><?php echo e($tag->tagName); ?></a></th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th>
                                    <div class="btn-group btn-group-sm">
                                        <a style="margin-right: 4%" class="btn btn-xs btn-info" href="<?php echo e(route('tags.edit',$tag->id)); ?>">Редактировать</a>
                                        <?php echo Form::open(['action'=>['TagController@destroy',$tag->id],"method"=>'POST',"class"=>'pull-right']); ?>

                                        <?php echo e(Form::hidden("_method",'DELETE')); ?>

                                        <?php echo e(Form::submit('Удалить',['class'=>'btn btn-xs btn-danger'])); ?>

                                        <?php echo Form::close(); ?>

                                    </div>
                                </th>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <h5>Создать тег</h5>
                        <?php echo Form::open(['action' => 'TagController@store','method'=>'POST']); ?>

                        <?php echo e(Form::label('tagName','Название тега:')); ?>

                        <?php echo e(Form::text('tagName',null,['class'=>'form-control'])); ?>

                    </div>

                    <?php echo e(Form::submit('Создать',['class'=>'btn btn-primary'])); ?>

                    <?php echo Form::close(); ?>


                </div>
            </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Open\OpenServer\domains\blog\resources\views/tags/index.blade.php ENDPATH**/ ?>