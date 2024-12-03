<!DOCTYPE html>
<html data-bs-theme="light" lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>FRMPAS - Connexion</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href={{ asset('dashboard/img/favicons/apple-touch-icon.png') }}>
    <link rel="icon" type="image/png" sizes="32x32" href={{ asset('dashboard/img/favicons/favicon-32x32.png') }}>
    <link rel="icon" type="image/png" sizes="16x16" href={{ asset('dashboard/img/favicons/favicon-16x16.png') }}>
    <link rel="shortcut icon" type="image/x-icon" href={{ asset('dashboard/img/favicons/favicon.ico') }}>
    <link rel="manifest" href={{ asset('dashboard/img/favicons/manifest.json') }}>
    <meta name="msapplication-TileImage" content={{ asset('dashboard/img/favicons/mstile-150x150.png') }}>
    <meta name="theme-color" content="#ffffff">
    {{-- <script src={{ asset('dashboard/js/config.js') }}></script> --}}
    <script src={{ asset('dashboard/vendors/simplebar/simplebar.min.js') }}></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">
    <link href={{ asset('dashboard/vendors/simplebar/simplebar.min.css') }} rel="stylesheet">
    <link href={{ asset('dashboard/css/theme.css') }} rel="stylesheet" id="style-default">
    <link href={{ asset('dashboard/css/user.css') }} rel="stylesheet" id="user-style-default">
</head>


<body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <div class="container-fluid">

            <div
                style="display: flex; flex-direction: column; justify-content: center; align-items: center; height: 100vh;">
                <div class="text-center p-2 mb-3">
                    <img src={{ asset('images/logo.png') }} alt="" style="width: 200px">
                </div>

                <div class="card z-3" style="width: 550px;">

                    <div class="card-body p-4 z-3">
                        <div class="row flex-between-center">
                            <div class="col-auto">
                                <h3>Connexion</h3>
                            </div>

                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="card-email">E-mail</label>
                                <input id="card-email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus />
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label" for="card-password">Mot de passe</label>
                                </div>
                                <input class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password" id="card-password" type="password" />
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            @if (Route::has('password.request'))
                            <div class="mb-3">
                                <button class="btn btn-primary d-block w-100 mt-3" type="submit"
                                    name="submit">Connexion</button>
                            </div>
                            @endif
                        </form>
                    </div>
                </div>
                <div class="text-center pt-2">
                    <span style="font-size: 14px">Association Sports Actions Aventures MAROC.</span>
                    <br>
                    <span style="font-size: 14px">Association de plongée affilié à FRMPAS</span>
                    <br>
                    <span style="font-size: 14px">FRMPAS - {{date("Y")}}</span>
                </div>
            </div>

        </div>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->


    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src={{ asset('dashboard/vendors/popper/popper.min.js') }}></script>
    <script src={{ asset('dashboard/vendors/bootstrap/bootstrap.min.js') }}></script>
    <script src={{ asset('dashboard/vendors/anchorjs/anchor.min.js') }}></script>
    <script src={{ asset('dashboard/vendors/is/is.min.js') }}></script>
    <script src={{ asset('dashboard/js/flatpickr.js') }}></script>
    <script src={{ asset('dashboard/vendors/fontawesome/all.min.js') }}></script>
    <script src={{ asset('dashboard/vendors/lodash/lodash.min.js') }}></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src={{ asset('dashboard/vendors/list.js/list.min.js') }}></script>
    <script src={{ asset('dashboard/js/theme.js') }}></script>

</body>

</html>