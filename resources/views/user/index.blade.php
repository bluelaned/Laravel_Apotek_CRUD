<!DOCTYPE html>
<html lang="en">

<head>
    <title>USER</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Template">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="favicon.ico">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.7.1/js/all.js"
        integrity="sha384-eVEQC9zshBn0rFj4+TU78eNA19HMNigMviK/PU/FFjLXqa/GKPgX58rvt5Z8PLs7" crossorigin="anonymous">
    </script>
    <link id="theme-style" rel="stylesheet" href="{{ asset('assets/asset_frontend/css/theme-1.css') }}">
</head>

<body id="container">
    <header class="header text-center">
        <h1 class="blog-name pt-lg-4 mb-0"><a href="/">APOTEK AK47</a></h1>
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
                        kesejahteraan Anda selalu menjadi prioritas utama.<br><a
                            href="https://goo.gl/maps/ws7dCgXjBnmy3toh8">KUNJUNGI APOTEK KAMI</a>
                    </div>

                    <ul class="social-list list-inline py-3 mx-auto">
                        <li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-facebook fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-instagram fa-fw"></i></a></li>
                    </ul>
                    <hr>
                </div>

                <ul class="navbar-nav flex-column text-left">
                    <li class="nav-item active">
                        <a class="nav-link" href="/"><i class="fas fa-home fa-fw mr-2"></i>MENU<span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about"><i class="fas fa-user fa-fw mr-2"></i>About Me<span
                                class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="main-wrapper">
        <section class="cta-section theme-bg-light py-3">
            <div class="container text-center">
                <h2 class="heading">APOTEK AK47</h2>
            </div>
        </section>

        <div id="imageCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('assets/asset_frontend/images/apotek1.jpg') }}" class="d-block w-100"
                        alt="Image 1" width="800" height="400">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/asset_frontend/images/apotek2.jpg') }}" class="d-block w-100"
                        alt="Image 2" width="800" height="400">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/asset_frontend/images/apotek3.jpg') }}" class="d-block w-100"
                        alt="Image 3" width="800" height="400">
                </div>

            </div>
            <a class="carousel-control-prev" href="#imageCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#imageCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <section class="blog-list px-3 py-5 p-md-5">
            <div class="container">
                @if (count($nama_obat) === 0)
                <p style="color:red;">Data Masih Kosong, Silahkan Tambah Data Baru!</p>
                @else
                @foreach ($nama_obat as $key => $admin)
                <div class="item mb-5">
                    <div class="media">
                        <img class="mr-3 img-fluid post-thumb d-none d-md-flex"
                            src="{{ asset('public/images/' . $admin->image) }}" style="height: 100px; width: 150px;"
                            alt="image">
                        <div class="media-body">
                            <h3 class="title mb-1">{{ $admin->nama_obat }}</h3>
                            <div class="meta mb-1">
                                <span class="date">{{ $admin->created_at->diffForHumans() }}</span>
                            </div>
                            <div class="intro">{{ $admin->keterangan }}</div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </section>

        <footer class="footer text-center py-2 theme-bg-dark">
            <small>DIJOKI OLEH: </small><small class="copyright" id="copyright">Josua Felix</small>
        </footer>
    </div>
    <script>
        $(document).ready(function () {
            $('#imageCarousel').carousel();
        });

    </script>
    <script src="{{ asset('assets/asset_frontend/plugins/jquery-3.3.1.min.j') }}"></script>
    <script src="{{ asset('assets/asset_frontend/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('assets/asset_frontend/js/fonts-awesome.js') }}"></script>
    <script src="{{ asset('assets/asset_frontend/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
</body>

</html>
