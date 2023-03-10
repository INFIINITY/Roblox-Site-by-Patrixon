<?php
include 'connect.php';
if(isset($_POST['dataUrodzenia']) && isset($_POST['daneKontaktowe']) && isset($_POST['haslo']) && isset($_POST['plec'])) {

    $dataUrodzenia = $_POST['dataUrodzenia'];
    $daneKontaktowe = $_POST['daneKontaktowe'];
    $haslo = hash('sha256', $_POST['haslo']);
    $plec = $_POST['plec'];

    $sql = "SELECT * FROM uzytkownicy WHERE dane_kontaktowe = '$daneKontaktowe'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "istnieje";
    } else {
        $sql = "INSERT INTO uzytkownicy (dane_kontaktowe, haslo, data_urodzenia, plec) VALUES ('$daneKontaktowe', '$haslo', '$dataUrodzenia', '$plec')";

        if ($conn->query($sql) === TRUE) {
            echo "dodano";
        } else {
            echo "Błąd: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();

}

?>
