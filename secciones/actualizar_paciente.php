<?php

include("conexion.php");

$id=$_POST['id'];

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];

$sql="UPDATE pacientes SET

nombre='$nombre',
apellido='$apellido'

WHERE id_paciente=$id";

$conn->query($sql);

header("Location: pacientes.php");

?>