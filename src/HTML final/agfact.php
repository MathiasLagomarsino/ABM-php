<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyecto";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
   die("Fallo al conectar: " . $conn->connect_error);
}



$sql = 'INSERT INTO factura (numero, tipo, condicion, fecEm, total, subtotal) VALUES (' . $_GET["num"].', "' . $_GET["tipo"]. '", "' . $_GET["cond"].  '", "' . $_GET["fecha"]. '", ' . $_GET["total"]. ', ' . $_GET["subtotal"]. ');';


$result = $conn->query($sql);

$conn->close();
header('Location: '.$uri.'/src/HTML final/Factura.html');
?>
