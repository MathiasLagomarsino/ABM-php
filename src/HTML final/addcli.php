<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyecto";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
   die("Fallo al conectar: " . $conn->connect_error);
}



$sql = 'INSERT INTO clifinal (DNI, nomcli, CUIL) VALUES ("' . $_GET["dni"].'", "' . $_GET["nom"]. '", "' . $_GET["cargo"].  '", "' . $_GET["contra"]. '");';


/*
$sql = 'INSERT INTO empleado (DNI, nomEmp, cargo, contras) VALUES ("11111112", "hola", "Compras", "hola");';
*/

$result = $conn->query($sql);

$conn->close();
header('Location: '.$uri.'/src/HTML final/addemp.html');
?>
