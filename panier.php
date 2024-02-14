<?php 
  include("Utils.inc.php");

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['Deconnexion'])) {
        setcookie('ID', '', -1);
        $page = $_SERVER['PHP_SELF'];
        header("Refresh: 0; url=$page");
    }
}

if (isset($_COOKIE["ID"])) {
    include("Conn_header.php");
} else {
    include("Deconn_header.php");
}
?>

<!doctype html>
<html lang="en" class="h-100" data-bs-theme="auto">

<head>
    <!-- <script src="../assets/js/color-modes.js"></script> -->
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/Panier_page.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Maladie.fr/panier</title>
</head>

<body class="d-flex flex-column h-100">
    <div class="row row-cols-3" style="margin-top: 50px; margin-right:0px; margin-left: 0px;">
        <div class="col-4 pt-3 pb-3 text-center" style="font-size: 30px;">
            Votre Panier
        </div>
        <div class="col-2"></div>
        <div class="col-6 text-center pt-3 pb-3" style="padding-right: 0px;">
            <button class="bu-payer amazon-color"><a class="nav-link active" href="paiment.html" >Payer</a></button>
        </div>
    </div>

    <div class="row row-cols-1 text-center" style="margin-top: 20px; margin-left:0px; margin-right:0px;">
        <div class="row row-cols-3 mb-3"
            style="width: 90%; border-style:solid; border-radius: 10px; border-color: rgba(0, 0, 0, 0.25); margin:0px; margin-left: 5%;">
            <div class="col-3 pt-3 pb-2 text-center">
                <img class="panier-pic"
                    src="https://m.media-amazon.com/images/I/91t7YlWwGfL._AC_UL640_FMwebp_QL65_.jpg">
            </div>
            <div class="col-7">
                <p class="nom-produit">One piece tome 1</p>
                <p class="prix">7.99 €</p>
            </div>
            <div class="col-1 text-center">
                <button class="bu-croix">
                    <img src="../img/croix.png" style="width: 80%;">
                </button>
            </div>
        </div>
        <div class="row row-cols-3 mb-3"
            style="width: 90%; border-style:solid; border-radius: 10px; border-color: rgba(0, 0, 0, 0.25); margin:0px; margin-left: 5%;">
            <div class="col-3 pt-3 pb-2 text-center">
                <img class="panier-pic"
                    src="https://m.media-amazon.com/images/I/91sKhhBDJ0L._AC_UL640_FMwebp_QL65_.jpg">
            </div>
            <div class="col-7">
                <p class="nom-produit">One piece tome 3</p>
                <p class="prix">7.99 €</p>
            </div>
            <div class="col-1 text-center">
                <button class="bu-croix">
                    <img src="../img/croix.png" style="width: 80%;">
                </button>
            </div>
        </div>
        <div class="row row-cols-3 mb-3"
            style="width: 90%; border-style:solid; border-radius: 10px; border-color: rgba(0, 0, 0, 0.25); margin:0px; margin-left: 5%;">
            <div class="col-3 pt-3 pb-2 text-center">
                <img class="panier-pic"
                    src="https://m.media-amazon.com/images/I/913wc4EdSlL._AC_UL640_FMwebp_QL65_.jpg">
            </div>
            <div class="col-7">
                <p class="nom-produit">One piece tome 4</p>
                <p class="prix">7.99 €</p>
            </div>
            <div class="col-1 text-center">
                <button class="bu-croix">
                    <img src="../img/croix.png" style="width: 80%;">
                </button>
            </div>
        </div>
    </div>

    <div>
        <p style="margin-left: 70px; font-size: 28px;">Total: 23.97 €</p>
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
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Yann
                                Fournier</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary"></a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Adriana
                                Pullig</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary"></a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Albéric Walsh
                                de Serrant</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-2 mb-3">
                    <h5>Project</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">PHP</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary"></a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">HTML/CSS</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary"></a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Base de
                                données</a></li>
                    </ul>
                </div>
            </div>

            <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
                <p>&copy; E-commerce-PHP, Inc. Tout droits réserver.</p>
            </div>
        </footer>
    </div>
</footer>
</html>