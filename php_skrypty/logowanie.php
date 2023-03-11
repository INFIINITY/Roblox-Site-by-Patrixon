<?php
include 'connect.php';

if (isset($_COOKIE['zalogowany'])) {
    header("Location: ../main.php");
    exit();
}

if (isset($_POST['daneKontaktowe']) && isset($_POST['haslo'])) {
    $daneKontaktowe = $_POST['daneKontaktowe'];
    $haslo = hash('sha256', $_POST['haslo']);

    $sql = "SELECT * FROM uzytkownicy WHERE (nazwa_uzytkownika = '$daneKontaktowe' OR email = '$daneKontaktowe' OR numer_telefonu = '$daneKontaktowe') AND haslo = '$haslo'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        setcookie('zalogowany', true, time() + 3600, "/");
        header("Location: ../main.php");
        exit();
    } else {
        header("Location: ../logowanie.php?status=nieistnieje");
        exit();
    }
}

$conn->close();
?>