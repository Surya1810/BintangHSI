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
    <nav class="navbar navbar-expand-lg border-bottom fixed-top bg-white" aria-label="Offcanvas navbar large">
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
    </nav>

    <main class="margin-top">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12 d-grid gap-3">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="col-lg-6">
                                            <form action="{{ route('profile.update', auth()->user()->id) }}"
                                                method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <p class="m-0"><strong>Profile Information</strong></p>
                                                <small>Update your accounts profile information and email
                                                    address.</small><br>
                                                <label class="mt-4 mb-0 form-label col-form-label-sm"
                                                    for="name">Name</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" id="name"
                                                        name="name" aria-describedby="name"
                                                        value="{{ $user->name }}">
                                                </div>
                                                <label class="mb-0 form-label col-form-label-sm"
                                                    for="email">Email</label>
                                                <div class="input-group mb-3">
                                                    <input type="email" class="form-control" id="email"
                                                        name="email" aria-describedby="email"
                                                        value=" {{ $user->email }}">
                                                </div>
                                                <button type="submit"
                                                    class="btn btn-sm btn-dark text-xs">SAVE</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="col-lg-6">
                                            <form action="{{ route('profile.password', auth()->user()->id) }}"
                                                method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <p class="m-0"><strong>Update Password</strong></p>
                                                <small>Ensure your account is using a long, random password to stay
                                                    secure.</small><br>
                                                <label class="mt-4 mb-0 form-label col-form-label-sm"
                                                    for="old_password">Current
                                                    Password</label>
                                                <div class="input-group mb-3">
                                                    <input type="password" class="form-control" id="old_password"
                                                        name="old_password" aria-describedby="old_password">
                                                </div>
                                                <label class="mb-0 form-label col-form-label-sm"
                                                    for="new_password">New
                                                    Password</label>
                                                <div class="input-group mb-3">
                                                    <input type="password" class="form-control" id="new_password"
                                                        name="new_password" aria-describedby="new_password">
                                                </div>
                                                <label class="mb-0 form-label col-form-label-sm"
                                                    for="confirm_password">Confirm
                                                    Password</label>
                                                <div class="input-group mb-3">
                                                    <input type="password" class="form-control" id="confirm_password"
                                                        name="confirm_password" aria-describedby="confirm_password">
                                                </div>

                                                <button type="submit"
                                                    class="btn btn-sm btn-dark text-xs">SAVE</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="col-lg-6">
                                            <p class="m-0"><strong>Delete Account</strong></p>
                                            <small>Once your account is deleted, all of its resources and data will be
                                                permanently deleted.</small><br>
                                            <small>Before deleting your account, please download any data or information
                                                that
                                                you wish to retain.</small><br>
                                            <button class="btn btn-xs btn-danger mt-4 text-xs"
                                                onclick="deleteAccount({{ $user->id }})">
                                                DELETE ACCOUNT</button>
                                            <form id="delete-form-{{ $user->id }}"
                                                action="{{ route('profile.destroy', $user->id) }}" method="POST"
                                                style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <script>
        function deleteAccount(id) {
            Swal.fire({
                title: 'Are you sure?',
                icon: 'error',
                showCancelButton: false,
                confirmButtonColor: '#d33',
                confirmButtonText: 'Delete'
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    document.getElementById('delete-form-' + id).submit();
                } else if (
                    result.dismiss === swal.DismissReason.cancel
                ) {
                    swal(
                        'Cancelled',
                        'Your data is safe !',
                        'error'
                    )
                }
            })
        }
    </script>

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
