<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOOTDISTRICT Formulario de registro</title>
    <link rel="stylesheet" href="styleLogin.css">
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
        include("registrar.php")
        ?>
    </div>
    <video src="video/videoFondo.mp4" autoplay loop></video>
    <form method="post" class="post-container-formulario">
        <div class="container-formulario">
            <section class="formulario">
                <h4>Formulario de Registro</h4>
                <input class="apartados" type="text" id="nombre" name="nombre" placeholder="Ingrese su nombre" required>
                <input class="apartados" type="tel" id="telefono" name="telefono" placeholder="Ingrese su telefono" maxlength="9" minlength="9" required>
                <input class="apartados" type="email" id="correo" name="correo" placeholder="Ingrese su email" required>
                <input class="apartados" type="password" id="password" name="contraseña" placeholder="Ingrese contraseña" minlength="9" required>
                <input class="boton" type="submit" value="Enviar" name="enviar">
                <p><a href="registrado.php">¿Ya tienes una cuenta?</a></p>
            </section>
        </div>
    </form>
</body>

</html>