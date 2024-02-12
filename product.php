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

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $value = $_GET["product"];
}

function getSomethink($table, $value, $conn)
{
    $query = "SELECT * FROM $table WHERE Id = '" . $value . "';";
    echo $query;
    $result = $conn->query($query);
    $row = $result->fetch_assoc();
    return $row;
}


$MainRow = getSomethink('items', $value, $conn);
$name = $MainRow["Name"];
$price = $MainRow["Price"];
$description = $MainRow["Description"];
$category = $MainRow["Category"];
$photo = getSomethink('photo', $MainRow["Photo"], $conn)["Link"];
$seller = getSomethink('user', $MainRow["Seller"], $conn)["Name"];
$rating = getSomethink('rating', $MainRow["Rating"], $conn)["Rating"];
$commentId = getSomethink('rating', $MainRow["Rating"], $conn)["Comment"];

?>

<!doctype html>
<html lang="en" class="h-100" data-bs-theme="auto">

<head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/product.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Maladie.fr/product</title>
</head>

<body class="d-flex flex-column h-100">
    <main class="container-fluid">
        <div class="row g-5 mt-5">
            <div class="col-md-8">
                <article class="blog-post">
                    <h2 class="display-5 link-body-emphasis mb-1"><?php echo $name ?></h2>
                    <p><?php echo $description ?></p>
                    <p class="blog-post-meta">par <a href="profil.php"><?php echo $seller ?></a></p>
                    <hr>
                    <img src="<?php echo $photo ?>" alt="Photo du produit" class="card">
                    <p><?php echo $description ?></p>
                    <h2>Prix: <?php echo $price ?> €</h2>
                    <h2>Rating: <?php echo $rating ?>/5</h2>
                </article>
            </div>
        </div>
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <h6 class="border-bottom pb-2 mb-0">Commentaires et notes du produit</h6>
            <div class="d-flex text-body-secondary pt-3">
                <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#007bff" />
                    <text x="50%" y="50%" fill="#007bff" dy=".3em">32x32
                    </text>
                </svg>
                <p class="pb-3 mb-0 small lh-sm border-bottom">
                    <strong class="d-block text-gray-dark">@username</strong>
                    Some representative placeholder content, with some information about this user. Imagine this being
                    some sort of status update, perhaps?
                </p>
            </div>
            <div class="d-flex text-body-secondary pt-3">
                <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#e83e8c" />
                    <text x="50%" y="50%" fill="#e83e8c" dy=".3em">32x32
                    </text>
                </svg>
                <p class="pb-3 mb-0 small lh-sm border-bottom">
                    <strong class="d-block text-gray-dark">@username</strong>
                    Some more representative placeholder content, related to this other user. Another status update,
                    perhaps.
                </p>
            </div>
            <div class="d-flex text-body-secondary pt-3">
                <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#6f42c1" />
                    <text x="50%" y="50%" fill="#6f42c1" dy=".3em">32x32
                    </text>
                </svg>
                <p class="pb-3 mb-0 small lh-sm border-bottom">
                    <strong class="d-block text-gray-dark">@username</strong>
                    This user also gets some representative placeholder content. Maybe they did something interesting,
                    and you really want to highlight this in the recent updates.
                </p>
            </div>
            <small class="d-block text-end mt-3">
                <a href="#"></a>
            </small>
        </div>
    </main>
    <section class="category-carousel">
        <h3>Autres Produits</h3>
        <form>
            <div class="owl-carousel owl-theme">
                <div class="category-item">
                    <img src="img/popular_item_1.jpg" alt="Category 1">
                    <h3>Category 1</h3>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
                <div class="category-item">
                    <img src="img/popular_item_1.jpg" alt="Category 2">
                    <h3>Category 2</h3>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
                <div class="category-item">
                    <img src="img/popular_item_1.jpg" alt="Category 2">
                    <h3>Category 4</h3>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
                <div class="category-item">
                    <img src="img/popular_item_1.jpg" alt="Category 2">
                    <h3>Category 2</h3>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
                <div class="category-item">
                    <img src="img/popular_item_1.jpg" alt="Category 2">
                    <h3>Category 2</h3>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
            </div>
        </form>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> -->
        <script>
            $(document).ready(function() {
                $(".owl-carousel").owlCarousel({
                    items: 4,
                    loop: true,
                    nav: true,
                    dots: false,
                    navText: ["<", ">"]
                });
            });
        </script>
    </section>
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
                <ul class="list-unstyled d-flex">
                    <li class="ms-3"><a class="link-body-emphasis" href="#">
                            <svg class="bi" width="24" height="24">
                                <use xlink:href="#twitter" />
                            </svg>
                        </a></li>
                    <li class="ms-3"><a class="link-body-emphasis" href="#">
                            <svg class="bi" width="24" height="24">
                                <use xlink:href="#instagram" />
                            </svg>
                        </a></li>
                    <li class="ms-3"><a class="link-body-emphasis" href="#">
                            <svg class="bi" width="24" height="24">
                                <use xlink:href="#facebook" />
                            </svg>
                        </a></li>
                </ul>
            </div>
        </footer>
    </div>
</footer>

</html>