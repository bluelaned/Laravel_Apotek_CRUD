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
                    <li class="nav-item">
                        <a class="nav-link" href="/"><i class="fas fa-home fa-fw mr-2"></i>MENU<span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/"><i class="fas fa-user fa-fw mr-2"></i>About Me<span
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

        <div class="container" style="margin-top: 30px;">
            <h2>Selamat datang di Apotek AK47</h2>
            <p>Destinasi apotek yang dapat Anda andalkan. Di Apotek AK47, kami berkomitmen untuk melayani Anda dengan
                berbagai produk dan layanan farmasi yang menjadikan kesehatan dan kesejahteraan Anda sebagai prioritas
                utama.</p>

            <h3>Visi Kami:</h3>
            <p>Visi kami adalah menjadi landasan dalam perjalanan Anda menuju kesehatan yang lebih baik. Kami berusaha
                menjadi apotek yang dapat Anda percayai untuk semua kebutuhan obat Anda, di mana kualitas, kenyamanan,
                dan perhatian bersatu.</p>

            <div style="text-align: center;">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!4v1691574268119!6m8!1m7!1sHQba5b0qBRyhRvvRy0tsdA!2m2!1d2.959879586472519!2d99.07253596550109!3f156.48669606232514!4f1.2752409318093214!5f0.7820865974627469"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

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
