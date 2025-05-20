<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>FOOTDISTRICT - Login</title>
    <link rel="stylesheet" href="styleLogin.css" />
</head>

<body>
    <header class="header">
        <div class="menu-container">
            <a href="index.php" class="logo">FOOTDISTRICT</a>
        </div>
    </header>

    <div class="captacion">
        <p class="captacion-texto">No necesitas esto</p>
        <p class="captacion-texto">Fuera agobios</p>
        <p class="captacion-texto">compra en</p>
        <p class="captacion-texto-titulo">FOOTDISTRICT</p>

        <?php
        // Aquí puedes mostrar mensajes de error o confirmación
        if (isset($_SESSION['error'])) {
            echo '<p style="color:red;">' . $_SESSION['error'] . '</p>';
            unset($_SESSION['error']);
        }
        ?>

    </div>

    <video src="video/videoFondo.mp4" autoplay loop muted></video>

    <form method="post" action="procesar_login.php" class="post-container-formulario">
        <div class="container-formulario">
            <section class="formulario">
                <h4>Formulario de Login</h4>
                <input class="apartados" type="text" name="usuario" placeholder="Ingrese su usuario" required />
                <input class="apartados" type="password" name="contraseña" placeholder="Ingrese su contraseña" required minlength="6" />
                <input class="boton" type="submit" value="Entrar" />
                <p><a href="registro.php">¿No tienes cuenta? Regístrate aquí</a></p>
            </section>
        </div>
    </form>

</body>

</html>
