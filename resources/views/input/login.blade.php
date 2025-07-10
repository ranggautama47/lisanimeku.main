<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link rel="stylesheet" href="{{ asset('../assets/bootstrap/css/bootstrap.min.css') }}">
</head>

<body>

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
            <form action="{{ route('login') }}" method="POST">
                @csrf

                <!-- Judul utama -->
                <div class="judul-utama">List Anime Ku</div>

                <!-- Judul Form -->
                <h1 class="h3 fw-normal">Login</h1>

                <!-- Pesan Alert -->
                <x-alert />

                <!-- Email -->
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="email" name="email"
                        placeholder="name@example.com" required>
                    <label for="email">Email address</label>
                </div>

                <!-- Password -->
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password"
                        required>
                    <label for="password">Password</label>
                </div>

                <!-- Tombol Login -->
                <button class="btn btn-primary w-100 py-2 mt-4" type="submit">Sign in</button>

                <!-- Link Register -->
                <div class="text-center mt-3">
                    <p>Belum punya akun? <a href="/register">Daftar di sini</a></p>
                </div>
            </form>
        </main>

    </body>

    {{-- <script src="{{ asset('../assets/dist/js/bootstrap.bundle.min.js') }}"></script> --}}
    <script src="{{ asset('../assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</html>
