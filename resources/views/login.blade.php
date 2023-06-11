<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="favicon.ico">
        <title>Ujian Online ||
            {{ $title }}</title>
        <!-- Simple bar CSS -->
        <link rel="stylesheet" href="/css/simplebar.css">
        <!-- Fonts CSS -->
        <link
            href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet">
        <!-- Icons CSS -->
        <link rel="stylesheet" href="/css/feather.css">
        <!-- Date Range Picker CSS -->
        <link rel="stylesheet" href="/css/daterangepicker.css">
        <!-- App CSS -->
        <link rel="stylesheet" href="/css/app-light.css" id="lightTheme">
        <link
            rel="stylesheet"
            href="/css/app-dark.css"
            id="darkTheme"
            disabled="disabled">
    </head>
    <body class="light ">
        <div class="wrapper vh-100">
            <div class="row align-items-center h-100">
                <form
                    action="/login"
                    method="POST"
                    class="col-lg-3 col-md-4 col-10 mx-auto text-center">
                    @csrf
                    @if(session()->has('loginEror'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('loginEror') }}
                            <button type="button" class="close" data-dismiss="alert">
                                <a href="/login" style="text-decoration: none;">×</a>
                            </button>
                        </div> 
                        @endif
                    <div class="w-100 mt-0 mb-0 d-flex">
                        <a class="navbar-brand mx-auto mt-0 flex-fill text-center" href="/login">
                            <img
                                id="logo"
                                width="100px"
                                src="/assets/images/smk.png"
                                alt="Logo SMK N 4 Kota Bengkulu">
                        </a>
                    </div>
                    <h1 class="h3 mb-3">Login</h1>
                    <h1 class="h5">Sistem Informasi Ujian Online</h1>
                    <h1 class="h5 mb-3">SMK N 4 Kota Bengkulu</h1>
                    <div class="form-group">
                        <select name="role" class="form-control" id="role" required="required">
                            <option value="Siswa">Siswa/Siswi</option>                
                            <option value="Guru">Guru</option>
                            <option value="Staf">Staf</option>
                            <option value="Admin">Admin</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nik" class="sr-only">NIP / NIK</label>
                        <input
                            type="nik"
                            name="nik"
                            id="nik"
                            class="form-control form-control-lg @error('nik') is-invalid @enderror"
                            placeholder="NIP / NIK"
                            required
                            autofocus
                            value="{{ old('nik') }}">
                        @error('nik')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password" class="sr-only">Password</label>
                        <input
                            type="password"
                            name="password"
                            id="password"
                            class="form-control form-control-lg"
                            placeholder="Password"
                            required="required">
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
                </form>
            </div>
        </div>
        <script src="/js/jquery.min.js"></script>
        <script src="/js/popper.min.js"></script>
        <script src="/js/moment.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/simplebar.min.js"></script>
        <script src='/js/daterangepicker.js'></script>
        <script src='/js/jquery.stickOnScroll.js'></script>
        <script src="/js/tinycolor-min.js"></script>
        <script src="/js/config.js"></script>
        <script src="/js/apps.js"></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script
            async="async"
            src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', 'UA-56159088-1');
        </script>
    </body>
</html>
</body>
</html>