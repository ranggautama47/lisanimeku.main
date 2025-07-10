<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Register</title>
    <link href="<?php echo e(asset('../assets/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <style>
        .form-signin {
            max-width: 400px;
            padding: 1rem;
        }

        .judul-utama {
            font-weight: bold;
            font-size: 2rem;
            text-align: center;
            margin-bottom: 10px;
        }

        .form-signin h1 {
            text-align: center;
            margin-bottom: 1rem;
        }
    </style>
</head>

<body class="d-flex align-items-center justify-content-center bg-body-tertiary" style="min-height: 100vh;">

    <main class="form-signin w-100">
        <form action="<?php echo e(route('register')); ?>" method="POST">
            <?php echo csrf_field(); ?>

            <div class="judul-utama">List Anime Ku</div>
            <h1 class="h3 fw-normal">Register</h1>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="name" name="name" placeholder="Nama Lengkap"
                    required>
                <label for="name">Nama Lengkap</label>
            </div>

            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com"
                    required>
                <label for="email">Email address</label>
            </div>

            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password"
                    required>
                <label for="password">Password</label>
            </div>

            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                    placeholder="Konfirmasi Password" required>
                <label for="password_confirmation">Konfirmasi Password</label>
            </div>

            <button class="btn btn-primary w-100 py-2 mt-4" type="submit">Daftar</button>

            <div class="text-center mt-3">
                <p>Sudah punya akun? <a href="/login">Login di sini</a></p>
            </div>
        </form>
    </main>


    <script src="<?php echo e(asset('../assets/dist/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('../assets/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\listanimeku-main\resources\views/input/register.blade.php ENDPATH**/ ?>