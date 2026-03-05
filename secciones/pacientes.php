<?php
include("conexion.php");
?>

<h2>Registrar Paciente</h2>

<form action="guardar_paciente.php" method="POST">

Nombre
<input type="text" name="nombre">

Apellido
<input type="text" name="apellido">

Documento
<input type="text" name="documento">

Telefono
<input type="text" name="telefono">

Correo
<input type="email" name="correo">

<button type="submit">Guardar</button>

</form>

<hr>

<h2>Lista de Pacientes</h2>

<table border="1">

<tr>
<th>ID</th>
<th>Nombre</th>
<th>Apellido</th>
<th>Documento</th>
<th>Telefono</th>
<th>Correo</th>
<th>Acciones</th>
</tr>

<?php

$sql="SELECT * FROM pacientes";
$result=$conn->query($sql);

while($fila=$result->fetch_assoc()){

echo "<tr>

<td>".$fila['id_paciente']."</td>
<td>".$fila['nombre']."</td>
<td>".$fila['apellido']."</td>
<td>".$fila['documento']."</td>
<td>".$fila['telefono']."</td>
<td>".$fila['correo']."</td>

<td>

<a href='editar_paciente.php?id=".$fila['id_paciente']."'>Editar</a>

<a href='eliminar_paciente.php?id=".$fila['id_paciente']."'>Eliminar</a>

</td>

</tr>";

}

?>

</table>