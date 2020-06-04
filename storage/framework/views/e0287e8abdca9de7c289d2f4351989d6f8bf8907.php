<?php $__env->startSection('content'); ?>
    <?php if(count($posts)>0): ?>
        <div class="card">
            <ul class="list-group list-group-flush">
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="row">
                <div class="col-md-4">
                    <img style="width:100%" src="/storage/img/<?php echo e($post->img); ?>">
                </div>
                <div class="col-md-8">
                    <h4><a href="/posts/<?php echo e($post->id); ?>"><?php echo e($post->title); ?></a></h4>
                    <small>Дата создания <?php echo e($post->created_at); ?></small>
                </div>
            </div>


        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php else: ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Open\OpenServer\domains\blog\resources\views/posts/index.blade.php ENDPATH**/ ?>