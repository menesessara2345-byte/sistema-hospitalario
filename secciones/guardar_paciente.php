<?php

include("conexion.php");

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$documento=$_POST['documento'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];

$sql="INSERT INTO pacientes(nombre,apellido,documento,telefono,correo)

VALUES('$nombre','$apellido','$documento','$telefono','$correo')";

$conn->query($sql);

header("Location: pacientes.php");

?>