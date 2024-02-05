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
  <link rel="stylesheet" href="css/register.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary">
  <main class="form-signin w-100 m-auto">
    <form action="register.php" method="post">
      <h1 class="h3 mb-3 fw-normal">Incription</h1>
      <div class="form-floating">
        <input type="nom" class="form-control" name="username" placeholder="nom">
        <label for="floatingInput">Nom d'utilisateur</label>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
          if (empty($username)) {
            echo "Please enter a username <br>";
          }
        }
        ?>
      </div>
      <div class="form-floating">
        <input type="email" class="form-control" name="email" placeholder="name@example.com">
        <label for="floatingInput">Adresse mail</label>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
          if (empty($email)) {
            echo "Please enter a email <br>";
          }
        }
        ?>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" name="password" placeholder="Password">
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
      <div class="form-floating">
        <input type="password" class="form-control" name="confpassword" placeholder="Password">
        <label for="floatingPassword">Confirmer le mot de passe</label>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $confpassword = filter_input(INPUT_POST, "confpassword", FILTER_SANITIZE_SPECIAL_CHARS);
          if (empty($password) || $password != $confpassword) {
            echo "Please confirm the password <br>";
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
      <button class="btn btn-primary w-100 py-2" type="submit"> <a class="nav-link active">Connexion</a></button>
    </form>
  </main>


</body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $countUser = getNumber("user", $conn);
  $countPhoto = getNumber("photo", $conn);
  $countRating = getNumber("rating", $conn);
  $hash = password_hash($password, PASSWORD_DEFAULT);
  $token = password_hash($password, PASSWORD_BCRYPT);
  $default = 0;

  $queryLoginInfo = "INSERT INTO Login_info (Id, mail, Password) VALUES ($countUser, '$email', '$hash')";
  $queryAddress = "INSERT INTO Address (Id, Street, City, CP, State, Country) VALUES ($countUser, '', '', 2, '', '')";
  $queryPhoto = "INSERT INTO Photo (Id, Link) VALUES ($countPhoto, '')";
  $queryCommands = "INSERT INTO Commands (Id) VALUES ($countUser)";
  $queryCart = "INSERT INTO Cart (Id) VALUES ($countUser)";
  $queryInvoices = "INSERT INTO Invoices (Id) VALUES ($countUser)";
  $queryPreferPayement = "INSERT INTO Prefer_payment (Id, Payment) VALUES ($countUser, 0)";
  $queryRating = "INSERT INTO Rating (Id, Rating, Comment) VALUES ($countRating, 3, 0)";
  $queryUser = "INSERT INTO User (Id, Name, Login_info, Address, Photo, Commands, Cart, Invoices, Prefer_payment, Rating) VALUES ($countUser, '$username', $countUser, $countUser, $countPhoto, $countUser, $countUser, $countUser, 3, $countRating)";
  $queryAuth = "INSERT INTO Auth (Id, Token) VALUES ($countUser, '$token')";

  try {
    mysqli_query($conn, $queryLoginInfo);
  } catch (mysqli_sql_exception) {
    echo "PB! Login Info";
  }
  try {
    mysqli_query($conn, $queryAddress);
  } catch (mysqli_sql_exception) {
    echo "PB! Address";
  }

  try {
    mysqli_query($conn, $queryPhoto);
  } catch (mysqli_sql_exception) {
    echo "PB! Photo";
  }
  try {
    mysqli_query($conn, $queryCommands);
  } catch (mysqli_sql_exception) {
    echo "PB! Commands";
  }
  try {
    mysqli_query($conn, $queryCart);
  } catch (mysqli_sql_exception) {
    echo "PB! Cart";
  }
  try {
    mysqli_query($conn, $queryInvoices);
  } catch (mysqli_sql_exception) {
    echo "PB! Invoices";
  }
  try {
    mysqli_query($conn, $queryPreferPayement);
  } catch (mysqli_sql_exception) {
    echo "PB! Prefer Payement";
  }
  try {
    mysqli_query($conn, $queryRating);
  } catch (mysqli_sql_exception) {
    echo "PB! Rating";
  }
  try {
    mysqli_query($conn, $queryUser);
  } catch (mysqli_sql_exception) {
    echo "PB! User";
  }
  try {
    mysqli_query($conn, $queryAuth);
  } catch (mysqli_sql_exception) {
    echo "PB! Auth";
  }

  setcookie('SUID', $token);
  header('Location: home.php');
}
?>

</html>