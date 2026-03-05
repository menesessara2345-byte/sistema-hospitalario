<?php

include("conexion.php");

$id=$_GET['id'];

$sql="DELETE FROM medicos WHERE id_medico=$id";

$conn->query($sql);

header("Location: medicos.php");

?>