<?php

include("conexion.php");

$id=$_GET['id'];

$sql="DELETE FROM pacientes WHERE id_paciente=$id";

$conn->query($sql);

header("Location: pacientes.php");

?>