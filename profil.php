<?php
include("Utils.inc.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['Deconnexion'])) {
        setcookie('SUID', '', -1);
        $page = $_SERVER['PHP_SELF'];
        header("Refresh: 0; url=$page");
    }
}

if (isset($_COOKIE["SUID"])) {
    include("Conn_header.php");
} else {
    include("Deconn_header.php");
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/Profil_page.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Maladie.fr/profil</title>
</head>

<body class="d-flex flex-column h-100">
    <div class="row row-cols-2" style="margin-top: 60px; margin-left:5px;">
        <div class="col-4 pt-3 pb-2 text-center" style="border-right: 1px solid rgba(0, 0, 0, 0.25);">
            <img class="profil-picture" src="https://imgs.search.brave.com/1Y31ZLnS5hLEtoO1VUs8Zkdj7S_0pR4oyBPhDBSvztg/rs:fit:500:0:0/g:ce/aHR0cHM6Ly9saDMu/Z29vZ2xldXNlcmNv/bnRlbnQuY29tLy0z/OEgtNXpuVURQTS9B/QUFBQUFBQUFBSS9B/QUFBQUFBQUFBQS9B/TVp1dWNsbEY5bmZ2/UjMxeXIwZWlDZk1W/QzBnc2FYWUl3L3Bo/b3RvLmpwZw">
        </div>
        <div class="col-7 ">
            <p class="username">Yann Fournier</p>
            <p class="description-user">Cette page servira pour de template pour notre projet php</p>
        </div>
    </div>
    <p style="margin: 30px;margin-top: 50px; padding-left:5%;padding-bottom:10px; font-size:150%; border-bottom: 1px solid rgba(0, 0, 0, 0.25);">
        Produits vendu par l'utilisateur
    </p>

    <div id="carouselExampleDark" class="carousel carousel-dark slide" style="margin: 20px;">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <div class="row row-cols-2" style="margin-top: 20px; margin-left:5px;">
                    <div class="col-4 pt-3 pb-2 text-center" style="border-right: 1px solid rgba(0, 0, 0, 0.25);">
                        <img class="carousel-pic" src="https://m.media-amazon.com/images/I/91t7YlWwGfL._AC_UL640_FMwebp_QL65_.jpg">
                    </div>
                    <div class="col-7 ">
                        <p class="username">One piece tome 1</p>
                        <p class="description-user">Nous sommes à l'ère des pirates. Luffy, un garçon espiègle, rêve de
                            devenir le roi des pirates en trouvant le “One Piece”, un fabuleux trésor. Seulement, Luffy
                            a avalé un fruit du démon qui l'a transformé en homme élastique. Depuis, il est capable de
                            contorsionner son corps dans tous les sens, mais il a perdu la faculté de nager. Avec l'aide
                            de ses précieux amis, il va devoir affronter de redoutables pirates dans des aventures
                            toujours plus rocambolesques.
                            Également adapté en dessin animé pour la télévision et le cinéma, One Piece remporte un
                            formidable succès à travers le monde. Les aventures de Luffy au chapeau de paille ont
                            désormais gagné tous les lecteurs, qui se passionnent chaque trimestre pour les aventures
                            exceptionnelles de leurs héros.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <div class="row row-cols-2" style="margin-top: 20px; margin-left:5px;">
                    <div class="col-4 pt-3 pb-2 text-center" style="border-right: 1px solid rgba(0, 0, 0, 0.25);">
                        <img class="carousel-pic" src="https://m.media-amazon.com/images/I/91sKhhBDJ0L._AC_UL640_FMwebp_QL65_.jpg">
                    </div>
                    <div class="col-7 ">
                        <p class="username">One piece tome 3</p>
                        <p class="description-user">Nous sommes à l'ère des pirates. Luffy, un garçon espiègle, rêve de
                            devenir le roi des pirates en trouvant le “One Piece”, un fabuleux trésor. Seulement, Luffy
                            a avalé un fruit du démon qui l'a transformé en homme élastique. Depuis, il est capable de
                            contorsionner son corps dans tous les sens, mais il a perdu la faculté de nager. Avec l'aide
                            de ses précieux amis, il va devoir affronter de redoutables pirates dans des aventures
                            toujours plus rocambolesques.
                            Également adapté en dessin animé pour la télévision et le cinéma, One Piece remporte un
                            formidable succès à travers le monde. Les aventures de Luffy au chapeau de paille ont
                            désormais gagné tous les lecteurs, qui se passionnent chaque trimestre pour les aventures
                            exceptionnelles de leurs héros.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row row-cols-2" style="margin-top: 20px; margin-left:5px;">
                    <div class="col-4 pt-3 pb-2 text-center" style="border-right: 1px solid rgba(0, 0, 0, 0.25);">
                        <img class="carousel-pic" src="https://m.media-amazon.com/images/I/913wc4EdSlL._AC_UL640_FMwebp_QL65_.jpg">
                    </div>
                    <div class="col-7 ">
                        <p class="username">One piece tome 4</p>
                        <p class="description-user">Nous sommes à l'ère des pirates. Luffy, un garçon espiègle, rêve de
                            devenir le roi des pirates en trouvant le “One Piece”, un fabuleux trésor. Seulement, Luffy
                            a avalé un fruit du démon qui l'a transformé en homme élastique. Depuis, il est capable de
                            contorsionner son corps dans tous les sens, mais il a perdu la faculté de nager. Avec l'aide
                            de ses précieux amis, il va devoir affronter de redoutables pirates dans des aventures
                            toujours plus rocambolesques.
                            Également adapté en dessin animé pour la télévision et le cinéma, One Piece remporte un
                            formidable succès à travers le monde. Les aventures de Luffy au chapeau de paille ont
                            désormais gagné tous les lecteurs, qui se passionnent chaque trimestre pour les aventures
                            exceptionnelles de leurs héros.</p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</body>
<!-- FOOTER -->
<footer class="footer mt-auto py-3 bg-body-tertiary">
    <div class="container">
        <p class="float-end"><a href="#">Back to top</a></p>
        <footer class="py-5">
            <div class="row">
                <div class="col-6 col-md-2 mb-3">
                    <h5>Nous</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Yann Fournier</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary"></a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Adriana
                                Pullig</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary"></a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Albéric Walsh de
                                Serrant</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-2 mb-3">
                    <h5>Project</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">PHP</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary"></a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">HTML/CSS</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary"></a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Base de
                                données</a></li>
                    </ul>
                </div>

                <div class="col-md-5 offset-md-1 mb-3">
                    <form>
                        <h5>Abonne toi à notre Newsletter</h5>
                        <p>Alerte pour les nouveaux produits et promotions de la semaine</p>
                        <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                            <label for="newsletter1" class="visually-hidden">Adresse mail</label>
                            <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                            <button class="btn btn-primary" type="button">S'abonner</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
                <p>&copy; E-commerce-PHP, Inc. Tout droits réserver.</p>
            </div>
        </footer>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

</html>