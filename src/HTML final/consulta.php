<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyecto";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
   die("Fallo al conectar: " . $conn->connect_error);
}



$sql = 'SELECT * FROM empleado WHERE DNI="' . $_GET["dni"]. '" AND contras="' . $_GET["contra"]. '"';
$result = $conn->query($sql);

if ($result->num_rows > 0) {

   
	header('Location: '.$uri.'/src/HTML final/productlist.html');
} else {
   echo "0 resultados";
}
$conn->close();
?>
