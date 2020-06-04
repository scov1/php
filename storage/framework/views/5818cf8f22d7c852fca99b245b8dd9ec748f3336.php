<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Посты</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <a href="/posts/create" class="btn btn-primary">Создай свой первый пост</a>
                        </br>
                        </br>
                    <?php if(count($posts)>0): ?>
                    <table class="table table stripped">
                        <tr>
                            <th>Заголовок</th>
                            <th></th>
                            <th></th>
                        </tr>
                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th><?php echo e($post->title); ?></th>
                            <th><a href="/posts/<?php echo e($post->id); ?>/edit" class="btn btn-secondary">Редактировать</a></th>
                            <th></th>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                        <?php else: ?>

                    <h5>Ничего пока нет</h5>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Open\OpenServer\domains\blog\resources\views/home.blade.php ENDPATH**/ ?>