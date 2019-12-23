<?php
//"$servername" is voor het ip om de database te bereiken
//"$username" en "$password" spreken voor zich, dat zijn de inloggevens om de database binnen te komen
//"$schema" geeft specifiek aan welke database
    $servername = "127.0.0.1";
    $username = "u392629804_usergroep3";
    $password = "E&=9HA3l";
    $schema = "u392629804_groep3";
//Connectie aanmaken
    $conn = new mysqli($servername, $username, $password, $schema);

//De connectie checken of hij werkt
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

//Dit zorgt er voor dat het programma data haalt uit een bepaalde tabel, in dit geval uit de tabel "Boerenbedrijg", omdat dat staat aangegeven
    $sql = "SELECT * FROM Boerenbedrijf";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
// output data van elke rij 
        while($row = $result->fetch_assoc()) {
           echo "id: " . $row["bedrijf_id"]. " - Naam: " . $row["voornaam_eigenaar"]. " " . $row["naam_eigenaar"]. "<br>";
        }
    } else {
        echo "0 results";
    }

?>