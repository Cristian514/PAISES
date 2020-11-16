<?php

$conexion = mysqli_connect("localhost","root","","paises1");

$query = $conexion->query("SELECT * FROM continentes");

echo '<option value="0">Seleccione</option>';

while ( $row = $query->fetch_assoc() )
{
	echo '<option value="' . $row['id']. '">' . $row['nombre'] . '</option>' . "\n";
}
