<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyecto";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
   die("Fallo al conectar: " . $conn->connect_error);
}



$sql = 'INSERT INTO producto (cod, nomProd, modeloProd, año, sistema, precioUnit, stock) VALUES (' . $_GET["cod"].', ' . $_GET["nom"]. ', "' . $_GET["modelo"].  '", "' . $_GET["anio"]. '", "' . $_GET["sistema"]. '", "' . $_GET["precio"]. '", "' . $_GET["stock"]. '");';


$result = $conn->query($sql);

$conn->close();
header('Location: '.$uri.'/src/HTML final/addproduct.html');
?>
