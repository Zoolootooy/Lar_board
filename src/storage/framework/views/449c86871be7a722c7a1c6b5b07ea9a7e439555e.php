<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php echo $__env->make('links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <title>Laravel</title>
    <?php echo $__env->yieldPushContent('header'); ?>

</head>
<body>
<div class="bg-secondary">

<div class="container">
    <div class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="ToggleNavigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Main</a>
                </li>
                <?php if(Auth::check()): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/new">New Post</a>
                    </li>
                <?php endif; ?>

                <?php if(Route::has('login')): ?>

                    <?php if(auth()->guard()->check()): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(url('/home')); ?>">Home</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('login')); ?>">Login</a>
                        </li>

                        <?php if(Route::has('register')): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('register')); ?>">Register</a>
                            </li>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endif; ?>
            </ul>
        </div>

    </div>

<?php echo $__env->yieldContent('content'); ?>

</div>

</div>
</body>
</html>

<?php /**PATH D:\WEB\lar_board\src\resources\views/header.blade.php ENDPATH**/ ?>