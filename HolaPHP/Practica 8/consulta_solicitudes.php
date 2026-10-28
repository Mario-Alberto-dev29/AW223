<?php
function consultaSolicitudes() {
    require_once "conexion_soporte.php";
    $selectMsj= "select * from solicitudes";

    try {
    $rsMsj = mysqli_query($conexion, $selectMsj);
    mysqli_close($conexion);
    return $rsMsj;
    } catch(Exception $e) {
    die('Algo paso al consultar: ' .$e->getMessage() );
    }
}
