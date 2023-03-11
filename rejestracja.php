<?php
if(isset($_COOKIE['zalogowany']) || isset($_COOKIE['zarejestrowany'])) {
    header("Location: main.php");
    exit;
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
    <title>Roblox | Rejestracja</title>
    <style>
</style>
</head>
<body>
<div class="powiadomienieTlo"></div>
<div class="containerRejestracja">
    <div class="headerContainer">
        <div class="powrotRejestracja">
            <a href="Z&R.php"><i class="fa-solid fa-x"></i></a>
        </div>
        <div class="srodekHeader">
            Zarejestruj się
        </div>
    </div>
    <hr>
    <form method="post" action="php_skrypty/rejestracja.php">
        <label>Data Urodzenia</label>
        <input type="date" placeholder="Data" id="dataUrodzenia" name="dataUrodzenia" required><br>
        <label>Nazwa Użytkownika</label>
        <input type="text" placeholder="Nick" name="nazwaUzytkownika" required><br>
        <label>Hasło <i id="widocznoscHasla" class="fa-solid fa-eye"></i></label>
        <input id="hasloRejestracja" type="password" placeholder="Hasło" name="haslo" required><br>
        <label>Płeć</label>
        <div class="plecPrzyciski">
            <button type="button" class="plecPrzyciskM" onclick="wyborPlci('mezczyzna')"><i class="fa-solid fa-person"></i></button>
            <button type="button" class="plecPrzyciskK" onclick="wyborPlci('kobieta')"><i class="fa-solid fa-person-dress"></i></button>
        </div>
        <input type="hidden" name="plec" id="plecBaza" required>
        <br>
        <button type="submit" class="rejestracjaPrzycisk">Zarejestruj się</button>
        <?php
            if (isset($_GET['status'])) {
                if ($_GET['status'] === 'istnieje') {
                    $nick = $_GET['nick'];
                    echo '<script>pokazPowiadomienie("Błąd", "Osoba z Nickiem <b>' . $nick . '</b> już istnieje.")</script>';
                } elseif ($_GET['status'] === 'dodano') {
                    echo '<script>pokazPowiadomienie("Sukces", "Konto zostało utworzone.")</script>';
                }
            }            
        ?>
    </form>
</div>
<script>
    // WYŚWIETLANIE HASŁA
    const hasloInput = document.getElementById('hasloRejestracja');
    const przelaczHaslo = document.getElementById('widocznoscHasla');
    przelaczHaslo.addEventListener('click', function() {
        if (hasloInput.type === 'password') {
            hasloInput.type = 'text';
            przelaczHaslo.className = 'fa-sharp fa-solid fa-eye-slash';
        } else {
            hasloInput.type = 'password';
            przelaczHaslo.className = 'fa-solid fa-eye';
        }
    });

    // MINIMALNY ROK URODZENIA (13) USTALANY WZGLĘDEM AKTUALNEGO ROKU
    var aktualnyRok = new Date();

    var minimalnyRok = new Date();
    minimalnyRok.setFullYear(aktualnyRok.getFullYear() - 13);

    document.getElementById("dataUrodzenia").setAttribute("max", minimalnyRok.toISOString().split('T')[0]);

    // ZMIANA KOLORU ITD PRZYCISKU PO NACIŚNIĘCIU GO
    let wybranaPlec = "mezczyzna";

    function wyborPlci(plec) {
        if (plec === "mezczyzna") {
            wybranaPlec = "mezczyzna";
            document.querySelector(".plecPrzyciskM").classList.add("wybrano");
            document.querySelector(".plecPrzyciskK").classList.remove("wybrano");
            document.querySelector(".plecPrzyciskM").classList.add("wybranoTlo");
            document.querySelector(".plecPrzyciskK").classList.remove("wybranoTlo");
        } else if (plec === "kobieta") {
            wybranaPlec = "kobieta";
            document.querySelector(".plecPrzyciskK").classList.add("wybrano");
            document.querySelector(".plecPrzyciskM").classList.remove("wybrano");
            document.querySelector(".plecPrzyciskK").classList.add("wybranoTlo");
            document.querySelector(".plecPrzyciskM").classList.remove("wybranoTlo");
        }
        document.getElementById("plecBaza").value = wybranaPlec;
    }
</script>
</body>
</html>