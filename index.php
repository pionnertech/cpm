<?php


$datos = mysqli_connect('104.131.87.221', "root", "MoNoCeRoS", "K_usr10000");

$handler = mysqli_query($datos, "SELECT * FROM USERS");

while($fila = mysqli_fetch_row($handler)){
	echo $fila[0] . "/" .  $fila[1] . "/" . $fila[2];
}

?>