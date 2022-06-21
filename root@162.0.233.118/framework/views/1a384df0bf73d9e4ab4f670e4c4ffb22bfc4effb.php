<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Meta -->
    <meta name="description"
          content="автоматизированная информационная система для осуществления процедур сбора, рассмотрения и согласования материалов по предоставлению земельных участков с уполномоченными органами и организациями">
    <meta name="author" content="AgroDigital">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('ijara/assets/img/favicon.ico')); ?>">
    <title>Вход в систему | E-ijara</title>
    <!-- vendor css -->
    <link href="<?php echo e(asset('ijara/lib/@fortawesome/css/all.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('ijara/lib/ionicons/css/ionicons.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('ijara/lib/prismjs/themes/prism-tomorrow.css')); ?>" rel="stylesheet">
    <!-- template css -->
    <link rel="stylesheet" href="<?php echo e(asset('ijara/assets/css/main.css')); ?>">

    <?php echo $__env->yieldContent('style'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/custom.css')); ?>">
</head>

<body>

    <div style="display: contents;"><img src="<?php echo e(asset('ijara/assets/img/bg1.svg')); ?>" class="svg-bg"></div>
    <div class="signin-sidebar">
        <div class="signin-sidebar-body">
            <a href="/" class="sidebar-logo mg-b-40">
                <img src="<?php echo e(asset('ijara/assets/img/logo.svg')); ?>">
            </a>
            <div class="divider-text">Фойдаланувчи кабинети</div>

            <div class="signin-forma mg-t-15">
                <?php echo $__env->make('common.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <?php echo $__env->yieldContent('content'); ?>
            </div><!-- signin-sidebar-body -->
            <p class="mg-t-auto mg-b-0 tx-sm tx-color-03 text-center">Барча ҳуқуқлар ҳимояланган ⓒ 2021<br> ЎзР Қишлоқ
                хўжалиги вазирлиги.</p>
        </div><!-- signin-sidebar -->
    </div><!-- signin-panel -->


<?php echo $__env->yieldContent('modal'); ?>

<script src="<?php echo e(asset('ijara/assets/js/eimzo/e-imzo.js')); ?>"></script>
<script src="<?php echo e(asset('ijara/assets/js/eimzo/e-imzo-client.js')); ?>"></script>
<script src="<?php echo e(asset('ijara/assets/js/eimzo/imzo.js')); ?>"></script>

<script src="<?php echo e(asset('ijara/lib/jquery/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('ijara/lib/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('ijara/lib/feather-icons/feather.min.js')); ?>"></script>
<script src="<?php echo e(asset('ijara/lib/perfect-scrollbar/perfect-scrollbar.min.js')); ?>"></script>
<script src="<?php echo e(asset('ijara/assets/js/svg-inline.js')); ?>"></script>
<script src="<?php echo e(asset('js/vue.js')); ?>"></script>
<?php echo $__env->yieldContent('script'); ?>

<script src="<?php echo e(asset('js/app.js')); ?>"></script>
</body>

</html>
<?php /**PATH D:\OpenServer\domains\e-ijara\e-ijara-front\resources\views/template/ijara-login.blade.php ENDPATH**/ ?>