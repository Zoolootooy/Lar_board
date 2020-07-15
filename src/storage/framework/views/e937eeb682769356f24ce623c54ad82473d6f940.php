<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>


    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body width="1000">
    <div id="app" class="bg-secondary">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="navbar navbar-expand-lg navbar-dark bg-dark">
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


                <main class="pt-4 pb-4 align-middle" height="100%">
                    <?php echo $__env->yieldContent('content'); ?>
                </main>
            </div>
        </div>
    </div>

    </div>
</body>
</html>
<?php /**PATH D:\WEB\lar_board\src\resources\views/layouts/app.blade.php ENDPATH**/ ?>