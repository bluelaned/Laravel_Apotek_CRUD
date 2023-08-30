<!doctype html>
<html lang="en">

<head>
    <title>Daftar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/asset_frontend/css/style.css') }}">

</head>

<body id="container">
    <section class="ftco-section">
        <div class="container" style="margin-top: -60px;">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-2">
                    <h2 class="heading-section">ADMIN APOTEK AK47</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="wrap">
                        <div class="img"
                            style="background-image: url('{{ asset('assets/asset_frontend/images/bg-1.jpg') }}')"></div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">DAFTAR</h3>
                                </div>
                                <div class="w-100">
                                    <p class="social-media d-flex justify-content-end">
                                        <a href="#"
                                            class="social-icon d-flex align-items-center justify-content-center"><span
                                                class="fa fa-facebook"></span></a>
                                        <a href="#"
                                            class="social-icon d-flex align-items-center justify-content-center"><span
                                                class="fa fa-twitter"></span></a>
                                    </p>
                                </div>
                            </div>
                            <form action="{{ route('register.action') }}" class="signin-form" method="POST">
                                @csrf
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="username" required>
                                    <label class="form-control-placeholder" for="username">Username</label>
                                </div>
                                <div class="form-group">
                                    <input id="password-field" type="password" class="form-control" name="password"
                                        required>
                                    <label class="form-control-placeholder" for="password">Password</label>
                                    <span toggle="#password-field"
                                        class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                </div>
                                <div class="form-group">
                                    <button type="submit"
                                        class="form-control btn btn-primary rounded submit px-3">DAFTAR</button>
                                </div>
                            </form>
                            <p class="text-center">Already have an account? <a href="{{ route('login') }}">Sign In</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer text-center py-2 theme-bg-dark">
            <small>DIJOKI OLEH: </small><small class="copyright" id="copyright">Josua Felix</small>
        </footer>
    </section>
    <script src="{{ asset('assets/asset_frontend/plugins/jquery-3.3.1.min.j') }}"></script>
    <script src="{{ asset('assets/asset_frontend/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('assets/asset_frontend/js/fonts-awesome.js') }}"></script>
    <script src="{{ asset('assets/asset_frontend/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/asset_frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/asset_frontend/js/popper.js') }}"></script>
    <script src="{{ asset('assets/asset_frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/asset_frontend/js/main.js') }}"></script>
</body>

</html>
