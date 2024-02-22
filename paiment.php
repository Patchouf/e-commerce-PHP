<?php
include("Utils.inc.php");

// Insérer la commande dans la bdd

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['Deconnexion'])) {
        setcookie('ID', '', -1);
        $page = $_SERVER['PHP_SELF'];
        header("Refresh: 0; url=$page");
    } else if (isset($_POST['payer'])) {
        cartToCommands($month, $_POST['payer'], $conn);
    }
}

if (isset($_COOKIE["ID"])) {
    include("Conn_header.php");
} else {
    include("Deconn_header.php");
}

function cartToCommands($month, $tot, $conn)
{
    $total = 0;
    $countCommands = getNumber("Commands", $conn);
    $userId = $_COOKIE['ID'];
    $date = getNowDate($month);

    $queryCart = "SELECT * FROM Cart WHERE Id = " . $userId . ";";
    try {
        $result = $conn->query($queryCart);
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $itemId = $row["Items"];
                $queryCommand = "INSERT INTO Command (Id, Items) VALUES ($countCommands, $itemId)";
                try {
                    mysqli_query($conn, $queryCommand);
                } catch (mysqli_sql_exception) {
                    echo "PB! Commands";
                }
            }
        } else {
            echo "Ce produit n'a aucun commentaire";
        }
    } catch (mysqli_sql_exception) {
        echo "Problème";
    }

    $queryCommands = "INSERT INTO Commands (Id, UserId, Date, Total) VALUES ($countCommands, $userId, '$date', $tot)";
    echo $queryCommands . "<br>";
    try {
        mysqli_query($conn, $queryCommands);
    } catch (mysqli_sql_exception) {
        echo "PB! Commands";
    }

    $queryDeleteItemsFromCart = "DELETE FROM Cart WHERE Id = " . $userId . ";";

    try {
        mysqli_query($conn, $queryDeleteItemsFromCart);
    } catch (mysqli_sql_exception) {
        echo "PB! Cart";
    }

    setcookie('JP', 'True');
    header("Location: home.php");
}

function getEmailFromId($conn)
{
    $userId = $_COOKIE["ID"];

    $query = "SELECT mail FROM Login_info WHERE Id = " . $userId . ";";
    try {
        $result = $conn->query($query);
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                return $row["mail"];
            }
        } else {
            echo "Ce produit n'a aucun commentaire";
        }
    } catch (mysqli_sql_exception) {
        echo "Problème";
    }
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

    $query = "SELECT * FROM Items WHERE Id = " . $itemId . ";";

    try {
        $result = $conn->query($query);
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $li = createElement($dom, 'li', '', array('class' => 'list-group-item d-flex justify-content-between lh-sm'));
                $div = createElement($dom, 'div', '');
                $h6 = createElement($dom, 'h6', $row['Name'], array('class' => 'my-0'));
                $span = createElement($dom, 'span', $row["Price"] . " €", array('class' => 'text-body-secondary'));

                $div->append($h6);
                $li->append($div);
                $li->append($span);
                $dom->appendChild($li);
                echo $dom->saveXML();

                return $row["Price"];
            }
        } else {
            echo "Problème avec la générationdu cart";
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

function getCodePromo($codePromo, $conn)
{
    $dom = new DOMDocument('1.0', 'utf-8');

    $query = "SELECT * FROM Code_promo WHERE Code = '" . $codePromo . "';";

    try {
        $result = $conn->query($query);
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $li = createElement($dom, 'li', '', array('class' => 'list-group-item d-flex justify-content-between bg-body-tertiary'));
                $div = createElement($dom, 'div', '', array('class' => 'text-success'));
                $h6 = createElement($dom, 'h6', 'Promo code', array('class' => 'my-0'));
                $small = createElement($dom, 'small', $row['Code']);
                $reduction = (1 - floatval($row['Diminution'])) * 100;
                $span = createElement($dom, 'span', "-" . $reduction . "%", array('class' => 'text-success'));

                $div->append($h6);
                $div->append($small);
                $li->append($div);
                $li->append($span);
                $dom->appendChild($li);
                echo $dom->saveXML();

                return $row['Diminution'];
            }
        } else {
            echo "Problème avec la générationdu cart";
        }
    } catch (mysqli_sql_exception) {
        echo "Problème";
    }
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
    <title>Maladie.fr/paiement</title>
</head>

