<?php 
  include("Conn.inc.php")
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
  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
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
            <a class="nav-link active" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="login.php">Connexion</a>
          </li>
          <li class="nav-item"><a class="nav-link active" href="register.php">Inscription</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- CATEGORY -->
  <section class="category-carousel" style="margin-top: 50px; margin-right:0px; margin-left: 0px;">
    <h2>Produits</h2>
    <h3>Livres</h3>
    <form>
      <div class="owl-carousel owl-theme">
        <div class="category-item">
          <img src="img/popular_item_1.jpg" alt="Category 1">
          <h3>Category 1</h3>
          <button class="add-to-cart">View Product</button>
        </div>
        <div class="category-item">
          <img src="img/popular_item_1.jpg" alt="Category 2">
          <h3>Category 2</h3>
          <button class="add-to-cart">View Product</button>
        </div>
        <div class="category-item">
          <img src="img/popular_item_1.jpg" alt="Category 2">
          <h3>Category 2</h3>
          <button class="add-to-cart">View Product</button>
        </div>
        <div class="category-item">
          <img src="img/popular_item_1.jpg" alt="Category 2">
          <h3>Category 2</h3>
          <button class="add-to-cart">View Product</button>
        </div>
        <div class="category-item">
          <img src="img/popular_item_1.jpg" alt="Category 2">
          <h3>Category 2</h3>
          <button class="add-to-cart">View Product</button>
        </div>
        <div class="category-item">
          <img src="img/popular_item_1.jpg" alt="Category 2">
          <h3>Category 4</h3>
          <button class="add-to-cart">View Product</button>
        </div>
        <div class="category-item">
          <img src="img/popular_item_1.jpg" alt="Category 2">
          <h3>Category 2</h3>
          <button class="add-to-cart">View Product</button>
        </div>
        <!-- Add more category items as needed -->
      </div>
    </form>
  </section>
  <section class="category-carousel" style="margin-top: 10px; margin-right:0px; margin-left: 0px;">
    <h3>Maison</h3>
    <form action="product.php" method="get">
      <div class="owl-carousel owl-theme">
        <div class="category-item">
          <img src="img/popular_item_1.jpg" alt="Category 1">
          <h3>Category 1</h3>
          <button class="add-to-cart">View Product</button>
        </div>
        <div class="category-item">
          <img src="img/popular_item_1.jpg" alt="Category 2">
          <h3>Category 234</h3>
          <button class="add-to-cart" name="product" value="4">View Product</button>
        </div>
        <div class="category-item">
          <img src="img/popular_item_1.jpg" alt="Category 3">
          <h3>Category 3</h3>
          <button class="add-to-cart">View Product</button>
        </div>
        <div class="category-item">
          <img src="img/popular_item_1.jpg" alt="Category 4">
          <h3>Category 4</h3>
          <button class="add-to-cart">View Product</button>
        </div>
        <div class="category-item">
          <img src="img/popular_item_1.jpg" alt="Category 5">
          <h3>Category 5</h3>
          <button class="add-to-cart">View Product</button>
        </div>
        <div class="category-item">
          <img src="img/popular_item_1.jpg" alt="Category 2">
          <h3>Category 2</h3>
          <button class="add-to-cart">View Product</button>
        </div>
        <div class="category-item">
          <img src="img/popular_item_1.jpg" alt="Category 2">
          <h3>Category 2</h3>
          <button class="add-to-cart" >View Product</button>
        </div>
        <!-- Add more category items as needed -->
      </div>
    </form>
  </section>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script>
    $(document).ready(function () {
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