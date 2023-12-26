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

    <title>Bintang HSI | Masuk</title>

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,500,700,900' rel='stylesheet'>

    <!-- Favicons -->


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <!-- Our style -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <main>
        <!-- login -->
        <section>
            <div class="bg-main">
                <div class="container h-100">
                    <div class="row align-items-center h-100">
                        <div class="col-10 col-sm-8 col-md-6 col-lg-4 mx-auto">
                            <div class="text-center">
                                <h4>Masuk ke Bintang HSI</h4>
                            </div>
                            <form class="p-3 p-md-3 shadow border rounded-4 bg-white"method="POST"
                                action="{{ route('login') }}">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="email">Email</label>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label for="password">Password</label>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        value="{{ old('password') }}" required autocomplete="password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="col-6 mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember"
                                                id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Ingat saya') }}
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6">


                                        @if (Route::has('password.request'))
                                            <a class="float-end text-muted" href="{{ route('password.request') }}">
                                                {{ __('Lupa password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                                <button type="submit" class="w-100 btn btn-lg btn-hsi-secondary rounded-4">
                                    {{ __('Masuk') }}
                                </button>
                                <hr class="mt-4">
                                <div class="text-center">
                                    <small class="text-body-secondary">Belum punya akun? <a
                                            href="{{ route('register') }}">Daftar sekarang</a></small>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</html>
