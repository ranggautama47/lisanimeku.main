@extends('layouts.app')
@section('title-web', 'Home')
@section('title', 'Home')

@section('content')

@section('content')
    <div class="container">
        <div class="container mx-auto">
            <div class="row justify-content-center">
                @for ($i = 0; $i < 5; $i++)
                    <!-- Contoh: 6 data anime -->
                    <div class="col-md-6 col-lg-4 mb-4">
                        <a href="{{ route('detail') }}" class="text-decoration-none text-dark">
                            <div class="card anime-card h-100 d-flex flex-row">
                                <img src="{{ asset('assets/img/opm3.jpg') }}" alt="One Punch Man" class="anime-image">
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
                @endfor
            </div>
        </div>
    </div>

    <p class="text-center">
    <h1>Testing</h1>

    @guest
        <p><strong>Nama:</strong> Guest</p>
        <p><strong>Email:</strong> Guest</p>
        <p><strong>Role:</strong> Guest</p>
    @else
        <p><strong>Nama:</strong> {{ Auth::user()->name }}</p>
        <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
        <p><strong>Role:</strong>
            @if (Auth::user()->role == 1)
                Admin
            @else
                User
            @endif
        </p>
    @endguest
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Est quidem ipsam odio, delectus eius quibusdam
    necessitatibus quam, suscipit consectetur incidunt voluptatem dolor consequuntur, sunt facilis dignissimos at
    doloribus quod consequatur.
    </p>

@endsection
@endsection
