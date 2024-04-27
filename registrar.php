<?php

include("conexion.php");

if (isset($_POST["enviar"])) {
    if (
        strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['telefono']) >= 1 &&
        strlen($_POST['correo']) >= 1 &&
        strlen($_POST['contraseña'])
    ) {
        $nombre = trim($_POST['nombre']);
        $telefono = trim($_POST['telefono']);
        $correo = trim($_POST['correo']);
        $contraseña = trim($_POST['contraseña']);
        $fecha = date("Y-m-d");

        $consulta = "INSERT INTO usuarios(nombre, telefono, correo, contraseña, fecha)
            VALUES('$nombre','$telefono','$correo','$contraseña','$fecha')";
        $resultado = mysqli_query($conexion, $consulta);
        if ($resultado) {
            session_start();
            $_SESSION['nombre_usuario'] = $nombre;
            header("Location: index.php");
            exit();
        } else {
            ?>
            <h3 class="error">Ocurrió un error al registrar</h3>
            <?php
        }
    }
}
?>
