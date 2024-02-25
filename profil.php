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
    $is_connected = true;
    include("Conn_header.php");
} else {
    $is_connected = false;
    include("Conn_header.php");
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["boutonProfil"])) {
        if ($_GET["boutonProfil"] == "") {
            $get = $_COOKIE["ID"];
        } else {
            $get = $_GET["boutonProfil"];
        }
    } else {
        header('Location: home.php');
    }
}

$MainRow = getSomethink('user', $get, $conn);
$UserName = $MainRow['Name'];
$Photo = getSomethink('photo', $MainRow['Photo'], $conn)['Link'];
$mail = getSomethink('login_info', $MainRow['Login_info'], $conn)['mail'];
$rating = getSomethink('rating', $MainRow["Rating"], $conn)["Rating"];
$commentId = getSomethink('rating', $MainRow["Rating"], $conn)["Id"];

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/Profil_page.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Maladie.fr/profil</title>
</head>
<body>
<div class="container-fluid" style="margin-bottom: 200px; margin-left: 50px">
    <div class="row">
        <div class="col-md-3">
            <!-- profil card -->
            <div class="card" style="margin-top: 50px;">
                <img class="profil-picture"
                     src="<?php echo ($Photo == null || $Photo == "None") ? 'https://static.vecteezy.com/ti/vecteur-libre/p3/26619142-defaut-avatar-profil-icone-vecteur-de-social-medias-utilisateur-photo-image-vectoriel.jpg' : $Photo ?>"
                     alt="profile">
                <h1><?php echo $UserName ?></h1>
                <p class="title"><?php echo $mail ?></p>
                <p>Rating: <?php echo $rating ?></p>
                <div style="margin: 24px 0;">
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                </div>
                <p>
                    <button>Contact</button>
                </p>
            </div>
        </div>
        <div class="col-md-7 shadow">
            <p style="margin-top: 50px; padding-left: 5%; padding-bottom: 10px; font-size: 150%; border-bottom: 1px solid rgba(0, 0, 0, 0.25);">
                Produits vendus par l'utilisateur</p>
            <div id="carouselExampleDark" class="carousel carousel-dark slide" style="margin: 20px;">
                <div class="carousel-inner">
                    <?php
                    $query = "SELECT * FROM items WHERE Seller = $get";
                    $result = $conn->query($query);

                    if ($result->num_rows > 0) {
                        $i = 0;
                        while ($row = $result->fetch_assoc()) {
                            $url_image = getImage($row["Photo"], $conn);
                            $active = ($i == 0) ? 'active' : '';
                            $productId = $row["Id"];
                            $productCategory = $row["Category"];
                            $url = "product.php?product=$productId+$productCategory";
                            echo "<div class='carousel-item $active' style='padding-left: 20%; padding-right: 20%; padding-top: 5%'>
                                        <img src='$url_image' class='d-block' style='height: 200px;' alt='...'>
                                        <div>
                                            <h5>" . $row["Name"] . "</h5>
                                            <p>" . $row["Description"] . "</p>
                                            <p>" . getSomethink('rating', $row['Rating'], $conn)['Rating'] . "/5</p>
                                            <p>" . $row["Price"] . "€</p>
                                            <div class='d-flex justify-content-between'>
                                                <a href='$url' class='btn btn-primary'>Voir le produit</a>
                                            </div>
                                        </div>
                                    </div>";
                            $i++;
                        }
                    } else {
                        echo "0 results";
                    }
                    ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                        data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                        data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <h6 class="border-bottom pb-2 mb-0">Commentaires</h6>
            <div class="col-md-10">
                <?php
                $query = "SELECT * FROM comment WHERE Id = $commentId";
                $result = $conn->query($query);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $comment = $row["Comment"];
                        $commentUserId = $row["User"];
                        $commentUserName = getSomethink('user', $commentUserId, $conn)['Name'];
                        $commentUserPhoto = getSomethink('photo', getSomethink('user', $commentUserId, $conn)['Photo'], $conn)['Link'];
                        $commentId = $row["Id"];
                        echo "<div class='my-3 p-3 bg-body rounded shadow-sm'>
                            <div class='d-flex justify-content-left'>
                                <img class='profil-picture' style='width: 50px; height: 50px;' src='" . ($commentUserPhoto == null || $commentUserPhoto == "None" ? 'https://static.vecteezy.com/ti/vecteur-libre/p3/26619142-defaut-avatar-profil-icone-vecteur-de-social-medias-utilisateur-photo-image-vectoriel.jpg' : $commentUserPhoto) . "' alt='...'>
                                <h6 class='border-bottom pb-2 mb-0'>$commentUserName</h6>
                            </div>
                            <div class='d-flex justify-content-left'>
                                <p class='text-muted'>$comment</p>
                            </div>
                        </div>";
                    }
                } else {
                    echo "0 results";
                }
                ?>
            </div>
        </div>
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
                                Fournier</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary"></a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Adriana
                                Pullig</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary"></a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Albéric Walsh
                                de
                                Serrant</a></li>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

</html>