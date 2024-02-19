<?php
include("Utils.inc.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['Deconnexion'])) {
        setcookie('ID', '', -1);
        $page = $_SERVER['PHP_SELF'];
        header("Refresh: 0; url=$page");
    } else if (isset($_POST['kick'])) {
        $userId = $_COOKIE["ID"];
        $itemId = $_POST['kick'];
        deleteItemFromCart($itemId, $userId, $conn);
        $count = countItemsCart($userId, $conn);
    }
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['buPanier'])) {
        $userId = $_COOKIE["ID"];
        $count = countItemsCart($userId, $conn);
    } else {
        header('Location: home.php');
    }
}

if (isset($_COOKIE["ID"])) {
    include("Conn_header.php");
} else {
    include("Deconn_header.php");
}

function createCart($userId, $conn)
{
    $total = 0;
    $query = "SELECT * FROM Cart WHERE Id = " . $userId . ";";
    try {
        $result = $conn->query($query);
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $total = $total + createDivItemCart($row["Items"], $conn);
            }
        } else {
            echo "Ce produit n'a aucun commentaire";
        }
    } catch (mysqli_sql_exception) {
        echo "Problème";
    }
    return $total;
}

function createDivItemCart($itemId, $conn)
{

    $dom = new DOMDocument('1.0', 'utf-8');
    $div1 = createElement($dom, 'div', '', array('class' => 'row row-cols-3 mb-3', 'style' => 'width: 90%; border-style:solid; border-radius: 10px; border-color: rgba(0, 0, 0, 0.25); margin:0px; margin-left: 5%;'));
    $div2 = createElement($dom, 'div', '', array('class' => 'col-3 pt-3 pb-2 text-center'));
    $div3 = createElement($dom, 'div', '', array('class' => 'col-7'));
    $div4 = createElement($dom, 'div', '', array('class' => 'col-1 text-center'));
    $form = createElement($dom, 'form', '', array('action' => 'panier.php', 'method' => 'post'));
    $bouton = createElement($dom, 'button', '', array('class' => 'bu-croix', 'name' => 'kick', 'value' => $itemId));
    $img2 = createElement($dom, 'img', '', array('src' => 'img/croix.png', 'style' => 'width: 80%;'));

    $query = "SELECT * FROM Items WHERE Id = " . $itemId . ";";
    try {
        $result = $conn->query($query);
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $url_image = getImage($row["Photo"], $conn);
                if ($url_image != "") {
                    $img = createElement($dom, 'img', '', array('src' => $url_image, 'class' => 'image-item', 'style' => 'block-size: 100px; width: 100px; height: 100px; border-radius: 20px; box-shadow: 0 0 5px;'));
                } else {
                    $img = createElement($dom, 'img', '', array('src' => 'img/default.png', 'class' => 'image-item', 'style' => 'block-size: 100px; width: 100px; height: 100px; border-radius: 20px; box-shadow: 0 0 5px;'));
                }

                $p1 = createElement($dom, 'p', $row["Name"], array('class' => 'nom-produit'));
                $p2 = createElement($dom, 'p', $row["Price"] . ' €', array('class' => 'prix'));

                $bouton->append($img2);
                $form->append($bouton);
                $div4->append($form);
                $div3->append($p1);
                $div3->append($p2);
                $div2->append($img);
                $div1->append($div2);
                $div1->append($div3);
                $div1->append($div4);
                $dom->appendChild($div1);
                echo $dom->saveXML();

                return $row["Price"];
            }
        } else {
            $p = createElement($dom, 'p', "Votre panier est vide!", array('class' => 'nom-produit'));
            $dom->appendChild($p);
            echo $dom->saveXML();
        }
    } catch (mysqli_sql_exception) {
        echo "Problème";
    }
}

function countItemsCart($userId, $conn)
{
    $queryCount = "SELECT COUNT(*) AS 'count' FROM Cart WHERE Id = " . $userId . ";";
    try {
        $result = $conn->query($queryCount);
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                return intval($row['count']);
            }
        } else {
            echo "Ce produit n'a aucun commentaire";
        }
    } catch (mysqli_sql_exception) {
        echo "Problème";
    }
}

function deleteItemFromCart($itemId, $userId, $conn)
{
    $queryCount = "SELECT COUNT(*) AS 'count' FROM Cart WHERE Id = " . $userId . " AND Items = " . $itemId . ";";
    try {
        $result = $conn->query($queryCount);
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $count = intval($row['count']);
            }
        } else {
            echo "Ce produit n'a aucun commentaire";
        }
    } catch (mysqli_sql_exception) {
        echo "Problème";
    }

    $queryDeleteItems = "DELETE FROM Cart WHERE Id = " . $userId . " AND Items = " . $itemId . ";";

    try {
        mysqli_query($conn, $queryDeleteItems);
    } catch (mysqli_sql_exception) {
        echo "PB! Cart";
    }

    $queryCart = "INSERT INTO Cart (Id, Items) VALUES ($userId, $itemId)";

    for ($i = 0; $i < $count - 1; $i++) {
        try {
            mysqli_query($conn, $queryCart);
        } catch (mysqli_sql_exception) {
            echo "PB! Cart";
        }
    }
}

function createBoutonPayer() {
    $dom = new DOMDocument('1.0', 'utf-8');

    $form = createElement($dom, 'form', '', array('action' => 'paiment.php', 'method' => 'get'));
    $bouton = createElement($dom, 'button', 'Payer', array('class' => 'bu-payer amazon-color'));

    $form->append($bouton);
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
    <link rel="stylesheet" href="css/Panier_page.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Maladie.fr/panier</title>
</head>

<body class="d-flex flex-column h-100">
    <div class="row row-cols-3" style="margin-top: 100px; margin-right:0px; margin-left: 0px;">
        <div class="col-4 pt-3 pb-3 text-center" style="font-size: 30px;">
            <?php
            if ($count > 0) {
                echo "Votre Panier";
            } else {
                echo "Votre Panier est vide";
            } ?>
            
        </div>
        <div class="col-2"></div>
        <div class="col-6 text-center pt-3 pb-3" style="padding-right: 0px; font-size: 28px;">
            <?php 
            if ($count == 1) {
                echo countItemsCart($_COOKIE['ID'], $conn) . " article";
            } else if ($count > 1) {
                echo countItemsCart($_COOKIE['ID'], $conn) . " articles";
            }
            ?>
        </div>
    </div>

    <div class="row row-cols-1 text-center" style="margin-top: 20px; margin-left:0px; margin-right:0px;">
        <?php
        if ($count > 0) {
            $total = createCart($userId, $conn);
        }
        ?>
    </div>

    <div class="row row-cols-2">
        <div class="col-6 text-center pt-3 pb-5" style="padding-right: 175px; font-size: 28px;">
            <?php
            if ($count > 0) {
                echo "Total: " . $total . " €";
            }
            ?>
        </div>
        <div class="col-6 text-center pt-3 pb-3" style="padding-right: 0px;">
            <?php 
            if ($count > 0) {
                createBoutonPayer();
            } 
            ?>
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