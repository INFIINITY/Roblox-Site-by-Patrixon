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
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.0/css/all.css">
    <link rel="stylesheet" href="css/start.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="js/powiadomienie.js"></script>
    <title>Roblox | Logowanie</title>
</head>
<body>
<div class="powiadomienieTlo"></div>
<a href="Z&R.php" class="powrot"><i class="fa-solid fa-backward"></i></a>
<div class="container">
    <img src="zdjecia/logo.png" alt="roblox" class="logo">
    <form method="post" action="php_skrypty/logowanie.php">
        <input type="text" name="daneKontaktowe" placeholder="Nick, Email, Numer telefonu" required><br>
        <input type="password" name="haslo" placeholder="Hasło" required><br>
        <button type="submit" class="zalogujPrzycisk">Zaloguj</button>
        <?php 
        if (isset($_GET['status'])) {
            if ($_GET['status'] === 'nieistnieje') {
                echo '<script>pokazPowiadomienie("Błąd", "Wprowadziłeś niepoprawne dane lub taka osoba nie istnieje")</script>';
            }
        }
        ?>
    </form>
</div>
</body>
</html>