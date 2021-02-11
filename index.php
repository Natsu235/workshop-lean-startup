<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/cosmo/bootstrap.min.css" integrity="sha384-5QFXyVb+lrCzdN228VS3HmzpiE7ZVwLQtkt+0d9W43LQMzz4HBnnqvVxKg6O+04d" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css">

    <title>BeSafe - L'application qui vous protège</title>
</head>

<body>
    <header id="header">
        <div class="jumbotron">
            <div class="container">
                <div class="logo pb-5">
                    <!--<h1><i class="fa fa-chevron-right"></i> LOGO</h1>-->
                    <img src="assets/img/logo.png" width="236" height="80" />
                    <hr class="my-4">
                </div>
                <div class="catchphrase pb-5">
                    <h1 class="display-4">L'APPLICATION QUI<br>VOUS PROTÈGE !</h1>
                    <br>
                    <p class="d-sm-none d-md-block lead w-50">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc erat tellus, viverra vel eros nec, sodales luctus ligula. Morbi in laoreet quam. Suspendisse eu dictum nibh. Vivamus ac tempor orci, sed dignissim elit. Suspendisse id auctor ex.</p>
                    <p class="d-none d-sm-block d-md-none lead w-100">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc erat tellus, viverra vel eros nec, sodales luctus ligula. Morbi in laoreet quam. Suspendisse eu dictum nibh. Vivamus ac tempor orci, sed dignissim elit. Suspendisse id auctor ex.</p>
                </div>
                <div class="d-flex justify-content-start pb-5">
                    <a href="#">
                        <img class="play-store" src="assets/img/google-play.svg" alt="Google Play Store" width="269" height="80" />
                    </a>
                    <div style="width: 40px; height: 80px;"></div>
                    <a href="#">
                        <img class="app-store" src="assets/img/app-store.svg" alt="Apple App Store" width="240" height="80" />
                    </a>
                </div>
            </div>
        </div>
    </header>

    <div class="spacer"></div>

    <div id="preview">
        <div class="container">
            <div class="center mb-5">
                <img class="preview" src="assets/img/preview.svg" alt="Preview" width="80%" height="80%" />
                <!--<iframe src="https://www.youtube.com/watch?v=Ek6AIVcYFh4" width="820" height="540"></iframe>-->
            </div>
        </div>
    </div>

    <div class="container py-5">
        <hr class="my-4">
    </div>

    <div id="logos">
        <div class="container">
            <div class="center pb-5">
                <h1 class="my-5">Lorem ipsum dolor sit amet,<br>consectetur adipiscing elit.</h1><br>
                <div class="row mt-5">
                    <div class="col-sm">
                        <img class="logo1" src="assets/img/logo1.svg" alt="Logo 1" width="100" height="100" />
                        <h2>SIGNALER</h2><br>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="col-sm">
                        <img class="logo2" src="assets/img/logo2.svg" alt="Logo 2" width="100" height="100" />
                        <h2>AIDER</h2><br>
                        <p>Morbi in laoreet quam.</p>
                    </div>
                    <div class="col-sm">
                        <img class="logo3" src="assets/img/logo3.svg" alt="Logo 3" width="100" height="100" />
                        <h2>S'INFORMER</h2><br>
                        <p>Consectetur adipiscing elit. Nunc erat tellus, viverra vel.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="comments">
        <div class="center my-5 pb-5">
            <div id="commentCarousel" class="carousel slide" data-ride="carousel">
                <div class="container">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="quote" src="assets/img/quote.svg" alt="Quote" /><br><br><br><br>
                            <h2>« Lorem ipsum dolor sit amet, consectetur adipiscing elit. »</h2>
                            <h3>-vanessa_du973</h3>
                        </div>
                        <div class="carousel-item">
                            <img class="quote" src="assets/img/quote.svg" alt="Quote" /><br><br><br><br>
                            <h2>« Lorem ipsum dolor sit amet, consectetur adipiscing elit. »</h2>
                            <h3>-vanessa_du973</h3>
                        </div>
                        <div class="carousel-item">
                            <img class="quote" src="assets/img/quote.svg" alt="Quote" /><br><br><br><br>
                            <h2>« Lorem ipsum dolor sit amet, consectetur adipiscing elit. »</h2>
                            <h3>-vanessa_du973</h3>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#commentCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Précedent</span>
                    </a>
                    <a class="carousel-control-next" href="#commentCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Suivant</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div id="download">
        <div class="container">
            <div class="center btn-list my-5">
                <div class="row mt-5 mb-5">
                    <div class="col-sm">
                        <h1>14491</h1>
                        <h2>UTILISATEURS<br>ENREGISTRÉS</h2>
                    </div>
                    <div class="col-sm">
                        <h1>128</h1>
                        <h2>SIGNALEMENTS<br>CE MOIS-CI</h2>
                    </div>
                    <div class="col-sm">
                        <h1>78</h1>
                        <h2>TÉMOIGNAGES<br>CE MOIS-CI</h2>
                    </div>
                </div>
                <br>
                <div class="d-flex justify-content-center mt-5">
                    <a href="#">
                        <img class="play-store bg-dark" src="assets/img/google-play.svg" alt="Google Play Store" width="269" height="80" />
                    </a>
                    <div style="width: 40px; height: 80px;"></div>
                    <a href="#">
                        <img class="app-store bg-dark" src="assets/img/app-store.svg" alt="Apple App Store" width="240" height="80" />
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="spacer"></div>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- Popper.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js" integrity="sha512-BmM0/BQlqh02wuK5Gz9yrbe7VyIVwOzD1o40yi1IsTjriX/NGF37NyXHfmFzIlMmoSIBXgqDiG1VNU6kB5dBbA==" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

<footer id="footer">
    <div class="footer-content">
        <div class="container">
            <p>Conditions générales d’utilisation<br>
               Mentions légales<br>
               F.A.Q.</p>
        </div>
    </div>
</footer>
