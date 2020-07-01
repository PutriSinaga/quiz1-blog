

<?php $__env->startSection('content'); ?>

<?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
           <marquee behavior="scroll" direction="left"
           onmouseover="this.stop();"
           onmouseout="this.start();"> 
           <h1>If You want to take a look at this website, </h1>                      
                  <h1>The First Things You must do is Log In!</h1> 
              </marquee>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\quiz\resources\views/dashboard.blade.php ENDPATH**/ ?>