<?php
include("conexion.php");

$id=$_GET['id'];

$sql="SELECT * FROM pacientes WHERE id_paciente=$id";

$result=$conn->query($sql);

$fila=$result->fetch_assoc();
?>

<form action="actualizar_paciente.php" method="POST">

<input type="hidden" name="id"
value="<?php echo $fila['id_paciente']; ?>">

Nombre
<input type="text" name="nombre"
value="<?php echo $fila['nombre']; ?>">

Apellido
<input type="text" name="apellido"
value="<?php echo $fila['apellido']; ?>">

<button type="submit">Actualizar</button>

</form>