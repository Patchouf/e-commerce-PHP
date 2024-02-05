<?php
try {
    $con = new PDO("mysql:host=localhost;dbname=votre_base_de_donnees", "votre_nom_utilisateur", "votre_mot_de_passe");
    // Remplacez les informations de connexion à la base de données par les vôtres
} catch (PDOException $e) {
    die("Failed to connect to database: " . $e->getMessage());
}

function generate_carousel($command_id) {
    global $con;

    $stmt = $con->prepare("SELECT Items.* FROM Commands JOIN Items ON Commands.Items = Items.Id WHERE Commands.Command = ?");
    $stmt->execute([$command_id]);
    $items = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (count($items) > 0) {
        echo '<div id="carousel' . $command_id . '" class="carousel slide" data-ride="carousel">';
        echo '<div class="carousel-inner">';

        $active = true;
        foreach ($items as $item) {
            echo '<div class="carousel-item' . ($active ? ' active' : '') . '">';
            echo '<div class="card" style="width: 18rem;">';
            echo '<img src="' . $item['Photo'] . '" class="card-img-top" alt="' . $item['Name'] . '">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $item['Name'] . '</h5>';
            echo '<p class="card-text">' . $item['Description'] . '</p>';
            echo '<p class="card-text">Price: $' . $item['Price'] . '</p>';
            echo '</div></div></div>';

            $active = false;
        }

        echo '</div>';
        echo '<a class="carousel-control-prev" href="#carousel' . $command_id . '" role="button" data-slide="prev">';
        echo '<span class="carousel-control-prev-icon" aria-hidden="true"></span>';
        echo '<span class="sr-only">Previous</span></a>';
        echo '<a class="carousel-control-next" href="#carousel' . $command_id . '" role="button" data-slide="next">';
        echo '<span class="carousel-control-next-icon" aria-hidden="true"></span>';
        echo '<span class="sr-only">Next</span></a>';
        echo '</div>';
    }
}

function generate_command_list() {
    global $con;

    $stmt = $con->query("SELECT * FROM Commands");
    $commands = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($commands as $command) {
        echo '<li class="list-group-item">';
        echo '<h5>Command #'.$command['Id'].'</h5>';
        generate_carousel($command['Id']);
        echo '</li>';
    }
}

?>