<?php

use function PHPSTORM_META\type;

$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "projet-ecommerce";
$conn = "";

try {
  $conn = mysqli_connect(
    $db_server,
    $db_user,
    $db_pass,
    $db_name
  );
} catch (mysqli_sql_exception) {
  echo "Could not connect! <br>";
}

function getNumber($table, $conn)
{
  $query = "SELECT MAX(Id) AS max FROM " . $table . ";";
  try {
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
      // output data of each row
      while ($row = $result->fetch_assoc()) {
        return intval($row["max"], 10) + 1;
      }
    } else {
      echo "0 results";
    }
  } catch (mysqli_sql_exception) {
    echo "Problème";
  }
}

function getToken($email, $hash, $conn)
{
  $query = "SELECT Token FROM Auth JOIN User ON Auth.Id = User.Id JOIN Login_info ON User.Id = Login_info.Id WHERE Login_info.mail = '" . $email . "' AND Login_info.Password = '" . $hash . "';";
  try {
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
      // output data of each row
      while ($row = $result->fetch_assoc()) {
        //   echo "Nombre : " .  . "<br>";
        return $row["token"];
      }
    } else {
      echo "0 results";
    }
  } catch (mysqli_sql_exception) {
    echo "Problème";
  }
}

function EnvoieMail() {
  ini_set("SMTP", "smtp.gmail.com");
  ini_set('smtp_port', 1025);
  $verif = mail("yann.fournier@ynov.com","Mail php","Voici un mail de php");
  if ($verif) {
    echo "Le mail à bien été envoyer!";
  } else {
    echo "Le mail n'a pas été envoyer";
  }
}

EnvoieMail();
