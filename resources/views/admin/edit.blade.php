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
                        <li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-facebook fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-instagram fa-fw"></i></a></li>
                    </ul>
                    <hr>
                </div>


                <ul class="navbar-nav flex-column text-left">
                    <li class="nav-item">
                        <a class="nav-link" href="/admin"><i class="fas fa-home fa-fw mr-2"></i>Input Data <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/admin/data"><i class="fas fa-bookmark fa-fw mr-2"></i>Data</a>
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
            <!--//container-->
        </section>
        <section class="blog-list px-3 py-5 p-md-5">
            <div class="container">
                <div class="card-body table-responsive">
                    <form action="{{ route('admin.update', ['id' => $admin->id]) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="file" id="image" name="image" class="form-control-file">
                                </div>
                            </div>
                        </div>

                        @if ($admin->image)
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <img src="{{ asset('public/images/' . $admin->image) }}" alt="Current Image"
                                        class="img-fluid">
                                </div>
                            </div>
                        </div>
                        @endif

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="nama_obat">Nama Obat</label>
                                    <input type="text" id="nama_obat" name="nama_obat" placeholder="Masukan Nama obat"
                                        class="form-control" value="{{ old('nama_obat', $admin->nama_obat) }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="keterangan">Keterangan</label>
                                    <textarea id="keterangan" name="keterangan"
                                        class="form-control">{{ old('keterangan', $admin->keterangan) }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
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
</body>

</html>
