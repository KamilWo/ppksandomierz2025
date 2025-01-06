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
                        <h2 class="first-content-header">NAWRACAJCIE SIĘ I&nbsp;WIERZCIE W&nbsp;EWANGELIĘ<br> Rekolekcje
                            Wielkopostne 2016</h2>

                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wielki Post rozpoczęliśmy parafialnymi
                            rekolekcjami, które trwały od&nbsp;środy popielcowej do&nbsp;niedzieli.
                            Poprowadził je&nbsp;ks.&nbsp;Jan Brzozowski ze&nbsp;zgromadzenia Kanoników Regularnych.</p><br>

                        <ul id='gallery'></ul>
                        <script>var l = 17, gallery_number = "12";</script>
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
