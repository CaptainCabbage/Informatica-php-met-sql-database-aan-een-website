<?php
if ( isset($_POST)) {

    $gewasgroep = strip_tags($_POST['gewasgroep']);
    $opbrengst = strip_tags($_POST['opbrengst']);
    $bijzonderheden = strip_tags($_POST['bijzonderheden']);

    if (empty(gewasgroep) || empty(opbrengst)) {
        die('invoerfout! gewasgroep of opbrengst zijn niet gevuld');
    }

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

    // Insert data
    $sql = "INSERT INTO Gewassen (gewasgroep, gemmiddelde_opbrengst, bijzonderheden)
    VALUES ('{$gewasgroep}', '{$opbrengst}', '{$bijzonderheden}')";

    if ($conn->query($sql) === TRUE) {
        echo "Nieuw gewas toegevoegd!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>