<?php $__env->startSection('content'); ?>
    <a href="/posts" class="btn btn-light">Вернуться назад</a>
    <div class="row">
        <div class="col-md-12">
            <img style="width: 70%" src="/storage/img/<?php echo e($post->img); ?>">
        </div>
    </div>
    </br>
    </br>
   <h2><?php echo e($post->title); ?></h2>
   <h5><?php echo e($post->desc); ?></h5>
    <small>Дата создания <?php echo e($post->created_at); ?></small>
    </br>
    </br>
    </br>
    <?php if(!Auth::guest()): ?>
        <?php if(Auth::user()->id==$post->user_id): ?>
            <a href="/posts/<?php echo e($post->id); ?>/edit" class="btn btn-info">Редактировать</a>
            </br>
            </br>
            <?php echo Form::open(['action'=>['PostController@destroy',$post->id],"method"=>'POST',"class"=>'pull-right']); ?>

            <?php echo e(Form::hidden("_method",'DELETE')); ?>

            <?php echo e(Form::submit('Удалить',['class'=>'btn btn-danger'])); ?>

            <?php echo Form::close(); ?>

        <?php endif; ?>
    <?php endif; ?>
            </br>
            </br>
            </br>

            </br>

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <?php $__currentLoopData = $post->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="comment">
                            <h5>Имя: <?php echo e($comment->firstName); ?></h5>
                            <h6>Фамилия: <?php echo e($comment->lastName); ?></h6>
                            <p style="font-size: 10px">Дата создания: <?php echo e($comment->created_at); ?></p>
                            <p>Комментарий: <?php echo e($comment->comment); ?></p>
                            <a  href="<?php echo e(route('comments.edit',$comment->id)); ?>" class="btn btn-primary">Редактировать</a>
                            </br>
                            </br>
                            <?php echo Form::open(['action'=>['CommentController@destroy',$comment->id],"method"=>'POST',"class"=>'pull-right']); ?>

                            <?php echo e(Form::hidden("_method",'DELETE')); ?>

                            <?php echo e(Form::submit('Удалить',['class'=>'btn btn-danger'])); ?>

                            <?php echo Form::close(); ?>

                            </br>
                            </br>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <h3 style="margin-left: 0.5%">Добавить комментарий</h3>
            <div class="row">

        <div style="margin-left: 2%" id="comment-form" >
            <?php echo e(Form::open(['route'=>['comments.store',$post->id],"method"=>'POST'])); ?>

                <div class="form-group">
                    <?php echo e(Form::label('firstName',"Имя")); ?>

                    <?php echo e(Form::text('firstName',null,['class'=>'form-control'])); ?>

                </div>

                <div class="form-group">
                    <?php echo e(Form::label('lastName',"Фамилия")); ?>

                    <?php echo e(Form::text('lastName',null,['class'=>'form-control'])); ?>

                </div>
                <div class="form-group">
                    <?php echo e(Form::label('comment',"Комментарий")); ?>

                    <?php echo e(Form::textarea('comment',null,['class'=>'form-control'])); ?>

                </div>
            <?php echo e(Form::submit('Добавить',['class'=>'btn btn-primary'])); ?>

            <?php echo e(Form::close()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Open\OpenServer\domains\blog\resources\views/posts/show.blade.php ENDPATH**/ ?>