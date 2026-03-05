<?php

include("conexion.php");

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$especialidad=$_POST['especialidad'];
$telefono=$_POST['telefono'];

$sql="INSERT INTO medicos(nombre,apellido,especialidad,telefono)

VALUES('$nombre','$apellido','$especialidad','$telefono')";

$conn->query($sql);

header("Location: medicos.php");

?>