<?php

$conexion = mysqli_connect(
    "localhost",
    "root",
    "",
    "usuariotienda"
);

// Verificar la conexión
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

?>
