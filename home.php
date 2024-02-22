<?php
include("Utils.inc.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['Deconnexion'])) {
    setcookie('ID', '', -1);
    $page = $_SERVER['PHP_SELF'];
    header("Refresh: 0; url=$page");
  }
}

if ($_SERVER["REQUEST_METHOD"] == "GET" and isset($_GET['verify'])) {
  $USERID = intval($_GET['verify']);
  $token = getTokenFromId($USERID, $conn);
  if ($token == "0 results") {

    $queryAuth = "INSERT INTO Auth (Id, Token) VALUES ($USERID, 'Verify')";

    try {
      mysqli_query($conn, $queryAuth);
    } catch (mysqli_sql_exception) {
      echo "PB! Auth";
    }
    setcookie('ID', $USERID);
    $page = $_SERVER['PHP_SELF'];
    header("Refresh: 0; url=$page");
  } else if ($token != "Problème"){
    setcookie('AR', 'true');
    header('Location: home.php');
  } else {
    echo "PROBLEME!!!!!!!!!";
  }
}

if (isset($_COOKIE["ID"])) {
  include("Conn_header.php");
} else {
  include("Deconn_header.php");
}

// Permet de créer le rendu de la page home.php
function createHome($conn)
{
  $query = "SELECT * FROM Category;";
  try {
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
      // output data of each row
      while ($row = $result->fetch_assoc()) {
        createCarousel($row["Name"], $row["Id"], $conn);
      }
    } else {
      echo "0 results";
    }
  } catch (mysqli_sql_exception) {
    echo "Problème";
  }
}

function createRemerciement() {
  $dom = new DOMDocument('1.0', 'utf-8');
  $div1 = createElement($dom, 'div', '', array('style' => 'position:fixed; z-index: 100; top: 25%; left: 25%; background-color: rgba(255, 255, 255, 1);'));
  $div2 = createElement($dom, 'div', '', array('style' => 'background-color: rgba(0, 150, 0, 0.2);  padding:250px; padding-top:150px; padding-bottom:150px;'));
  $p1 = createElement($dom, 'p', 'Merci d avoir commander.');
  $p2 = createElement($dom, 'p', 'Un facture vous à été envoyer par mail.');
  $button = createElement($dom, 'button', '', array('style' => 'position: absolute; top: -10px; right: -10px; border-style: none; border-radius: 25%;', 'id' => 'croixtkt'));
  $img = createElement($dom, 'img', '', array('src' => 'img/croix.png', 'style' => 'width:30px;'));

  $button->append($img);
  $div2->append($p1);
  $div2->append($p2);
  $div2->append($button);
  $div1->append($div2);
  $dom->appendChild($div1);
  echo $dom->saveXML();
}

function createReprimende() {
  $dom = new DOMDocument('1.0', 'utf-8');
  $div1 = createElement($dom, 'div', '', array('style' => 'position:fixed; z-index: 100; top: 25%; left: 25%; background-color: rgba(255, 255, 255, 1);'));
  $div2 = createElement($dom, 'div', '', array('style' => 'background-color: rgba(150, 0, 0, 0.2);  padding:250px; padding-top:150px; padding-bottom:150px;'));
  $p = createElement($dom, 'p', 'Votre email est déja vérifier!');
  $button = createElement($dom, 'button', '', array('style' => 'position: absolute; top: -10px; right: -10px; border-style: none; border-radius: 25%;', 'id' => 'croixpastkt'));
  $img = createElement($dom, 'img', '', array('src' => 'img/croix.png', 'style' => 'width:30px;'));

  $button->append($img);
  $div2->append($p);
  $div2->append($button);
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
  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <title>Maladie.fr/home</title>
</head>

<body class="d-flex flex-column h-100">
    <?php 
    if (isset($_COOKIE['JP'])) {
      createRemerciement();
    }
    if (isset($_COOKIE['AR'])) {
      createReprimende();
    }
    ?>
  <h2 style="margin-top:100px;">Produits</h2>
  <?php
  createHome($conn);
  ?>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="js/rating.js"></script>
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
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Yann Fournier</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary"></a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Adriana Pullig</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary"></a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Albéric Walsh de Serrant</a>
            </li>
          </ul>
        </div>
        <div class="col-6 col-md-2 mb-3">
          <h5>Project</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">PHP</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary"></a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">HTML/CSS</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary"></a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Base de données</a></li>
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