<?php
require_once 'vendor/autoload.php';  // Assurez-vous d'avoir installé Faker via Composer

$faker = Faker\Factory::create();

try {
    $con = new PDO("mysql:host=localhost;dbname=votre_base_de_donnees", "votre_nom_utilisateur", "votre_mot_de_passe");
    // Remplacez les informations de connexion à la base de données par les vôtres
} catch (PDOException $e) {
    die("Faker: Failed to connect to database: " . $e->getMessage());
}

function create_user($i, $login_info, $address, $photo, $commands, $cart, $invoices, $prefer_payment, $rating) {
    global $con, $faker;
    
    $data = [
        $i, $faker->name, $login_info, $address, $photo,
        $commands, $cart, $invoices, $prefer_payment, $rating
    ];

    $stmt = $con->prepare("INSERT INTO User (Id, Name, Login_info, Address, Photo, Commands, Cart, Invoices, Prefer_payment, Rating) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute($data);
}

function create_product($i, $photo, $category, $seller, $rating) {
    global $con, $faker;

    $data = [
        $i, $faker->name, $faker->randomNumber(), $faker->text, $photo,
        $category, $seller, $rating
    ];

    $stmt = $con->prepare("INSERT INTO Items (Id, Name, Price, Description, Photo, Category, Seller, Rating) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute($data);
}

// Ajoutez les autres fonctions de création de données de manière similaire

?>
