<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="zdjecia/roblox.ico">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.0/css/all.css">
    <link rel="stylesheet" href="css/menu.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	  <script src="js/powiadomienie.js"></script>
    <title>Roblox | Główna</title>
</head>
<body>
<div id="lewe-menu">
  <div id="uzytkownik2">
    <h1><?php echo $_SESSION['uzytkownik']; ?></h1>
    <hr>
  </div>
  <ul id="lewa-nav">
    <li><a href="#"><i class="fa-regular fa-house"></i> Główna</a></li>
    <li><a href="#"><i class="fa-regular fa-user"></i> Profil</a></li>
    <li><a href="#"><i class="fa-regular fa-messages"></i> Wiadomości</a></li>
  </ul>
</div>
</body>
</html>