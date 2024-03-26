<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gallery - {{ $title }}</title>

    {{-- bootstrap css --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    {{-- my style css --}}
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>

<body>
    <!-- header -->
    <header class="navbar shadow-sm sticky-top flex-md-nowrap p-0">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/">
            <img src="/assets/images/logo1.png" class="img-fluid logo" alt="">
        </a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" style="top: 0.25rem;right: 1rem;"
            type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                @auth
                    <form action="/logout" method="post">
                        @csrf
                        <button class="btn mb-2 logout-button text-primary" type="submit">
                            Hello {{ Auth::user()->name }}
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M6 2h9a2 2 0 0 1 2 2v2h-2V4H6v16h9v-2h2v2a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2z" />
                                <path fill="currentColor" d="M16.09 15.59L17.5 17l5-5l-5-5l-1.41 1.41L18.67 11H9v2h9.67z" />
                            </svg>
                            <p>Logout</p>
                        </button>
                    </form>
                @endauth
            </div>
        </div>
    </header>

    <div class="flex min-vh-100 d-flex justify-content-center align-items-center" style="background-color: #9A616D;">
        {{-- /content --}}
        @yield('container')
        {{-- /content --}}
    </div>
</body>

</html>
