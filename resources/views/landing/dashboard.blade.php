<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Bintang HSI | @yield('title')</title>

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,500,700,900' rel='stylesheet'>

    <!-- Sweetalert2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Favicons -->

    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Our style -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    @stack('css')
</head>

<body>
    <!-- navbar -->
    {{-- <nav class="navbar navbar-expand-lg border-bottom fixed-top bg-white" aria-label="Offcanvas navbar large">
        <div class="container">
            <a class="navbar-brand my-2" href="{{ route('home') }}"> <img src="{{ asset('assets/logo/Logo Main.png') }}"
                    height="60" alt="HSI Logo" loading="lazy" /></a>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar2"
                aria-labelledby="offcanvasNavbar2Label">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbar2Label">Menu</h5>
                    <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                        <li class="nav-item mx-2">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#">Tentang HSI</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#">Produk</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#">Informasi</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#">Kontak</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="navbar-nav flex-row">
                @if (Route::has('login'))
                    @auth
                        <!-- Avatar -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="avatardropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ asset('assets/img/profile/' . Auth::user()->avatar) }}"
                                    class="rounded-circle shadow" height="35" alt="Profile" loading="lazy" />
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="avatardropdown">
                                <li>
                                    <a class="dropdown-item" href="{{ route('profile.edit') }}">Settings</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('home') }}">Beranda</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="btn btn-hsi-primary ms-3 me-1 px-3 rounded-4" href="{{ route('login') }}">Masuk</a>
                        </li>

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="btn btn-hsi-primary px-3 rounded-4" href="{{ route('register') }}">Daftar</a>
                            </li>
                        @endif
                    @endauth
                @endif
            </div>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav> --}}

    <main class="margin-top">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        {{-- if user login --}}
                        @auth
                            <img src="{{ asset('assets/img/profile/' . Auth::user()->avatar) }}"
                                class="rounded-circle shadow mb-3" style="width: 150px;" alt="Profile" loading="lazy" />

                            <h5 class="mb-2 text-capitalize"><strong>{{ Auth::user()->name }}</strong></h5>
                            <p class="text-muted">Web designer <span class="badge bg-primary">PRO</span></p>
                        @else
                            {{-- if without login --}}
                            <img src="{{ asset('assets/img/profile/' . $user->avatar) }}" class="rounded-circle shadow mb-3"
                                style="width: 150px;" alt="Profile" loading="lazy" />

                            <h5 class="mb-2 text-capitalize"><strong>{{ $user->name }}</strong></h5>
                            <p class="text-muted">Web designer <span class="badge bg-primary">PRO</span></p>
                        @endauth
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Sweetalert2 -->
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top',
            iconColor: 'white',
            customClass: {
                popup: 'colored-toast'
            },
            showConfirmButton: false,
            timer: 5000,
            timerProgressBar: true
        })

        @if (session('pesan'))
            @switch(session('level-alert'))
                @case('alert-success')
                Toast.fire({
                    icon: 'success',
                    title: '{{ Session::get('pesan') }}'
                })
                @break

                @case('alert-danger')
                Toast.fire({
                    icon: 'error',
                    title: '{{ Session::get('pesan') }}'
                })
                @break

                @case('alert-warning')
                Toast.fire({
                    icon: 'warning',
                    title: '{{ Session::get('pesan') }}'
                })
                @break

                @case('alert-question')
                Toast.fire({
                    icon: 'question',
                    title: '{{ Session::get('pesan') }}'
                })
                @break

                @default
                Toast.fire({
                    icon: 'info',
                    title: '{{ Session::get('pesan') }}'
                })
            @endswitch
        @endif
        @if (count($errors) > 0)
            @foreach ($errors->all() as $error)
                Toast.fire({
                    icon: 'error',
                    title: '{{ $error }}'
                })
            @endforeach
        @endif
    </script>
</body>

</html>
