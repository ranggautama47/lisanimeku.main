<?php $__env->startSection('title-web', 'Home'); ?>
<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="container mx-auto">
            <div class="row justify-content-center">
                <?php for($i = 0; $i < 5; $i++): ?>
                    <!-- Contoh: 6 data anime -->
                    <div class="col-md-6 col-lg-4 mb-4">
                        <a href="<?php echo e(route('detail')); ?>" class="text-decoration-none text-dark">
                            <div class="card anime-card h-100 d-flex flex-row">
                                <img src="<?php echo e(asset('assets/img/opm3.jpg')); ?>" alt="One Punch Man" class="anime-image">
                                <div class="card-body">
                                    <h5 class="card-title">One Punch Man S3</h5>
                                    <p class="mb-1"><strong>Type:</strong> TV</p>
                                    <p class="mb-1"><strong>Genres:</strong> Action, Comedy</p>
                                    <p class="mb-1"><strong>Episodes:</strong> 13</p>
                                    <p class="mb-0"><strong>Rating:</strong> 7.96</p>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>

    <p class="text-center">
    <h1>Testing</h1>

    <?php if(auth()->guard()->guest()): ?>
        <p><strong>Nama:</strong> Guest</p>
        <p><strong>Email:</strong> Guest</p>
        <p><strong>Role:</strong> Guest</p>
    <?php else: ?>
        <p><strong>Nama:</strong> <?php echo e(Auth::user()->name); ?></p>
        <p><strong>Email:</strong> <?php echo e(Auth::user()->email); ?></p>
        <p><strong>Role:</strong>
            <?php if(Auth::user()->role == 1): ?>
                Admin
            <?php else: ?>
                User
            <?php endif; ?>
        </p>
    <?php endif; ?>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Est quidem ipsam odio, delectus eius quibusdam
    necessitatibus quam, suscipit consectetur incidunt voluptatem dolor consequuntur, sunt facilis dignissimos at
    doloribus quod consequatur.
    </p>

<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\listanimeku-main\resources\views/users/home.blade.php ENDPATH**/ ?>