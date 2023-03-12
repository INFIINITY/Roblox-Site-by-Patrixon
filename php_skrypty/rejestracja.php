<?php
include 'connect.php';
session_start();

if (isset($_SESSION['zarejestrowany'])) {
    header("Location: ../main.php");
    exit();
}

if (isset($_POST['dataUrodzenia']) && isset($_POST['nazwaUzytkownika']) && isset($_POST['haslo']) && isset($_POST['plec'])) {

    $dataUrodzenia = $_POST['dataUrodzenia'];
    $nazwaUzytkownika = $_POST['nazwaUzytkownika'];
    $haslo = hash('sha256', $_POST['haslo']);
    $plec = $_POST['plec'];

    $sql = "SELECT * FROM uzytkownicy WHERE nazwa_uzytkownika = '$nazwaUzytkownika'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        header("Location: ../rejestracja.php?status=istnieje&nick=" . $nazwaUzytkownika);
    } else {
        $sql = "INSERT INTO uzytkownicy (nazwa_uzytkownika, haslo, data_urodzenia, plec) VALUES ('$nazwaUzytkownika', '$haslo', '$dataUrodzenia', '$plec')";

        if ($conn->query($sql) === TRUE) {
            $_SESSION['zarejestrowany'] = true;
            $_SESSION['uzytkownik'] = $nazwaUzytkownika; // zapisanie nazwy użytkownika do sesji
            header("Location: ../main.php");
            exit();
        } else {
            echo "Błąd: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
}
?>
