<?php
    //conexion con la base de datos y el servidor
    $conexion = mysqli_connect("localhost", "root", "") or die ("No se pudo conectar con el servidor");
    $db = mysqli_select_db($conexion, "controlacceso") or die ("No se pudo conectar con la base de datos");
?>