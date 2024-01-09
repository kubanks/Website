<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wędkujemy</title>
    <link rel="stylesheet" href="styl_1.css">
</head>
<body>
    <div class="baner">
        <h1>Portal dla wędkarzy</h1>
    </div>

    <div class="lewy">
        <h2>Ryby drapieżne naszych wód</h2>
        <ul>
            <?php
                $serwer = "localhost";
                $uzytkownik = "root";
                $haslo = "";
                $nazwa_bazy = "wedkowanie";

                $id_polaczenia = mysqli_connect($serwer, $uzytkownik, $haslo, $nazwa_bazy);

                if (!$id_polaczenia) {
                    echo mysqli_connect_error();
                }

                $zapytanie = "SELECT nazwa, wystepowanie FROM ryby WHERE styl_zycia = 1";
                $wynik_zapytania = mysqli_query($id_polaczenia, $zapytanie);

                while ($wiersz = mysqli_fetch_assoc($wynik_zapytania)) {
                    echo "<li>" . $wiersz["nazwa"] . ", występowanie: " . $wiersz["wystepowanie"] . "</li>";
                }

                mysqli_close($id_polaczenia);
            ?>
        </ul>
    </div>

    <div class="prawy">
        <img src="ryba1.jpg" alt="Sum">
        <br>
        <a href="kwerendy.txt">Pobierz kwerendy</a>
    </div>

    <div class="stopka">
        <p>Stronę wykonał: 12345678901</p>
    </div>
</body>
</html>
