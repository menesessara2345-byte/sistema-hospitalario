<?php
include("conexion.php");
?>

<h2>Registrar Médico</h2>

<form action="guardar_medico.php" method="POST">

Nombre
<input type="text" name="nombre">

Apellido
<input type="text" name="apellido">

Especialidad
<input type="text" name="especialidad">

Telefono
<input type="text" name="telefono">

<button type="submit">Guardar</button>

</form>

<hr>

<h2>Lista de Médicos</h2>

<table border="1">

<tr>
<th>ID</th>
<th>Nombre</th>
<th>Apellido</th>
<th>Especialidad</th>
<th>Telefono</th>
<th>Acciones</th>
</tr>

<?php

$sql="SELECT * FROM medicos";
$result=$conn->query($sql);

while($fila=$result->fetch_assoc()){

echo "<tr>

<td>".$fila['id_medico']."</td>
<td>".$fila['nombre']."</td>
<td>".$fila['apellido']."</td>
<td>".$fila['especialidad']."</td>
<td>".$fila['telefono']."</td>

<td>

<a href='eliminar_medico.php?id=".$fila['id_medico']."'>Eliminar</a>

</td>

</tr>";

}

?>

</table>