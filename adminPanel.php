<html>
    <head>
        <title>Witamy w panelu administracyjnym</title>
    </head>
    <body>
        <div>
            <form>
                <label>Nazwa kina:</label>
                <input type="text" name="addCinemaName"><br>
                <label>Adres kina:</label>
                <input type="text" name="addCinemaAdress"><br>
                <input type="submit" name="addCinema"><br><br>

                <label>Tytul filmu:</label>
                <input type="text" name="addMovieName"><br>
                <label>Opis filmu:</label>
                <input type="text" name="addMovieDescr"><br>
                <label>Ocena filmu:</label>
                <input type="number" step="0.1" name="addMovieRating"><br>
                <input type="submit" name="addCinema"><br><br>
            </form>           
        </div>


    </body>
</html>


<?php
$conn = new mysqli('localhost', 'root', '', 'cinemas_db');
if ($conn->connect_error) {
    die('Blad');
}

require_once 'functions.php';



showInfoInTable('kino', '1', ['name', 'adress']);
showInfoInTable('film', '1', ['name', 'opis', 'rating']);

// lista kin

$sql1 = "INSERT INTO kino(name, adress)"
        . "VALUES('$cinemaName','$cinemaAdress')"; // dane pobrane z formularza

$result1 = $conn->query($sql1);

if ($result1 === true) { //sprawdzenie
    echo ('Nowe kino dodane<br>');
} else {
    echo ('Nie udalo mi sie dodac kina :(<br>' . $conn->error);
};

// lista filmow

$sql2 = "INSERT INTO film(name, rating, opis)"
        . "VALUES('$filmName','$filmRating','$filmDescr')"; // dane pobrane z formularza

$result2 = $conn->query($sql2);

if ($result1 === true) { //sprawdzenie
    echo ('Nowy film dodany<br>');
} else {
    echo ('Nie udalo mi sie dodac filmu :(<br>' . $conn->error);
};

$conn->close();
$conn = null;
?>

