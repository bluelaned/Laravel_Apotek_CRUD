<!DOCTYPE html>
<html lang="en">

<head>
    <title>ADMIN</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Template">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="favicon.ico">
    <script defer src="https://use.fontawesome.com/releases/v5.7.1/js/all.js"
        integrity="sha384-eVEQC9zshBn0rFj4+TU78eNA19HMNigMviK/PU/FFjLXqa/GKPgX58rvt5Z8PLs7" crossorigin="anonymous">
    </script>
    <link id="theme-style" rel="stylesheet" href="{{ asset('assets/asset_frontend/css/theme-1.css') }}">
</head>

<body id="container">
    <header class="header text-center">
        <h1 class="blog-name pt-lg-4 mb-0">APOTEK AK47</h1>
        <nav class="navbar navbar-expand-lg navbar-dark">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="navigation" class="collapse navbar-collapse flex-column">
                <div class="profile-section pt-3 pt-lg-0">
                    <img class="profile-image mb-3 mx-auto"
                        src="{{ asset('assets/asset_frontend/images/logo_apotek.png') }}" alt="image">

                    <div class="bio mb-3">Apotek K24 berupaya memberikan solusi kesehatan terbaik untuk memastikan
                        kesejahteraan Anda selalu menjadi prioritas utama.</div>

                    <ul class="social-list list-inline py-3 mx-auto">
                        <ul class="social-list list-inline py-3 mx-auto">
                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook fa-fw"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-instagram fa-fw"></i></a></li>
                        </ul>
                    </ul>
                    <hr>
                </div>

                <ul class="navbar-nav flex-column text-left">
                    <li class="nav-item active">
                        <a class="nav-link" href="admin"><i class="fas fa-home fa-fw mr-2"></i>Input Data <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin/data"><i class="fas fa-bookmark fa-fw mr-2"></i>Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"><i
                                class="fas fa-sign-out-alt fa-fw mr-2"></i>Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>


    <div class="main-wrapper">
        <section class="cta-section theme-bg-light py-5">
            <div class="container text-center">
                <h2 class="heading">APOTEK AK47</h2>
            </div>
        </section>
        <section class="blog-list px-3 py-5 p-md-5">
            <div class="container">
                <form method="post" action="{{ route('simpan_data') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Masukkan Gambar</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">NAMA OBAT</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="nama_obat"
                            placeholder="contoh: sakatonic abc">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Keterangan</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="keterangan"
                            rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">SIMPAN</button>
                </form>
            </div>
        </section>

        <footer class="footer text-center py-2 theme-bg-dark">
            <small>DIJOKI OLEH: </small><small class="copyright" id="copyright">Josua Felix</small>
        </footer>
    </div>
    <script src="{{ asset('assets/asset_frontend/plugins/jquery-3.3.1.min.j') }}"></script>
    <script src="{{ asset('assets/asset_frontend/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('assets/asset_frontend/js/fonts-awesome.js') }}"></script>
    <script src="{{ asset('assets/asset_frontend/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/asset_frontend/js/demo/style-switcher.js') }}"></script>
    </div>
</body>

</html>
