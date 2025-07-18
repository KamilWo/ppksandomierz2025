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
<main>
    <?php
    include 'menu.php';
    ?>
    <div class="container-fluid p-0">
        <section class="website-section">
            <div class="website-section-content">
                <div class="row">
                    <!-- treść główna -->
                    <div class="col">
                        <h2 class="first-content-header">Odpust parafialny 2013</h2>
                        <p class="text-indent">W czasie dorocznych uroczystości odpustowych
                            młodzież parafii Podwyższenia Krzyża Świętego w Sandomierzu, 14 września 2013 r. zainaugurowała cykl
                            przygotowań do sakramentu bierzmowania. W trwającym Roku Wiary uczniowie II klas gimnazjum złożyli
                            swoje wyznanie wiary.
                        </p>
                        <p class="text-indent">W homilii ks. Andrzej Bąk zachęcał
                            młodych oraz ich rodziców do odważnego dawania świadectwa przywiązania do Chrystusa. Potwierdzeniem
                            wypowiedzianego Credo była adoracja krzyża. Parafialne świętowanie zakończyła adoracja Najświętszego
                            Sakramentu.
                        </p>
                        <p class="text-indent">Przygotowanie do Bierzmowania oprócz
                            lekcji religii obejmuje katechezy parafialne prowadzone przez kapłanów i katechetów oraz aktywny
                            udział w życiu wspólnot kościelnych.
                        </p><br>

                        <ul id='gallery'></ul>
                        <script>var l = 28, gallery_number = "10";</script>
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
