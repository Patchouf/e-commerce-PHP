<?php
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
    } catch (mysqli_sql_exception $ex) {
        echo "Could not connect! <br>";
    }

    function getNumber($table, $conn) {
        $query = "SELECT MAX(Id) AS max FROM " . $table . ";";
        try {
        $result = $conn->query($query);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              echo "Nombre : " . $row["max"] . "<br>";
            }
          } else {
            echo "0 results";
          }
        } 
        catch(mysqli_sql_exception) {
        echo "That username is taken";
        }
    }
?>
