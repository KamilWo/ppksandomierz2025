<?php
define('SITE_ROOT', __DIR__);
include_once(SITE_ROOT.'/include/start.php');
?>
<!DOCTYPE html>
<html lang="pl-PL">
<?php
include 'head.php';
?>
<body id="page-top">
<?php
include 'facebook.php';
?>
<div id="outer">
    <main role="main">
        <?php
        include 'menu.php';
        ?>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="website-section" id="about">
                <div class="website-section-content">
                    <h1 class="mb-0">
                        Oficjalna Strona Parafii Rzymsko-katolickiej pw.
                        <span class="text-primary">Podwyższenia Krzyża Świętego w&nbsp;Sandomierzu</span>
                    </h1>
                    <div class="subheading">
                        <span class="text-primary">Patron: św.&nbsp;Brat Albert Chmielowski</span>
                    </div>
                    <div class="social-icons">
                        <p><a class="social-icon" href="https://www.facebook.com/186369124901474"><i class="fab fa-facebook-f"></i></a></p>
                    </div>
                    <p class="lead mb-5">Zapraszamy Cię Gościu drogi do zapoznania się z treścią tej strony internetowej.
                        Znajdziesz tu wszystkie potrzebne informacje oraz kontakt do księży.</p>
                    <p class="lead mb-5"><strong>Kancelaria parafialna czynna:</strong><br>
                        Poniedziałek: 18.30 – 19.00<br>
                        Wtorek: 18.30 – 19.00<br>
                        Środa: nieczynne<br>
                        Czwartek: 18.30 – 19.00<br>
                        Piątek: 18.30 – 19.00<br>
                        Sobota: nieczynne</p>

                    <h3>Strona internetowa Diecezji Sandomierskiej:</h3>

                    <p><a href="https://www.diecezjasandomierska.pl/">https://www.diecezjasandomierska.pl/</a></p>

                    <div class="facebook-desktop-only">
                        <h3>Parafia Podwyższenia Krzyża Świętego na Facebooku:</h3>

                        <div class="fb-page"
                             data-href="https://www.facebook.com/Parafia-Podwy%C5%BCszenia-Krzy%C5%BCa-w-Sandomierzu-186369124901474/"
                             data-tabs="timeline" data-width="500" data-height="700" data-small-header="false"
                             data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                            <blockquote
                                    cite="https://www.facebook.com/Parafia-Podwy%C5%BCszenia-Krzy%C5%BCa-w-Sandomierzu-186369124901474/"
                                    class="fb-xfbml-parse-ignore"><a
                                        href="https://www.facebook.com/Parafia-Podwy%C5%BCszenia-Krzy%C5%BCa-w-Sandomierzu-186369124901474/">Parafia
                                    Podwyższenia Krzyża w Sandomierzu</a></blockquote>
                        </div>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Aktualnosci -->
            <section class="website-section" id="news">
                <div class="website-section-content">
                    <?php
                    include 'aktualnosci.php';
                    ?>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Intencje -->
            <section class="website-section" id="masses">
                <div class="website-section-content">
                    <?php
                    include 'intencje.php';
                    ?>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Prewencja i ochrona małoletnich -->
            <section class="website-section" id="prevention">
                <div class="website-section-content">
                    <?php
                    include 'prevention.php';
                    ?>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Komunikaty -->
            <section class="website-section" id="announcements">
                <div class="website-section-content">
                    <?php
                    include 'komunikaty.php';
                    ?>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Wizyta Duszpasterska -->
            <section class="website-section" id="pastoral_visit">
                <div class="website-section-content">
                    <?php
                    include 'wizyta_duszpasterska.php';
                    ?>
                </div>
            </section>
            <hr class="m-0" />
            <!-- O Parafii -->
            <section class="website-section" id="parish">
                <div class="website-section-content">
                    <?php
                    include 'parafia.php';
                    ?>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Liturgia -->
            <section class="website-section" id="mass_times">
                <div class="website-section-content">
                    <?php
                    include 'liturgia.php';
                    ?>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Grupy parafialne -->
            <section class="website-section" id="groups">
                <div class="website-section-content">
                    <?php
                    include 'grupy.php';
                    ?>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Duszpasterstwo dzieci i młodzieży -->
            <section class="website-section" id="ministry">
                <div class="website-section-content">
                    <?php
                    include 'duszpasterstwo_dim.php';
                    ?>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Kontakt -->
            <section class="website-section" id="contact">
                <div class="website-section-content">
                    <?php
                    include 'kontakt.php';
                    ?>
                </div>
            </section>
            <hr class="m-0" />
        </div>
    </main>
    <?php
    include 'footer.php';
    ?>
</div>

<a href="index.php#about" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


<?php
include 'scripts.php';
?>
</body>
</html>
