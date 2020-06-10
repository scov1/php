<?php $__env->startSection('content'); ?>
<div class="container d-flex align-items-center mb-3">
    <a href="<?php echo e(route('cars.create')); ?>" class=" ml-auto btn btn-success">
        Добавить машину
    </a>
</div>

<?php $__empty_1 = true; $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

    <?php if($loop->first): ?>
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th scope="col">Марка</th>
                <th scope="col">Модель</th>
                <th scope="col">Год выпуска</th>
                <th scope="col">Цвет</th>
                <th scope="col"></th>

            </tr>
            </thead>
            <tbody>
            <?php endif; ?>
            <tr>
                <td class="p-2 text-center"><?php echo e($car->id); ?></td>
                <td class="pd-0">
                    <a href="<?php echo e(route('cars.show', $car)); ?>" class="d-block p-2 w-100">
                        <?php echo e($car->brand); ?>

                    </a>
                </td>
                <td class="p-2"><?php echo e($car->model); ?></td>
                <td class="p-2"><?php echo e($car->year); ?></td>
                <td class="p-2"><?php echo e($car->color); ?></td>
                <td>
                    <form class="ml-auto" action="<?php echo e(route('cars.destroy', $car)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>

                        <div class="btn-group">
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $car)): ?>
                                <a class="btn btn-info" href="<?php echo e(route('cars.edit', $car)); ?>">Редактировать</a>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete', $car)): ?>
                                <button class="btn btn-danger" style="margin-left: 10%">Удалить</button>
                            <?php endif; ?>
                        </div>
                    </form>
                </td>
            </tr>

            <?php if($loop->last): ?>
            </tbody>
        </table>
    <?php endif; ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <div class="alert alert-secondary">
        У Вас пока нет ни одной карты животного :(
    </div>

<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Open\OpenServer\domains\laravel\resources\views/index.blade.php ENDPATH**/ ?>