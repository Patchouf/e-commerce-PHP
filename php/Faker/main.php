<?php
include 'FakerHandler.php';  // Inclure le fichier FakerHandler.php
include 'hash.php';  // Inclure le fichier hash.php

$produit = 20;
$user = 5;
$payment = 2;

echo "Faker: INSERT 20 PRODUITS, 5 USERS, 2 PAYMENTS...\n";

function main() {
    global $con, $payment, $produit, $user;

    if ($con === null) {
        echo "Faker: Failed to connect to database.\n";
        return;
    }

    $photo = 0;
    $category = 0;
    $rating = 0;
    $comment = 0;
    $login_info = 0;
    $address = 0;
    $commands = 0;
    $command = 0;
    $cart = 0;
    $invoicies = 0;
    $invoicie = 0;

    for ($i = 0; $i < $payment; $i++) {
        FakerHandler.create_payment($i);
    }

    for ($i = 0; $i < $produit; $i++) {
        create_product($i, $photo, $category, rand(0, $user), $rating);

        // dépendances
        create_photo($photo);
        create_category($category);
        create_rating($rating, $comment);
        create_comment($comment, rand(0, $user));

        $photo++;
        $category++;
        $rating++;
        $comment++;
    }

    for ($i = 0; $i < $user; $i++) {
        create_user($i, $login_info, $address, $photo, $commands, $cart, $invoicies, rand(0, $payment), $rating);

        // dépendances
        create_login_info($login_info);
        create_address($address);
        create_photo($photo);
        create_commands($commands, $command);

        for ($j = 0; $j < rand(0, 5); $j++) {
            create_command($command, rand(0, $produit));
        }

        for ($j = 0; $j < rand(0, 5); $j++) {
            create_cart($cart, rand(0, $produit));
        }

        create_invoices($invoicies, $invoicie);

        for ($j = 0; $j < rand(0, 5); $j++) {
            create_invoice($invoicie, rand(0, $produit), rand(0, $payment));
        }

        create_rating($rating, $comment);
        create_comment($comment, rand(0, $user));

        $login_info++;
        $address++;
        $photo++;
        $commands++;
        $cart++;
        $command++;
        $invoicies++;
        $invoicie++;
        $rating++;
        $comment++;
    }

    echo "Faker: Successfully ended.\n";
}

main();
?>