<body class="d-flex flex-column h-100">
    <!--    Body    -->
    <div class="container" style="margin-top: 100px; margin-right:0px; margin-left: 0px;">
        <main>

            <div class="row g-5">
                <div class="col-md-5 col-lg-4 order-md-last">
                    <!--  Your Cart ---------------------------------------------------------------------------------------------------------------------->
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-primary">Your cart</span>
                        <span class="badge bg-primary rounded-pill"><?php echo countItemsCart($_COOKIE['ID'], $conn); ?></span>
                    </h4>
                    <ul class="list-group mb-3">
                        <?php
                        $total = createCart($_COOKIE["ID"], $conn);
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            if (isset($_POST['boutonPromo'])) {
                                if ($_POST['CodePromo'] != 'AUCUN' and $_POST['CodePromo'] != 'aucun' and $_POST['CodePromo'] != 'None') {
                                    $total = $total * getCodePromo($_POST['CodePromo'], $conn);
                                }
                            }
                        }
                        ?>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total</span>
                            <strong><?php echo $total . " €" ?></strong>
                        </li>
                    </ul>

                    <form class="card p-2" action="paiment.php" method="post">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Code promo" name="CodePromo">
                            <button type="submit" class="btn btn-secondary" name="boutonPromo">Soumettre</button>
                        </div>
                    </form>
                </div>

                <!-- Address -------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                <div class="col-md-7 col-lg-8">
                    <h4 class="mb-3">Adresse de livraison</h4>
                    <form class="needs-validation" action="paiment.php" method="post">
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="firstName" class="form-label">Prénom</label>
                                <input type="text" class="form-control" name="prenom" placeholder="" value="" required>
                            </div>

                            <div class="col-sm-6">
                                <label for="lastName" class="form-label">Nom</label>
                                <input type="text" class="form-control" name="nom" placeholder="" value="" required>
                            </div>

                            <div class="col-12">
                                <label for="email" class="form-label">Email <span class="text-body-secondary">(Optional)</span></label>
                                <input type="email" class="form-control" name="email" placeholder="vous@exemple.com">
                            </div>

                            <div class="col-12">
                                <label for="address" class="form-label">Adresse</label>
                                <input type="text" class="form-control" name="adresse" placeholder="1234 Rue Voltaire" required>
                            </div>

                            <div class="col-md-5">
                                <label for="country" class="form-label">Pays</label>
                                <input type="text" class="form-control" name="pays" required>
                            </div>

                            <div class="col-md-4">
                                <label for="state" class="form-label">Département</label>
                                <input type="text" class="form-control" name="departement" required>
                            </div>

                            <div class="col-md-3">
                                <label for="zip" class="form-label">Ville</label>
                                <input type="text" class="form-control" name="ville" required>
                            </div>
                            <div ></div>
                        </div>

                        <hr class="my-4">

                        <!-- <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="same-address">
                            <label class="form-check-label" for="same-address">Shipping address is the same as my
                                billing address</label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="save-info">
                            <label class="form-check-label" for="save-info">Save this information for next time</label>
                        </div> -->

                        <!-- <hr class="my-4"> -->

                        <h4 class="mb-3">Payement</h4>

                        <div class="my-3">
                            <div class="form-check">
                                <input id="Paypal" name="paymentMethod" value="Paypal" type="radio" class="form-check-input" checked required>
                                <label class="form-check-label" for="credit">Paypal</label>
                            </div>
                            <div class="form-check">
                                <input id="debit" name="paymentMethod" value="Visa" type="radio" class="form-check-input" required>
                                <label class="form-check-label" for="debit">Visa</label>
                            </div>
                            <div class="form-check">
                                <input id="paypal" name="paymentMethod" value="MasterCard" type="radio" class="form-check-input" required>
                                <label class="form-check-label" for="paypal">MasterCard</label>
                            </div>
                            <div class="form-check">
                                <input id="paypal" name="paymentMethod" value="American Express" type="radio" class="form-check-input" required>
                                <label class="form-check-label" for="paypal">American Express</label>
                            </div>
                        </div>

                        <div class="row gy-3">
                            <div class="col-md-6">
                                <label for="cc-name" class="form-label">Propriétaire de la carte</label>
                                <input type="text" class="form-control" name="proprietaire" placeholder="" required>
                                <small class="text-body-secondary">Nom complet comme écrit sur la carte</small>
                            </div>

                            <div class="col-md-6">
                                <label for="cc-number" class="form-label">Numéro de la carte</label>
                                <input type="text" class="form-control" name="numero" placeholder="" required>
                            </div>

                            <div class="col-md-3">
                                <label for="cc-expiration" class="form-label">Date d'expiration</label>
                                <input type="text" class="form-control" name="expiration" placeholder="" required>
                            </div>

                            <div class="col-md-3">
                                <label for="cc-cvv" class="form-label">CVV</label>
                                <input type="text" class="form-control" name="cvv" placeholder="" required>
                            </div>
                        </div>

                        <hr class="my-4">

                        <button class="w-100 btn btn-primary btn-lg" type="submit" name="payer" value="<?php echo $total; ?>">Payer</button>
                    </form>
                </div>
            </div>
        </main>
    </div>
</body>

<!-- FOOTER ------------------------------------------------------------------------------------------------------------------------------------------------- -->
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
            </div>

            <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
                <p>&copy; E-commerce-PHP, Inc. Tout droits réserver.</p>
            </div>
        </footer>
    </div>
</footer>

</html>