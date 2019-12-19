<?php
    $servername = "127.0.0.1";
    $username = "u392629804_usergroep3";
    $password = "E&=9HA3l";
    $schema = "u392629804_groep3";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $schema);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM Boerenbedrijf";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
           echo "id: " . $row["bedrijf_id"]. " - Naam: " . $row["voornaam_eigenaar"]. " " . $row["naam_eigenaar"]. "<br>";
        }
    } else {
        echo "0 results";
    }

?>