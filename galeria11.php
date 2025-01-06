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
                        <h2 class="first-content-header">Bierzmowanie 2014</h2>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;W&nbsp;dniu 1&nbsp;maja 2014&nbsp;r. odbyła się
                            uroczystość bierzmowania młodzieży sandomierskich szkół.
                            Sakramentu udzielił Ks.&nbsp;Biskup Ordynariusz Krzysztof Nitkiewicz.</p><br>

                        <ul id='gallery'></ul>
                        <script>
                            var l = 198,
                                gallery_number = "11",
                                images_data = [];

                            for (var i = 1; i < l + 1; i++) {
                                images_data.push({
                                    title: "Zdjecie " + i,
                                    url: "static/gallery/"
                                        + gallery_number
                                        + "/"
                                        + ('00' + i).slice(-3)
                                        + "_b.jpg",
                                    thumb: "static/gallery/"
                                        + gallery_number
                                        + "/"
                                        + ('00' + i).slice(-3)
                                        + "_t.jpg",
                                });
                            }
                        </script>
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
