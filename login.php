<?php
include("Utils.inc.php")
?>

<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <script src="../assets/js/color-modes.js"></script>

  <meta charset="utf-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/login.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <title>Maladie.fr/login</title>
</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary">

  <main class="form-signin w-100 m-auto">
    <form action="login.php" method="post">
      <!-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
      <h1 class="h3 mb-3 fw-normal">Connexion</h1>

      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
        <label for="floatingInput">Adresse mail</label>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
          if (empty($email)) {
            echo "Please enter an email <br>";
          }
        }
        ?>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
        <label for="floatingPassword">Mot de passe</label>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
          if (empty($password)) {
            echo "Please enter a password <br>";
          }
        }
        ?>
      </div>

      <div class="form-check text-start my-3">
        <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
          Se souvenir de moi
        </label>
      </div>
      <button class="btn btn-primary w-100 py-2" type="submit"><a class="nav-link active">Connexion</a></button>
      <!-- <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2023</p> -->
    </form>
  </main>
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>

<?php

function getIdFromEmail($email, $conn)
{
  $query = "SELECT * FROM login_info WHERE mail = '" . $email . "';";
  try {
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
      // output data of each row
      while ($row = $result->fetch_assoc()) {
        //   echo "Nombre : " .  . "<br>";
        return $row["Id"];
      }
    } else {
      echo "0 results";
    }
  } catch (mysqli_sql_exception) {
    echo "Problème";
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // $hash = password_hash($password, PASSWORD_DEFAULT);
  $query = "SELECT Password FROM login_info WHERE mail = '$email';";

  try {
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
      // output data of each row
      while ($row = $result->fetch_assoc()) {
        $pass = $row["Password"];
      }
    } else {
      $pass = "0 results";
    }
  } catch (mysqli_sql_exception) {
    echo "Problème";
  }

  if (password_verify($password, $pass)) {
    $ident = getIdFromEmail($email, $conn);
    setcookie('ID', $ident);
    header('Location: home.php');
  } else {
    echo "You are not connected";
  }
}
?>