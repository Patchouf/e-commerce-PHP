<?php 
  include("Utils.inc.php")
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
</head>

<body class="d-flex flex-column h-100">
    <header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">E-commerce</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
                <ul class=" collapse navbar-collapse navbar-nav me-auto mb-2 mb-md-0" id="navbarCollapse">
                    <li class="nav-item">
                        <a class="nav-link active" href="home.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="profil.html">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="panier.html">Panier</a>
                    </li>
                    <li>
                        <img src="https://lh3.googleusercontent.com/fife/AGXqzDlUHhocjkHyJwhcbSpJdNBHBuaqyF-Pe3_QIGUZUlp0mK-amxSiGQSsN_6-aseS9EQu4xOuQ5syzHZei9NLhlgSEYuUJZXIKLUO4JghqbqKYm9uGjXz2DI-0mIYSUaIB8cld5mgFQP5EFdb9oH6T-q9sfqHxajqYJXJc-XIDL3IBjHLNd5oWIAthjcxasY4J7et7K5-ZBbx8kqGe4MY0nEfF-nRVTX1pnKgKrQh-T_K-xHjOH6ufR8AVz0xRPXSG_7sb1nCC6KYFjbmSVgXIZ69DIxznycR6g_AsKaFWc3DvX2gwxi9peY7GGC70HQPNnmNUsU7aLNQBz3607kY_EjVcR_LKo8EZaw4z7ua2sYSz_KSdW2so2wdrv7HjAFv21YTTOJXpDgul_5QJkNT67wM8MJgsdYKZiIi9d9ENhxIfQVWH78Jk2ZpK7tgmtzoKCjn-xDrVvzSrg57fQSYMI7V4AQ_KoVMjx8o3iPrGkYiI9STC1QXJZ-yuEg-VM2LvHU7s-uYHc3O8-3I1XOj0zOsJ9W8AXtb3SPNYRHOJJej9v0eVx9DIE42N-btl3MgB1jX4yfOlZdPie39E-xYQpCZetvVWNAoCgHqSC1nX0Aw5_e9onrREmZNTufOYozQChHmE6fQxGH8IqjEjwjzhmJxedYo6kxEnaU1nxpp__x8JYl5QZ7pbDd3RdLBJBImMe1kgt8RJkuBIwAlnCxrsn02zOnvWF2pkctsaS1yqMX0u6it0E8LZBwXzvRVs0f9tedmVsm22ncLg-ENvwP0Hdvx_jDKmUuiomUENL6-8qv156Xfw7_oOQjs3SeYE0cGtEY3xcGd5Nci5Aq4MFX71g8xHMyN43Mcgt_hm09T77DVMwpRL0B5HMbxw2KnkjF-1hcNo7Ap01fAZVbs44Vo3rnpmznGH_5n_zclSI4YFn45z49huYnp0L8PmBC85ibWDsmU5oKgmo7HjaCaoWI46MAkOSbOizVIjR7MXNUMkQZJ4caEw4WF18y-je38LQ3N_4Hl9iD_hDnpVZ6MedkRRHgbR4fHo6WFtrPI-JzWWhDZwuXVXmQwwj9yLLkXolJHTYiDzqeDIYtqO5BtdSBe9OlXEoSK1GXLEuYuZTGfN5BuJ7-WeRz0kf2Iev7Rf5TtGj2DG9PN4O2U2GcBWu_aUcEqEpwDqHpnqN6c87G6Y8rjkeox_LJZnCUf-ju80fc83OKRQt-G-Ofvd8yQbIykXnZSKlC4BmwaDKfXUS_VOijWf4LAak6Fac8zpr799jRJJiQJUQBAwxCpaiyo_pjiGY41aiIM9S_yl0ufZTZ2p3pAIFPN5T8Pckljqutf27uIEf5YYtLFiKo3bXUlx2o4MhuJzNaCeu5RmOHRWN1UjsXEoIo6=s64-c"
                            class="profil-picture-header">
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!--    Body    -->
    <div class="body container mt-5" style="margin-top: 50px; margin-right:0px; margin-left: 0px;">
        <h1>Historique des Commandes</h1>

        <!-- Liste dynamique des commandes -->
        <ul class="list-group">
            /?php
            // Connexion à la base de données (exemple avec MySQLi)
            $mysqli = new mysqli("localhost", "root", "root", "db");

            // Vérifier la connexion
            if ($mysqli->connect_error) {
            die("Erreur de connexion à la base de données: " . $mysqli->connect_error);
            }

            // Récupérer les commandes depuis la base de données
            $result = $mysqli->query("SELECT * FROM commandes");

            while ($row = $result->fetch_assoc()) {
            $commande_id = $row['id_commande'];
            $commande_nom = $row['nom_commande'];

            echo '
            <li class="list-group-item">';
                echo "<h5>Commande #$commande_id - $commande_nom</h5>";

                // Récupérer les produits de la commande
                $products_result = $mysqli->query("SELECT * FROM produits WHERE id_commande = $commande_id");

                echo '
                <div id="carouselExample" class="carousel slide" data-ride="carousel">';
                    echo '
                    <div class="carousel-inner">';

                        while ($product_row = $products_result->fetch_assoc()) {
                        $nom_produit = $product_row['nom_produit'];
                        $description_produit = $product_row['description_produit'];
                        $prix_produit = $product_row['prix_produit'];
                        $image_produit = $product_row['image_produit'];

                        echo '
                        <div class="carousel-item">';
                            echo '
                            <div class="card">';
                                echo "<img src='$image_produit' class='card-img-top' alt='$nom_produit'>";
                                echo '
                                <div class="card-body">';
                                    echo "<h5 class='card-title'>$nom_produit</h5>";
                                    echo "<p class='card-text'>$description_produit</p>";
                                    echo "<p class='card-text'>Prix : $$prix_produit</p>";
                                    echo '
                                </div>
                                ';
                                echo '
                            </div>
                            ';
                            echo '
                        </div>
                        ';
                        }

                        echo '
                    </div>
                    ';
                    echo '<a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">';
                        echo '<span class="carousel-control-prev-icon" aria-hidden="true"></span>';
                        echo '<span class="sr-only">Précédent</span>';
                        echo '</a>';
                    echo '<a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">';
                        echo '<span class="carousel-control-next-icon" aria-hidden="true"></span>';
                        echo '<span class="sr-only">Suivant</span>';
                        echo '</a>';
                    echo '
                </div>
                ';
                echo '
            </li>
            ';
            }

            // Fermer la connexion à la base de données
            $mysqli->close();
            ?>
        </ul>
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
                            <input id="newsletter1" type="text" class="form-control" placeholder="Email addres">
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
  <!-- Scripts Bootstrap et jQuery (assurez-vous d'inclure jQuery avant Bootstrap)
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->

</html>