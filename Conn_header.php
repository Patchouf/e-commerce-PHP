<header id="Conne_header">
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="home.php">Maladie.fr</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <!-- <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> -->
      </div>
      <ul class="collapse navbar-collapse navbar-nav me-auto mb-2 mb-md-0" id="navbarCollapse">
        <li class="nav-item">
          <a class="nav-link active" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <form action="panier.php" method="get">
            <button class="nav-link active" name="buPanier" style="margin-top: 15px;">Panier</button>
          </form>
          <!-- <a class="nav-link active" href="panier.php">Panier</a> -->
        </li>
        <li class="nav-item">
          <form action="commands.php" method="get">
            <button class="nav-link active" name="buCommandes" style="margin-top: 15px;">Commandes</button>
          </form>
          <!-- <a class="nav-link active" href="commands.php">Commandes</a> -->
        </li>
          <form action="profil.php" method="get">
              <button class="nav-link active" name="boutonProfil" style="margin-top: 15px;">Profil</button>
            </form>
        <!-- <li class="nav-item"><a class="nav-link active" href="profil.php">Profil</a> -->
        </li>
        <form action="home.php" method="post" style="margin: 0px;">
          <li class="nav-item"><button class="nav-link active" name="Deconnexion" value="deco">Deconnexion</button></li>
        </form>
      </ul>
    </div>
  </nav>
</header>

<?php

?>