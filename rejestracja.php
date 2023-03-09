<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="zdjecia/roblox.ico">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.0/css/all.css">
    <link rel="stylesheet" href="start.css">
    <title>Roblox | Rejestracja</title>
    <style>
        .plecPrzycisk {
            padding: 10px;
            width: 270px;
            font-size: 18px;
            background-color: white;
            border: 1px solid white;
            border-radius: 0.4rem;
            cursor: pointer;
            font-weight: bold;
            background-color: rgba(0, 0, 0, 0.50);
            color: rgb(129, 129, 129);
        }

        .plecPrzycisk:hover {
            background-color: rgba(0, 0, 0, 0.75);
        }

        .plecPrzycisk.mezczyzna {
            background-color: white;
            color: black;
        }

        .plecPrzycisk.kobieta {
            background-color: pink;
            color: white;
        }
    </style>
</head>
<body>
<body>
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
    <form>
        <label>Data Urodzenia</label>
        <input type="date" placeholder="Data" id="dataUrodzenia" required><br>
        <label>Nazwa Użytkownika</label>
        <input type="text" placeholder="Nick" required><br>
        <label>Hasło <i id="widocznoscHasla" class="fa-solid fa-eye"></i></label>
        <input id="hasloRejestracja" type="password" placeholder="Hasło" required><br>
        <div class="plecPrzyciski">
            <button type="button" id="mezczyzna" class="plecPrzycisk"><i class="fa-solid fa-person"></i></button>
            <button type="button" id="kobieta" class="plecPrzycisk"><i class="fa-solid fa-person-dress"></i></button>
        </div>
        <br>
        <button type="submit" class="rejestracjaPrzycisk">Zarejestruj się</button>
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

    // ZMIANA KOLORU PODCZAS WYBORU PŁCI
    const mezczyznaBtn = document.getElementById('mezczyzna');
    const kobietaBtn = document.getElementById('kobieta');
    
    mezczyznaBtn.addEventListener('click', function() {
        document.body.style.backgroundColor = 'blue';
    });
    
    kobietaBtn.addEventListener('click', function() {
        document.body.style.backgroundColor = 'pink';
    });

</script>
</body>
</body>
</html>