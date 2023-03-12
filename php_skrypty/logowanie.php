<?php
include 'connect.php';
session_start();

if (isset($_SESSION['zalogowany'])) {
    header("Location: ../main.php");
    exit();
}

if (isset($_POST['daneKontaktowe']) && isset($_POST['haslo'])) {
    $daneKontaktowe = $_POST['daneKontaktowe'];
    $haslo = hash('sha256', $_POST['haslo']);

    $sql = "SELECT * FROM uzytkownicy WHERE (nazwa_uzytkownika = '$daneKontaktowe' OR email = '$daneKontaktowe' OR numer_telefonu = '$daneKontaktowe') AND haslo = '$haslo'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['zalogowany'] = true;
        $_SESSION['uzytkownik'] = $row['nazwa_uzytkownika'];
        header("Location: ../main.php");
        exit();
    } else {
        header("Location: ../logowanie.php?status=nieistnieje");
        exit();
    }
}

$conn->close();
?>
