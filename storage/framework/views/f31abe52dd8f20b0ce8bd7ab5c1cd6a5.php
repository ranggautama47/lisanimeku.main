<header class="custom-navbar position-relative">
    <div class="container position-relative">
        <!-- Kiri: Foto Profil + Nama Pengguna -->
        <!-- Jika user sudah login -->
        <?php if(auth()->guard()->check()): ?>
            <div class="position-absolute start-0 top-50 translate-middle-y d-flex align-items-center gap-2">
                <div class="dropdown">
                    <a href="#" class="d-block link-light text-decoration-none dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="user" width="32" height="32"
                            class="rounded-circle" />
                    </a>
                    <ul class="dropdown-menu shadow wide-dropdown">
                        <li class="dropdown-user-info text-center p-3">
                            <img src="https://github.com/mdo.png" alt="user" class="rounded-circle mb-2" width="64"
                                height="64" />
                            <strong><?php echo e(Auth::user()->name); ?></strong>
                            <small><?php echo e(Auth::user()->email); ?></small>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="<?php echo e(route('topup')); ?>">Top Up</a></li>
                        <li><a class="dropdown-item" href="#">Edit Profile</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="<?php echo e(route('logout')); ?>">Sign out</a></li>
                    </ul>
                </div>
                <span class="text-white fw-semibold"><?php echo e(Auth::user()->name); ?></span>
            </div>
        <?php endif; ?>

        <?php if(auth()->guard()->guest()): ?>
            <div class="position-absolute start-0 top-50 translate-middle-y d-flex align-items-center gap-2">
                <a href="<?php echo e(route('login')); ?>" class="btn btn-light btn-sm">Login</a>
                <a href="<?php echo e(route('register')); ?>" class="btn btn-light btn-sm">Register</a>
            </div>
        <?php endif; ?>

        <!-- Tengah: Judul -->
        <h1 class="m-0 text-center">List Anime Ku</h1>

        <!-- Kanan: Koin Berry -->
        
    </div>

    <!-- Nav Buttons -->
    <div class="container mt-3">
        <div class="nav-buttons">
            <a href="<?php echo e(route('home')); ?>" class="btn btn-outline-light">Home</a>
            <a href="<?php echo e(route('trending')); ?>" class="btn btn-outline-light">Trending</a>
            <a href="<?php echo e(route('incoming')); ?>" class="btn btn-outline-light">Incoming</a>
            <a href="<?php echo e(route('list')); ?>" class="btn btn-outline-light">List</a>
        </div>
    </div>
</header>
<?php /**PATH C:\xampp\htdocs\listanimeku-main\resources\views/components/navbars.blade.php ENDPATH**/ ?>