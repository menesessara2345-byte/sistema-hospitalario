<?php
include("conexion.php");
?>

<h2>Registrar Cita</h2>

<form action="guardar_cita.php" method="POST">

ID Paciente
<input type="number" name="id_paciente">

ID Medico
<input type="number" name="id_medico">

Fecha
<input type="date" name="fecha">

Hora
<input type="time" name="hora">

Motivo
<input type="text" name="motivo">

<button type="submit">Guardar</button>

</form>

<hr>

<h2>Lista de Citas</h2>

<table border="1">

<tr>
<th>ID</th>
<th>Paciente</th>
<th>Medico</th>
<th>Fecha</th>
<th>Hora</th>
<th>Motivo</th>
<th>Acciones</th>
</tr>

<?php

$sql="SELECT * FROM citas";
$result=$conn->query($sql);

while($fila=$result->fetch_assoc()){

echo "<tr>

<td>".$fila['id_cita']."</td>
<td>".$fila['id_paciente']."</td>
<td>".$fila['id_medico']."</td>
<td>".$fila['fecha']."</td>
<td>".$fila['hora']."</td>
<td>".$fila['motivo']."</td>

<td>

<a href='eliminar_cita.php?id=".$fila['id_cita']."'>Eliminar</a>

</td>

</tr>";

}

?>

</table>