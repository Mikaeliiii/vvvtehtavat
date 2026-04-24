<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $viesti = $_POST["viesti"];

    // Muotoillaan tallennettava teksti
    $data = "Etunimi: $fname\nSukunimi: $lname\nViesti: $viesti\n---\n";

    // Tallennetaan tiedostoon
    file_put_contents("tulokset.txt", $data, FILE_APPEND);

    echo "Tiedot tallennettu!";
}
?>