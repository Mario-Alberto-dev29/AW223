<?php
$nombre = $_GET['nombre'];
$correo = $_GET['correo'];
$mensaje = $_GET['mensaje'];

require_once "conexion.php";
$deleteMsj= "delete from mensajes where nombre = '$nombre' AND correo = '$correo' AND mensaje = '$mensaje'";
try {
$rsMsj = mysqli_query($conexion, $deleteMsj);
mysqli_close($conexion);
return $rsMsj;
} catch(Exception $e) {
die('Algo paso al eliminar: ' .$e->getMessage() );
}
