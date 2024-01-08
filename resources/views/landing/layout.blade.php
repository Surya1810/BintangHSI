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

    <main>

        @yield('content')

    </main>

    <footer style="width: 100svw;height: 50svh;">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="card rounded-5 text-white bg-hsi-secondary">
                        <div class="card-body p-5">
                            <div class="row">
                                <div class="col-12 col-md-7">
                                    <h2 style="font-weight: 500">Nikmati Produk Berkualitas <br>
                                        Bergabung Menjadi
                                        Reseller
                                        HSI</h2>
                                    <small>Anda dapat menjadi Agen Reseller atau Distributor HSI, Pelajari produk dan
                                        marketing Plan HSI</small>
                                </div>
                                <div class="col-12 col-md-5">
                                    <button class="btn btn-light float-end p-3">Download Marketing Plan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="nav justify-content-center">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Produk</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Tentang HSI</a>
                </li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Testimonial</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Informasi</a></li>
            </ul>
            <div class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                <p class="col-md-4 mb-0 text-body-secondary">&copy; 2023 Company, Inc</p>

                <ul class="nav col-md-4 d-flex justify-content-center">
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Privacy
                            Policy</a>
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Term &
                            Condition</a>
                    </li>
                </ul>

                <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                    <li class="ms-3"><a class="text-body-secondary" href="#" style="color: black"><svg
                                class="bi" width="24" height="24">
                                <use xlink:href="#twitter" />
                            </svg></a></li>
                    <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi"
                                width="24" height="24">
                                <use xlink:href="#instagram" />
                            </svg></a></li>
                </ul>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script>
        //Back to Top Button
        let mybutton = document.getElementById("btn-back-to-top");
        let wabutton = document.getElementById("whatsapp");

        window.onscroll = function() {
            scrollFunction();
        };

        function scrollFunction() {
            if (
                document.body.scrollTop > 20 ||
                document.documentElement.scrollTop > 20
            ) {
                mybutton.style.display = "block";
                wabutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
                wabutton.style.display = "none";
            }
        }
        // When the user clicks on the button, scroll to the top of the document
        mybutton.addEventListener("click", backToTop);

        function backToTop() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>

    @stack('scripts')

</body>

</html>
