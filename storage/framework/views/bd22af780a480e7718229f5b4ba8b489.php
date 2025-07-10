<?php $__env->startSection('title-web', 'Detail Anime'); ?>
<?php $__env->startSection('title', 'Detail Anime'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">

        <!-- Info Anime -->
        <div class="anime-detail-container row">
            <div class="col-md-3 mb-3 mb-md-0 d-flex justify-content-center">
                <img src="<?php echo e(asset('assets/img/opm3.jpg')); ?>" class="anime-cover"
                    alt="One Punch Man 3">
            </div>
            <div class="col-md-9">
                <h2 class="fw-bold">One Punch Man Season 3</h2>
                <p><strong>Japanese:</strong> ワンパンマン</p>
                <p><strong>Seasons:</strong> Summer 2025</p>
                <p><strong>Type:</strong> TV</p>
                <p><strong>Total Episodes:</strong> 12</p>
                <p><strong>Duration:</strong> 24 min per episode</p>
                <p><strong>Producers:</strong> Shueisha, TV Tokyo</p>
                <p><strong>Genre:</strong> Action, Comedy, Super Power, Supernatural</p>
                <p><strong>Status:</strong> Ongoing</p>
                <p><strong>Score:</strong> 8.9</p>
                <p><strong>Released on:</strong> July 10, 2025</p>
            </div>
        </div>

        <!-- Sinopsis -->
        <div class="anime-synopsis">
            <h4>Synopsis :</h4>
            <p style="text-align: justify">
                Setelah pertempuran sengit melawan Asosiasi Monster, Saitama dan para pahlawan tingkat atas kini
                menghadapi ancaman yang lebih besar dari sebelumnya. Musuh baru muncul, membawa kekacauan dan teror ke
                seluruh kota. Sementara itu, rahasia kekuatan Saitama mulai terkuak, dan konfrontasi besar dengan para
                makhluk tingkat naga semakin dekat.
            </p>
        </div>

        <!-- Download -->
        <div class="anime-download text-center">
            <h5>Download Links</h5>
            <div class="d-flex justify-content-center gap-3 mt-2">
                <a href="#" class="text-decoration-none text-info">360P</a>
                <a href="#" class="text-decoration-none text-info">480P</a>
                <a href="#" class="text-decoration-none text-info">720P</a>
                <a href="#" class="text-decoration-none text-info">1080P</a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\listanimeku-main\resources\views/users/detail_anime.blade.php ENDPATH**/ ?>