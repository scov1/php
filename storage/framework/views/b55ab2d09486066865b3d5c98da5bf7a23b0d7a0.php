<?php if($errors->any()): ?>
    <ul style="color:red;">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php endif; ?>

<link href="<?php echo e(asset('/css/styles.css')); ?>" rel="stylesheet">


<form  class="form-group" action="<?php echo e(route('cars.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <input type="text" name="brand" placeholder="Марка">
    <input type="text" name="model" placeholder="Модель">
    <input type="number" name="year" placeholder="Год выпуска">
    <input type="text" name="color" placeholder="Цвет">
    <button>Добавить машину</button>
</form>
<ul>
    <?php $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
            <?php echo e($car->brand); ?>,<?php echo e($car->model); ?>,<?php echo e($car->year); ?>,<?php echo e($car->color); ?>

        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>


<?php /**PATH D:\Open\OpenServer\domains\laravel\resources\views/index.blade.php ENDPATH**/ ?>