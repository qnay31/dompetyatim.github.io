<?php
    error_reporting(0)
?>

<!DOCTYPE html>
<html lang="en">

<?php include 'base/header.php'; ?>

<body>

    <?php include 'base/html-header.php'; ?>

    <?php include 'base/html-sectionFirst.php'; ?>

    <main id="main">

        <?php include 'base/html-sectionAbout.php'; ?>

        <?php include 'base/html-sectionCounter.php'; ?>

        <?php include 'base/html-sectionLegalitas.php'; ?>

        <?php include 'base/html-sectionDonasi.php'; ?>

        <?php include 'base/html-sectionProgram.php'; ?>

        <?php include 'base/html-sectionDokumentasi.php'; ?>

        <?php include 'base/html-sectionKegiatan.php'; ?>

        <?php include 'base/html-sectionContact.php'; ?>

    </main><!-- End #main -->

    <?php include 'base/html-footer.php'; ?>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <?php if ($_GET["idPage"] == false) { ?>
    <div id="preloader"></div>
    <?php } ?>

    <?php include 'base/script.php'; ?>

</body>

</html>