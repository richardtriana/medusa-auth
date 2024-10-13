<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <section class="vh-100 "
        style="background-color: #222e3c;">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">

                        <div class="card" style="border-radius: 15px;">
                            <div class="card-header d-flex flex-column align-items-center">
                                <h1 class="text-uppercase text-center text-success h1 fw-bold ">Medusa</h1>
                            </div>
                            <div class="w-100  text-center d-flex justify-content-center">
                                <div class="logo w-50 border-rounded">
                                    <img class="w-100" src="./images/medusa.png">
                                </div>
                            </div>
                            <div class="card-body p-5">
                                @if ($errors->any())
                                <div>
                                    @foreach ($errors->all() as $error)
                                    <p class="text-sm text-danger">{{ $error }}</p>
                                    @endforeach
                                </div>
                                @endif
                                <form action="{{  route('check.directory') }}" method="POST">
                                    @csrf
                                    <p class="text-sm">Por favor, primero verifica la existencia de tu empresa</p>
                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <label class="form-label text-sm text-secondary" for="directory">Empresa:</label>
                                        <input type="text" id="directory" placeholder="Empresa" name="directory" class="form-control form-control-lg" required>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" data-mdb-button-init
                                            data-mdb-ripple-init class="btn btn-success btn-block btn-lg text-white">Siguiente</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>