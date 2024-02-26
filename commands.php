<?php
include("Utils.inc.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['Deconnexion'])) {
        setcookie('ID', '', -1);
        $page = $_SERVER['PHP_SELF'];
        header("Refresh: 0; url=$page");
    }
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['buCommandes'])) {
        echo "Bouton Commandes OK!!!!!!!!";
    } else {
        header('Location: home.php');
    }
}

if (isset($_COOKIE["ID"])) {
    include("Conn_header.php");
} else {
    include("Deconn_header.php");
}

function getCommands($conn)
{
    $queryCommands = "SELECT * FROM Commands WHERE UserId = " . $_COOKIE['ID'] . ";";
    try {
        $result = $conn->query($queryCommands);
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                createCommands($row['Id'], $row['Date'], $row['Total'], $conn);
            }
        } else {
            echo "Vous n'avez pas de commande";
        }
    } catch (mysqli_sql_exception) {
        echo "Problème";
    }
}

function createCommands($commandId, $date, $total, $conn)
{

    $dom = new DOMDocument('1.0', 'utf-8');
    $div1 = createElement($dom, 'div', '', array('class' => 'wrap-collabsible'));
    $input = createElement($dom, 'input', '', array('id' => $commandId, 'class' => 'toggle', 'type' => 'checkbox'));
    $label = createElement($dom, 'label', '', array('for' => $commandId, 'class' => 'lbl-toggle'));
    $p = createElement($dom, 'p', $date, array('style' => 'display:inline;'));
    $div2 = createElement($dom, 'div', '', array('class' => 'collapsible-content scroller', 'style' => 'scrollbar-color: grey black; display:block; font-weight: 15px; width: 100%; height: 100%;'));
    $div3 = createElement($dom, 'div', '', array('class' => 'content-inner', 'style' => 'padding-top: 25px;'));

    $queryCommand = "SELECT * FROM Command WHERE Id = " . $commandId . ";";
    try {
        $result = $conn->query($queryCommand);
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $itemInfo = getSomethink('Items', $row['Items'], $conn);


                $div4 = createElement($dom, 'div', '', array('style' => 'display: flex; flex-direction: row; justify-content:space-between; padding-left: 5%; padding-right: 5%; height:40px;'));
                $div5 = createElement($dom, 'div', $itemInfo['Name']);
                $div6 = createElement($dom, 'div', $itemInfo['Price'] . ' €');


                $div4->append($div5);
                $div4->append($div6);
                
                $div3->append($div4);
        
            }
        } else {
            echo "Ce produit n'a aucun commentaire";
        }
    } catch (mysqli_sql_exception) {
        echo "Problème";
    }

    // $div7 = createElement($dom, 'div', '', array('style' => 'display: flex; flex-direction: row; justify-content:space-between; padding-left: 5%; padding-right: 5%; height:20px;'));
    $div8 = createElement($dom, 'div', '', array('style' => 'display: flex; flex-direction: row; justify-content:space-between; padding-left: 5%; padding-right: 5%; height:40px; margin-bottom:5px, padding-top: 5%; border-top: solid 1px rgba(0,0,0,0.2)'));
    $div9 = createElement($dom, 'div', 'Total:');
    $div10 = createElement($dom, 'div', $total . ' €');

    $div8->append($div9);
    $div8->append($div10);

    // $div3->append($div7);
    $div3->append($div8);
    $div2->append($div3);
    $label->append($p);
    $div1->append($input);
    $div1->append($label);
    $div1->append($div2);
    $dom->appendChild($div1);
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
    <link rel="stylesheet" href="css/commands.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Maladie.fr/command</title>
</head>

<body class="d-flex flex-column h-100" style="margin-top: 40px;">
    <!--    Body    -->
    <div class="body container mt-5" style="margin-top: 50px; margin-right:0px; margin-left: 0px;">
        <h1>Historique des Commandes</h1>

        <!-- Liste dynamique des commandes -->
        <ul class="list-group " style="margin-top: 40px;">
            <li class="list-group-item">
                <?php
                getCommands($conn)
                ?>
            </li>
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