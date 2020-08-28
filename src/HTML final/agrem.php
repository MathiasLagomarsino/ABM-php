<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyecto";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
   die("Fallo al conectar: " . $conn->connect_error);
}



$sql = 'INSERT INTO envio (cod, peso, camion, fechaRec, recOrden, dirEm, dirRec) VALUES (' . $_GET["num"].', ' . $_GET["peso"]. ', "' . $_GET["cam"].  '", "' . $_GET["fecRec"]. '", "' . $_GET["recOrd"]. '", "' . $_GET["dirEm"]. '", "' . $_GET["dirRec"]. '");';


$result = $conn->query($sql);

$conn->close();
header('Location: '.$uri.'/src/HTML final/Remito.html');
?>
