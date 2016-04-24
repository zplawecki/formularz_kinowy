<?php

$conn = new mysqli('localhost', 'root', '', 'cinemas_db');
if ($conn->connect_error) {
    die('Blad');
}

require_once 'functions.php';



showInfoInTable('kino', '1', ['name', 'adress']);
showInfoInTable('film', '1', ['name', 'opis', 'rating']);

$conn->close();
$conn = null;

?>

