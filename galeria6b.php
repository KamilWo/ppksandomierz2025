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
                        <h2 class="first-content-header">Galeria 5</h2>
                        <p>Galeria przedstawia ujęcia z uroczystości Jubileuszu 25-lecia
                            Parafii p.w. Podwyższenia Krzyża Świętego w Sandomierzu
                            w&nbsp;dniu 15&nbsp;czerwca 2012&nbsp;r.</p><br>

                        <ul id='gallery'></ul>
                        <script>var l = 76, gallery_number = "6b";</script>
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
