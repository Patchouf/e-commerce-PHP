<?php

// PHP
// projet.e.commerce.php@gmail.com
// ProjetECommercePHP

use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

// Permet de se connecter à la base de données
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

// Permet de récupérer le nombre d'élément d'une table
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

function getSomethink($table, $value, $conn)
{
    $query = "SELECT * FROM $table WHERE Id = '" . $value . "';";
    // echo $query;
    $result = $conn->query($query);
    $row = $result->fetch_assoc();
    return $row;
}

// Permet de récupérer le token d'identification d'un utilisateur
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

// Permet de récupérer l'image d'un Item
function getImage($photoId, $conn) {
  $query = "SELECT * FROM Photo WHERE Id = " . $photoId .";";
  try {
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
      // output data of each row
      while ($row = $result->fetch_assoc()) {
        return $row["Link"];
      }
    } else {
      echo "0 results";
    }
  } catch (mysqli_sql_exception) {
    echo "Problème";
  }
}

// Permet de créer un élément html (balise, class, style, innerhtml, ...)
function createElement($domObj, $tag_name, $value = NULL, $attributes = NULL)
{
    $element = ($value != NULL) ? $domObj->createElement($tag_name, $value) : $domObj->createElement($tag_name);

    if ($attributes != NULL) {
        foreach ($attributes as $attr => $val) {
            $element->setAttribute($attr, $val);
        }
    }

    return $element;
}

// Permet de créer les carroussels en fonction des catégories
function createCarousel($category, $id, $conn) {

  $dom = new DOMDocument('1.0', 'utf-8');
  $section = createElement($dom, 'section', '', array('class' => 'category-carousel', 'style' => 'margin-top: 10px; margin-right:0px; margin-left: 0px;'));
  $form = createElement($dom, 'form', '', array('action' => 'product.php', 'methode' => 'get'));
  $div = createElement($dom, 'div', '', array('class' => 'owl-carousel owl-theme'));
  
  $query = "SELECT * FROM Items WHERE Category = ". $id . ";";
  try {
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
      // output data of each row
      while ($row = $result->fetch_assoc()) {
        $url_image = getImage($row["Photo"], $conn);
        $div2 = createElement($dom, 'div', '', array('class' => 'category-item'));
        $img = createElement($dom, 'img', '', array('src' => $url_image, 'alt' => $row["Name"], 'class' => 'image-item', 'style' => 'block-size: 200px; width: 200px; height: 200px; border-radius: 20px; box-shadow: 0 0 5px;'));
        $titr2 = createElement($dom, 'h3', $row["Name"]);
        $bouton = createElement($dom, 'button', 'View Product', array('class' => 'add-to-cart', 'name' => 'product', 'value' => $row["Id"] . " " . $id));

        $div2->append($img);
        $div2->append($titr2);
        $div2->append($bouton);
        $div->append($div2);
      }
    } else {
      echo "0 results";
    }
  } catch (mysqli_sql_exception) {
    echo "Problème";
  }

  if($category != "") {
    $titre = createElement($dom, 'h3', $category);
    $section->append($titre);
  }
  $form->append($div);
  $section->append($form);
  $dom->appendChild($section);
  echo $dom->saveXML();
}

// phpinfo();

// function EnvoieMail()
// {
//   $to      = 'ya.fourni@icloud.com';
//   $subject = 'Mail php';
//   $message = 'Voici un mail de php';

//   $verif = mail($to, $subject, $message);
//   // $verif = mail("yann.fournier@ynov.com","Mail php","Voici un mail de php");
//   // $verif = mail("ya.fourni@icloud.com","Mail php","Voici un mail de php");
//   if ($verif) {
//     echo "Le mail à bien été envoyer!";
//   } else {
//     echo "Le mail n'a pas été envoyer";
//   }
// }


// function EnvoieMail()
// {
//   //Create an instance; passing `true` enables exceptions
//   $mail = new PHPMailer(true);

//   try {
//     //Server settings
//     $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
//     $mail->isSMTP();                                            //Send using SMTP
//     $mail->Host       = 'localhost';                     //Set the SMTP server to send through
//     // $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
//     // $mail->Username   = '';                     //SMTP username
//     // $mail->Password   = '';                               //SMTP password
//     // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
//     $mail->Port       = 1025;                               //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
//     $mail->SMTPAutoTLS = false;
//     // Expéditeur
//     $mail->setFrom('projet.e.commerce.php@gmail.com', 'Mailer');

//     //Destinataires
//     $mail->addAddress('ya.fourni@icloud.com', 'Recepient');     //Add a recipient
//     // $mail->addAddress('ellen@example.com');               //Name is optional
//     // $mail->addReplyTo('info@example.com', 'Information');
//     // $mail->addCC('cc@example.com');
//     // $mail->addBCC('bcc@example.com');

//     //Attachments
//     // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
//     // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

//     //Content
//     // $mail->isHTML(true);                                  //Set email format to HTML
//     $mail->Subject = 'Mail from code PHP';
//     $mail->Body    = 'This is the HTML message body <b>in bold!';
//     $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

//     $mail->send();
//     echo 'Message has been sent';
//   } catch (Exception $e) {
//     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
//   }
// }

// EnvoieMail();
