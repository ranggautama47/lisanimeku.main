<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>ListAnimeKu @yield('title-web')</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('../assets/style.css') }}">
</head>
<body>
    <x-navbars />

    <main>
        @if (Route::is('home'))
            <x-carousel />
        @endif
        <section class="content-section">
            <h2 class="text-center mb-5">@yield('title')</h2>
            <div class="container">
                @yield('content')
            </div>
        </section>
    </main>

    <x-footers />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
