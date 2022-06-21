<?php if(session('status')): ?>
    <div class="alert alert-success" role="alert">
        <?php echo e(session('status')); ?>

    </div>
<?php endif; ?>

<?php if(session('passwords')): ?>
    <div class="alert alert-info" role="alert">
        <a href='<?php echo e(route('user.create.single', ['download' => 1])); ?>'>Юклаб олиш</a>
    </div>
<?php endif; ?>

<?php if(session('error')): ?>
    <div class="alert alert-danger" role="alert">
        <?php echo e(session('error')); ?>

    </div>
<?php endif; ?>

<?php if(count($errors) > 0): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
<?php /**PATH D:\OpenServer\domains\e-ijara\e-ijara-front\resources\views/common/messages.blade.php ENDPATH**/ ?>