<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'UTS-Blog')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" crossorigin="anonymous">
    
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light"style="background-color:   #B0E0E6;">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    <?php echo e(config('app.name', 'UTS-Blog')); ?>

                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarDropDown" aria-controls="navbarDropDown" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item active">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                        
                            
                            <li>
                                <a class="nav-link" href="<?php echo e(url('/category')); ?>">Category</a>
                            </li>

                            <li>
                                <a class="nav-link" href="<?php echo e(url('/post')); ?>">Post</a>
                            </li>

                            <li>
                                <a class="nav-link" href="<?php echo e(url('/photo')); ?>">Photo</a>
                            </li>

                            <li>
                                <a class="nav-link" href="<?php echo e(url('/album')); ?>">Album</a>
                            </li>

                            <ul class="nav navbar-nav navbar-right">
                             <li class="nav-item active ">
                                <a class="nav-link disable" href="#" role="button" aria-disabled="true">Hello,
                                    <?php echo e(Auth::user()->name); ?> ! <span class="caret"></span>
                                </a>
                            </li>

                            <li>    
                                <a class="nav-link" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                </a>
                            </li>
                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                            
                            </ul>
                        <?php endif; ?>
                   </ul>
                </div>
            </div>
        </nav>


        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>

        </main>
    </div>
</body>

<footer>
            Copyright 2020 &copy; Programmed By Maliha Sinaga
    </footer>
    <style type="text/css">
footer {
  text-align: center;
  padding: 3px;
  background-color: powderblue;
  color: midnightblue;
  position:absolute;
    bottom:0px;
    width:100%;
}
</style>
</html>
<?php /**PATH C:\xampp\htdocs\quiz\resources\views/layouts/app.blade.php ENDPATH**/ ?>