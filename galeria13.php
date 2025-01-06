<?php
define('SITE_ROOT', __DIR__);
include_once(SITE_ROOT.'/include/start.php');
?>
<!DOCTYPE html>
<html lang="pl-PL">
<?php
include 'head_gallery.php';
?>
<body id="page-top">
<main role="main">
    <?php
    include 'menu.php';
    ?>
    <div class="container-fluid p-0">
        <section class="website-section">
            <div class="website-section-content">
                <div class="row">
                    <!-- treść główna -->
                    <div class="col">
                        <h2  class="first-content-header">I Komunia Święta 2020</h2>

                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;23&nbsp;sierpnia
                        przeżywaliśmy w&nbsp;naszej Parafii uroczystość I&nbsp;Komunii Świętej.
                        Do&nbsp;tego ważnego dnia dzieci wraz z&nbsp;rodzicami przygotowały się
                        poprzez uczestnictwo w&nbsp;katechezach parafialnych i&nbsp;spowiedź
                        świętą.</p><br>

                        <ul id='gallery'></ul>
                        <script>var l = 17, gallery_number = "13";</script>
                        <?php
                        include 'galeria_script.php';
                        ?>
                        <script src="static/src/js/gallery.js"></script>

                        <p>&nbsp;</p>
                    </div>
                    <!-- koniec treści głównej -->
                </div>
            </div>
        </section>
    </div>
</main>
<?php
include 'footer.php';
include 'scripts_gallery.php';
?>
</body>
</html>
