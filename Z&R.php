<?php
session_start();
if (isset($_SESSION['zalogowany']) || isset($_SESSION['zarejestrowany'])) {
    header("Location: main.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="zdjecia/roblox.ico">
    <link rel="stylesheet" href="css/start.css">
    <title>Roblox</title>
</head>
<body>
    <center>
    <div class="container">
    <img src="zdjecia/logo.png" alt="roblox" class="logo">
    <button class="rejestrPrzycisk" onclick="window.location.href='rejestracja.php'">Zarejestruj się</button>
    <button class="logPrzycisk" onclick="window.location.href='logowanie.php'">Zaloguj się</button>
  </div>
    </center>
</body>
</html>