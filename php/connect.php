<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'roblox';

$conn = mysqli_connect($host, $user, $password, $dbname);

if ($conn) {
  echo "Połączenie z bazą danych działa!";
}

if (!$conn) {
  die('Nie udało się połączyć z bazą danych: ' . mysqli_connect_error());
}
?>
