<?php

require_once('../../conexion.php');

$connection = mysqli_connect(host(), usuario(), contrasenya(), "tienda") or die("Connection Error: " . mysql_error());

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$email = $_POST["email"];
$contraseña = $_POST["contraseña"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$dni = $_POST["dni"];
$telefono = $_POST["telefono"];


$query = "INSERT INTO cliente VALUES (null, '$email', '$contraseña', '$nombre', '$apellido', '$dni', '$telefono')";

mysqli_query($connection, $query);

mysqli_close($connection);

