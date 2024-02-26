<?php

use PHPMailer\PHPMailer\PHPMailer;

include("Utils.inc.php");

$get = $_COOKIE["ID"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['Deconnexion'])) {
        setcookie('ID', '', -1);
        $page = $_SERVER['PHP_SELF'];
        header("Refresh: 0; url=$page");
    }
}

if (isset($_COOKIE["ID"])) {
    $is_connected = true;
    include("Conn_header.php");
} else {
    $is_connected = false;
    include("Deconn_header.php");
}

function getEmail($email, $conn)
{
    $query = "SELECT * FROM login_info WHERE mail = '" . $email . "';";
    try {
        $result = $conn->query($query);
        if ($result->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    } catch (mysqli_sql_exception $e) {
        echo "Problème : " . $e->getMessage();
    }
}

function forgetPasswd($mail, $conn, $MainRow)
{
    if (isset($_POST['forgetPassword'])) {
        $newPassword = bin2hex(random_bytes(8));
        $hash = password_hash($newPassword, PASSWORD_DEFAULT);
        $query = "UPDATE login_info SET Password = '" . $hash . "' WHERE ID = " . $MainRow['Login_info'] . ";";
        try {
            $conn->query($query);
            $object = "Nouveau mot de passe";
            $body = "Votre nouveau mot de passe est : " . $newPassword;
            EnvoieMail($mail, $object, $body, true);
            echo "<p class='info card' style='margin: 0 10px; padding: 10px 0'>Un mail de vérification vous à été envoyer avec un nouveau mot de passe.</p><br>";
        } catch (mysqli_sql_exception $e) {
            echo "Problème : " . $e->getMessage();
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["boutonProfil"])) {
        if ($_GET["boutonProfil"] == "") {
            $get = $_COOKIE["ID"];
            $is_your_profil = true;
        } else {
            $get = $_GET["boutonProfil"];
        }
    } else {
        header('Location: home.php');
    }
}

$MainRow = getSomethink('user', $get, $conn);
$UserName = $MainRow['Name'];
$Password = getSomethink('login_info', $MainRow['Login_info'], $conn)['Password'];
$mail = getSomethink('login_info', $MainRow['Login_info'], $conn)['mail'];
$Photo = getSomethink('photo', $MainRow['Photo'], $conn)['Link'];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Maladie.fr</title>
    <link rel="stylesheet" href="css/modify.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Maladie.fr/modify</title>
</head>
<body>
<div class="shadow card" style="margin: 0 10%; padding: 5% 10%;">
    <div class="card-body">
        <h1 class="card-title">Modifier le profile</h1>
        <form action="modify.php" method="post">
            <div class="mb-3">
                <label for="mail" class="form-label text-dark">Adresse email</label>
                <input type="email" class="form-control" name="mail" aria-describedby="emailHelp"
                       placeholder="Entrez votre adresse email">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label text-dark">Nom</label>
                <input type="text" class="form-control" name="name"
                       placeholder="Entrez votre nom">
            </div>
            <div class="mb-3">
                <label for="oldPassword" class="form-label text-dark">Ancien Mot de passe</label>
                <input type="password" class="form-control" name="oldPassword"
                       placeholder="Ancien Mot de passe">
                <button class="btn-link" name="forgetPassword">Mot de passe oublié ?</button>
            </div>
            <div class="mb-3">
                <label for="newPassword" class="form-label text-dark">Nouveau Mot de passe</label>
                <input type="password" class="form-control" name="newPassword"
                       placeholder="Nouveau Mot de passe">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $newPassword = filter_input(INPUT_POST, "newPassword", FILTER_SANITIZE_EMAIL);
                }
                ?>
            </div>
            <div class="mb-3">
                <label for="newPassword2" class="form-label text-dark">Confirmer le nouveau Mot de passe</label>
                <input type="password" class="form-control" name="newPassword2"
                       placeholder="Confirmer le nouveau Mot de passe">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $newPassword2 = filter_input(INPUT_POST, "newPassword2", FILTER_SANITIZE_EMAIL);
                    if (empty($newPassword2) && !empty($newPassword)) {
                        echo "<p class='warning'>Veuillez confirmer le mot de passe</p> <br>";
                    } else if ($newPassword != $newPassword2 && !empty($newPassword)) {
                        echo "<p class='warning'>Les mots de passe ne correspondent pas</p> <br>";
                    }
                }
                ?>
            </div>
            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = filter_input(INPUT_POST, "mail", FILTER_SANITIZE_EMAIL);
        if (!empty($email) && !getEmail($email, $conn)) {
            $query = "UPDATE login_info SET mail = '" . $email . "' WHERE ID = " . $MainRow['Login_info'] . ";";
            try {
                $conn->query($query);
                echo "<p class='success card' style='margin: 0 10px; padding: 10px 0'>Adresse email modifiée avec succès</p><br>";
            } catch (mysqli_sql_exception $e) {
                echo "Problème : " . $e->getMessage();
            }
        }
        $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
        if (!empty($name)) {
            $query = "UPDATE user SET Name = '" . $name . "' WHERE ID = " . $get . ";";
            try {
                $conn->query($query);
                echo "<p class='success card' style='margin: 0 10px; padding: 10px 0'>Nom modifié avec succès</p><br>";
            } catch (mysqli_sql_exception $e) {
                echo "Problème : " . $e->getMessage();
            }
        }

        if (isset($_POST['forgetPassword'])) {
            forgetPasswd($mail, $conn, $MainRow);
        }

        $oldPassword = filter_input(INPUT_POST, "oldPassword", FILTER_SANITIZE_STRING);
        $newPassword = filter_input(INPUT_POST, "newPassword", FILTER_SANITIZE_STRING);
        $newPassword2 = filter_input(INPUT_POST, "newPassword2", FILTER_SANITIZE_STRING);
        $hash = password_hash($newPassword, PASSWORD_DEFAULT);

        if (!empty($oldPassword) && !empty($newPassword) && !empty($newPassword2) && $newPassword == $newPassword2 && password_verify($oldPassword, $Password)) {
            $query = "UPDATE login_info SET Password = '" . $hash . "' WHERE ID = " . $MainRow['Login_info'] . ";";
            try {
                $conn->query($query);
                echo "<p class='success card' style='margin: 0 10px; padding: 10px 0'>Mot de passe modifié avec succès</p><br>";
            } catch (mysqli_sql_exception $e) {
                echo "Problème : " . $e->getMessage();
            }
        } else if (!empty($oldPassword) && !empty($newPassword) && !empty($newPassword2) && $newPassword != $newPassword2) {
            echo "<p class='warning card' style='margin: 0 10px; padding: 10px 0'>Les mots de passe ne correspondent pas</p><br>";
        } else if (!empty($oldPassword) && !password_verify($oldPassword, $Password)) {
            echo "<p class='warning card' style='margin: 0 10px; padding: 10px 0'>Mot de passe incorrect</p><br>";
        }
    }
    ?>
</div>
</body>
</html>
