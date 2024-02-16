<?php
include("Utils.inc.php");

$is_connected = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['Deconnexion'])) {
        setcookie('ID', '', -1);
        $page = $_SERVER['PHP_SELF'];
        header("Refresh: 0; url=$page");
        $is_connected = false;
    } else if (isset($_POST['addToCart'])) {
        $value = $_POST['addToCart'];
        addToCart($value, $conn);
    }
}

if (isset($_COOKIE["ID"])) {
    $is_connected = true;
    include("Conn_header.php");
} else {
    $is_connected = false;
    include("Deconn_header.php");
}

function createButonAddToCart($value)
{
    $dom = new DOMDocument('1.0', 'utf-8');
    $form = createElement($dom, 'form', '', array('action' => 'product.php', 'method' => 'post'));
    $bouton = createElement($dom, 'button', 'Ajout au panier', array('class' => 'add-to-cart', 'name' => 'addToCart', 'value' => $value));

    $form->append($bouton);
    $dom->appendChild($form);
    echo $dom->saveXML();
}

function addToCart($value, $conn)
{
    $userId = $_COOKIE["ID"];
    $queryCart = "INSERT INTO Cart (Id, Items) VALUES ($userId, $value)";
    try {
        mysqli_query($conn, $queryCart);
    } catch (mysqli_sql_exception) {
        echo "PB! Cart";
    }
}

function createDivAddComment($value)
{
    $dom = new DOMDocument('1.0', 'utf-8');
    $div = createElement($dom, 'div', '', array());
    $form = createElement($dom, 'form', '', array('action' => 'product.php', 'methode' => 'get'));
    $input = createElement($dom, 'input', '', array('type' => 'text', 'name' => 'inputCommentaire', 'placeholder' => 'Ajouter un commentaire'));
    $bouton = createElement($dom, 'button', 'Ajouter', array('class' => 'add-to-cart', 'name' => 'divAddComment', 'value' => $value));

    $form->append($input);
    $form->append($bouton);
    $div->append($form);
    $dom->appendChild($div);
    echo $dom->saveXML();
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['divAddComment'])) {
        $value = $_GET["divAddComment"];
        $comment = $_GET["inputCommentaire"];
        $userId = $_COOKIE["ID"];

        $queryComment = "INSERT INTO Comment (Id, Comment, User) VALUES ($value, '$comment', $userId)";
        try {
            mysqli_query($conn, $queryComment);
        } catch (mysqli_sql_exception) {
            echo "PB! Add Comment";
        }
    } else if (isset($_GET['product'])) {
        $get = $_GET["product"];
        $get_explode = explode(" ", $get);
        $value = $get_explode[0];
        $categoryName = $get_explode[1];
    } else {
        header('Location: home.php');
    }
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

function createCommentSpace($commentId, $conn)
{
    $query = "SELECT * FROM Comment WHERE Id = " . $commentId . ";";
    try {
        $result = $conn->query($query);
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                createComment($row["Comment"], $row["User"], $conn);
            }
        } else {
            echo "Ce produit n'a aucun commentaire";
        }
    } catch (mysqli_sql_exception) {
        echo "Problème";
    }
}

function createOwner($seller, $ownerId)
{
    $dom = new DOMDocument('1.0', 'utf-8');
    $form = createElement($dom, 'form', '', array('action' => 'profil.php', 'method' => 'get'));
    $button = createElement($dom, 'button', $seller, array('class' => 'nav-link active', 'style' => 'color: blue;', 'name' => 'boutonProfil', 'value' => $ownerId));

    $form->append($button);
    $dom->appendChild($form);
    echo $dom->saveXML();
}

function createComment($comment, $userId, $conn)
{
    $dom = new DOMDocument('1.0', 'utf-8');
    $form = createElement($dom, 'form', '', array('action' => 'profil.php', 'method' => 'get'));
    $div = createElement($dom, 'div', '', array('class' => 'd-flex text-body-secondary pt-3'));
    $button = createElement($dom, 'button', '', array('name' => 'boutonProfil', 'value' => $userId, 'style' => 'background-color: white; border-style: none; display:flex; flex-direction:row;'));
    $div2 = createElement($dom, 'div', '', array('class' => 'pb-3 mb-0 small lh-sm border-bottom'));

    $query = "SELECT * FROM User WHERE Id = " . $userId . ";";
    try {
        $result = $conn->query($query);
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $url_image = getImage($row["Photo"], $conn);
                if ($url_image != "") {
                    $img = createElement($dom, 'img', '', array('src' => $url_image, 'alt' => 'pp', 'style' => 'block-size: 50px; width: 50px; height: 50px; border-radius: 15%; margin-right:20px;'));
                } else {
                    $img = createElement($dom, 'img', '', array('src' => 'img/default.png', 'alt' => 'pp', 'style' => 'block-size: 50px; width: 50px; height: 50px; border-radius: 15%; margin-right:20px;'));
                }
                $strong = createElement($dom, 'strong', $row["Name"]);
                $p = createElement($dom, 'p', $comment, array('style' => 'width: 100%;'));
            }
        } else {
            echo "Ce produit n'a aucun commentaire";
        }
    } catch (mysqli_sql_exception) {
        echo "Problème";
    }

    $div2->append($strong);
    $div2->append($p);
    $button->append($img);
    $button->append($div2);
    $div->append($button);
    $form->append($div);
    $dom->appendChild($form);
    echo $dom->saveXML();
}

?>

<!doctype html>
<html lang="en" class="h-100" data-bs-theme="auto">

<head>
    <!-- <script src="../assets/js/color-modes.js"></script> -->
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
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
                    <p class="blog-post-meta"> par:
                        <?php createOwner($seller, $MainRow["Seller"]) ?>
                    </p>
                    <hr>
                    <img src="<?php echo $photo ?>" alt="Photo du produit" class="card">
                    <p><?php echo $description ?></p>
                    <h2>Prix: <?php echo $price ?> €</h2>
                    <h2>Rating: <?php echo $rating ?>/5</h2>
                    <?php
                    if ($is_connected) {
                        createButonAddToCart($value);
                    }
                    ?>
                </article>
            </div>
        </div>


        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <h6 class="border-bottom pb-2 mb-0">Commentaires et notes du produit</h6>
            <?php createCommentSpace($commentId, $conn) ?>
        </div>
        <?php
        if ($is_connected) {
            createDivAddComment($value);
        }
        ?>
    </main>
    <h3>Autres Produits</h3>
    <?php
    createCarousel("", $category, $conn)
    ?>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
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