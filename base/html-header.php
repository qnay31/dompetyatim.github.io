<!-- ======= Header ======= -->
<?php if ($_GET["idPage"] == "") { ?>
<header id="header" class="fixed-top">

    <?php } else { ?>
    <header id="header" class="fixed-top header-inner-pages">
        <?php } ?>
        <div class="container d-flex align-items-center justify-content-between">
            <h1 class="logo"><a href="index.php"><img src="assets/img/logo/logo.png" alt="" srcset=""></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <?php if ($_GET["idPage"] == "") { ?>
                <ul>
                    <li><a class="nav-link scrollto active" href="#home">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
                    <li><a class="nav-link scrollto" href="#legalilas">Legalitas</a></li>
                    <li><a class="nav-link scrollto" href="#program">Program</a></li>
                    <li><a class="nav-link scrollto" href="#dokumentasi">Dokumentasi</a></li>
                    <li><a class="nav-link scrollto" href="#kegiatan">Kegiatan</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
                </ul>

                <?php } else { ?>
                <ul>
                    <li><a class="nav-link scrollto" href="#home">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
                    <li><a class="nav-link scrollto" href="#legalilas">Legalitas</a></li>
                    <li><a class="nav-link scrollto" href="#program">Program</a></li>
                    <li><a class="nav-link scrollto" href="#dokumentasi">Dokumentasi</a></li>
                    <li><a class="nav-link scrollto active" href="#kegiatan">Kegiatan</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
                </ul>
                <?php } ?>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->