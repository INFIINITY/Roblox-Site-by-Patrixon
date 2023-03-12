<?php
session_start();

if (!isset($_SESSION['zalogowany']) && !isset($_SESSION['zarejestrowany'])) {
    header("Location: Z&R.php");
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
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.0/css/all.css">
    <link rel="stylesheet" href="css/glowna.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="js/powiadomienie.js"></script>
    <title>Roblox | Główna</title>
</head>
<body>
    <?php 
        include "menugora.php";
        include "menulewe.php";
    ?>
</body>
</html>