<?php
    error_reporting(0);
    if ($_GET["idPage"] == "belajarYatim") {
        $judul = "kegiatan belajar anak yatim";

    } elseif ($_GET["idPage"] == "santunanApril") {
        $judul = "santunan bulanan 22 april 2022";

    } elseif ($_GET["idPage"] == "santunanJuni") {
        $judul = "santunan bulanan 26 juni 2022";

    } elseif ($_GET["idPage"] == "ceriaYatim") {
        $judul = "ceria bersama yatim";
    
    } else {
        $judul = "santunan bulanan 27 mei 2022";
    
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'base/header.php'; ?>
</head>

<body>

    <?php include 'base/html-header.php'; ?>

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Kegiatan Yayasan</h2>
                    <ol>
                        <li><a href="index.php">Beranda</a></li>
                        <li><?= ucwords($judul) ?></li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-8">
                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">

                                <?php if ($_GET["idPage"] == "belajarYatim") { ?>
                                <div class="swiper-slide">
                                    <img src="assets/img/kegiatan/pendidikan/pendidikan-1.jpeg" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="assets/img/kegiatan/pendidikan/pendidikan-2.jpeg" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="assets/img/kegiatan/pendidikan/pendidikan-3.jpeg" alt="">
                                </div>

                                <?php } elseif ($_GET["idPage"] == "santunanApril") { ?>
                                <div class="swiper-slide">
                                    <img src="assets/img/kegiatan/santunan/april-1.JPG" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="assets/img/kegiatan/santunan/april-2.JPG" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="assets/img/kegiatan/santunan/april-3.JPG" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="assets/img/kegiatan/santunan/april-4.JPG" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="assets/img/kegiatan/santunan/april-5.JPG" alt="">
                                </div>

                                <?php } elseif ($_GET["idPage"] == "ceriaYatim") { ?>
                                <div class="swiper-slide">
                                    <img src="assets/img/kegiatan/ceria/ceria-1.jpg" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="assets/img/kegiatan/ceria/ceria-2.jpg" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="assets/img/kegiatan/ceria/ceria-3.jpg" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="assets/img/kegiatan/ceria/ceria-4.jpg" alt="">
                                </div>

                                <?php } elseif ($_GET["idPage"] == "santunanJuni") { ?>
                                <div class="swiper-slide">
                                    <img src="assets/img/kegiatan/santunan/juni-1.jpg" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="assets/img/kegiatan/santunan/juni-2.jpg" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="assets/img/kegiatan/santunan/juni-3.jpg" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="assets/img/kegiatan/santunan/juni-4.jpg" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="assets/img/kegiatan/santunan/juni-5.jpg" alt="">
                                </div>

                                <?php } else { ?>
                                <div class="swiper-slide">
                                    <img src="assets/img/kegiatan/santunan/mei-1.JPG" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="assets/img/kegiatan/santunan/mei-2.JPG" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="assets/img/kegiatan/santunan/mei-3.JPG" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="assets/img/kegiatan/santunan/mei-4.JPG" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="assets/img/kegiatan/santunan/mei-5.JPG" alt="">
                                </div>
                                <?php } ?>

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="portfolio-info">
                            <h3>Informasi Kegiatan</h3>
                            <ul>
                                <?php if ($_GET["idPage"] == "belajarYatim") { ?>
                                <li><strong>Program</strong>: Pendidikan Yatim</li>
                                <li><strong>Upload by</strong>: Yayasan Dompet Yatim Piatu Amanah</li>
                                <li><strong>Tgl update</strong>: 16 Mei 2022, 13:00 WIB</li>

                                <?php } elseif ($_GET["idPage"] == "santunanApril") { ?>
                                <li><strong>Program</strong>: Santunan Yatim</li>
                                <li><strong>Upload by</strong>: Yayasan Dompet Yatim Piatu Amanah</li>
                                <li><strong>Tgl update</strong>: 22 April 2022, 08:00 WIB</li>

                                <?php } elseif ($_GET["idPage"] == "santunanJuni") { ?>
                                <li><strong>Program</strong>: Santunan Yatim</li>
                                <li><strong>Upload by</strong>: Yayasan Dompet Yatim Piatu Amanah</li>
                                <li><strong>Tgl update</strong>: 2 Juli 2022, 08:00 WIB</li>

                                <?php } elseif ($_GET["idPage"] == "ceriaYatim") { ?>
                                <li><strong>Program</strong>: Ceria Yatim</li>
                                <li><strong>Upload by</strong>: Yayasan Dompet Yatim Piatu Amanah</li>
                                <li><strong>Tgl update</strong>: 22 Januari 2022, 13: 45 WIB</li>

                                <?php } else { ?>
                                <li><strong>Program</strong>: Santunan Yatim</li>
                                <li><strong>Upload by</strong>: Yayasan Dompet Yatim Piatu Amanah</li>
                                <li><strong>Tgl update</strong>: 27 Mei 2022, 09:00 WIB</li>
                                <?php } ?>
                            </ul>
                        </div>
                        <div class="portfolio-description">
                            <h2><?= ucwords($judul); ?></h2>
                            <?php if ($_GET["idPage"] == "belajarYatim") { ?>
                            <p>
                                Assalamu'alaikum Warahmatullahi Wabarakatuh sahabat yatim, salah satu dari program yang
                                ada di Yayasan Dompet Yatim Piatu Amanah yaitu Program Pendidikan Yatim. Berikut ini
                                kegiatan dari program yang saat ini berjalan.
                            </p>

                            <?php } elseif ($_GET["idPage"] == "santunanApril") { ?>
                            <p>
                                Assalamu'alaikum Warahmatullah Wabarakatuh, salam santun serta salam silaturahmi.
                                <br><br>

                                Pada tanggal 22 April 2022 yayasan kami mengadakan santunan rutin bulanan untuk anak
                                anak
                                yatim di Yayasan Dompet Yatim Piatu Amanah. <br>
                                Alhamdulillah kegiatan rutin yang kami adakan ini berjalan dengan lancar hingga selesai.
                                Kami segenap pengurus Yayasan Dompet Yatim Piatu Amanah mengucapkan ribuan terimakasih
                                kepada para donatur dermawan yang telah memberikan kami dukungan dan bantuannya dengan
                                ikhlas, semoga kebaikan dan rezekinya para donatur Allah lipatgandakan berkali-kali
                                lipat dan menjadi tabungan akhirat hingga Yaumil Qiyamah Aamiin Yaa Rabbal Alamin
                            </p>

                            <?php } elseif ($_GET["idPage"] == "santunanJuni") { ?>
                            <p>
                                Assalamu'alaikum Warahmatullah Wabarakatuh, salam santun serta salam silaturahmi.
                                <br><br>

                                Pada tanggal 26 Juni 2022 yayasan kami mengadakan santunan rutin bulanan untuk anak
                                anak
                                yatim di Yayasan Dompet Yatim Piatu Amanah. <br>
                                Alhamdulillah kegiatan rutin yang kami adakan ini berjalan dengan lancar hingga selesai.
                                Kami segenap pengurus Yayasan Dompet Yatim Piatu Amanah mengucapkan ribuan terimakasih
                                kepada para donatur dermawan yang telah memberikan kami dukungan dan bantuannya dengan
                                ikhlas, semoga kebaikan dan rezekinya para donatur Allah lipatgandakan berkali-kali
                                lipat dan menjadi tabungan akhirat hingga Yaumil Qiyamah Aamiin Yaa Rabbal Alamin
                            </p>

                            <?php } elseif ($_GET["idPage"] == "ceriaYatim") { ?>
                            <p>
                                Assalamu'alaikum Warahmatullah Wabarakatuh, salam santun serta salam silaturahmi.
                                <br><br>

                                Alhamdulillah sahabat yatim kegiatan program Ceria Yatim telah selesai kami laksanakan,
                                berikut adalah dokumentasi kegiatan tersebut.
                            </p>

                            <?php } else { ?>
                            <p>
                                Assalamu'alaikum Warahmatullah Wabarakatuh, salam santun serta salam silaturahmi.
                                <br><br>

                                Pada tanggal 27 Mei 2022 yayasan kami mengadakan santunan rutin bulanan untuk anak anak
                                yatim di Yayasan Dompet Yatim Piatu Amanah. <br>
                                Alhamdulillah kegiatan rutin yang kami adakan ini berjalan dengan lancar hingga selesai.
                                Kami segenap pengurus Yayasan Dompet Yatim Piatu Amanah mengucapkan ribuan terimakasih
                                kepada para donatur dermawan yang telah memberikan kami dukungan dan bantuannya dengan
                                ikhlas, semoga kebaikan dan rezekinya para donatur Allah lipatgandakan berkali-kali
                                lipat dan menjadi tabungan akhirat hingga Yaumil Qiyamah Aamiin Yaa Rabbal Alamin
                            </p>
                            <?php } ?>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Details Section -->

    </main><!-- End #main -->

    <?php include 'base/html-footer.php'; ?>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>

    <?php include 'base/script.php'; ?>

</body>

</html>