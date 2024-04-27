<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOOTDISTRICT</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="header">
        <div class="menu container">
            <a href="index.php" class="logo">FOOTDISTRICT</a>
            <nav class="navbar">
                <ul>
                    <li><a href="#sudaderas">Sudaderas</a></li>
                    <li><a href="#zapatillas">Zapatillas</a></li>
                    <li><a href="#footer">Contactos</a></li>
                </ul>
            </nav>
            <div>
                <ul>
                    <li class="submenu">
                        <img src="./iconos/bolso.png" alt="" class="img-carrito">
                        <div id="carrito">
                            <table id="lista-carrito">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Producto</th>
                                        <th>Nombre</th>
                                        <th>Precio</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                            <p class="total-price" id="monto">Total:<span id="total-carrito">0</span><span></span>€</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="sesion">
                <?php
                session_start();
                if (isset($_SESSION['nombre_usuario'])) {
                    echo '<p>Bienvenido, ' . $_SESSION['nombre_usuario'] . '</p>';
                } else {
                    echo '<a href="login.php">Registrar</a>';
                }
                ?>
            </div>
        </div>
    </header>
    <h2 class="texto-productos">Las Mejores Prendas</h2>
    <h3 id="sudaderas">Top Sudaderas</h3>
    <section class="container-productos">
        <div class="allproductos">
            <div class="producto">
                <img src="sudaderas/sudadera1.jpg" class="img-producto">
                <div class="texto-producto">
                    <div class="sub-texto">
                        <h3>Sudadera capucha básica</h3>
                        <p class="genero">Sudadera - Unisex </p>
                        <p class="precio">20€</p>
                    </div>
                    <img src="Iconos/bolsoaAdd.png" class="addcarrito" data-id="1">
                </div>
            </div>
            <div class="producto">
                <img src="sudaderas/sudadera2.jpg">
                <div class="texto-producto">
                    <div class="sub-texto">
                        <h3>Sudadera capucha One Piece</h3>
                        <p class="genero">Sudadera - Unisex </p>
                        <p class="precio">30€</p>
                    </div>
                    <img src="Iconos/bolsoaAdd.png" class="addcarrito" data-id="2">
                </div>
            </div>
            <div class="producto">
                <img src="sudaderas/sudadera3.jpg">
                <div class="texto-producto">
                    <div class="sub-texto">
                        <h3>Sudadera capucha STWD</h3>
                        <p class="genero">Sudadera - Unisex </p>
                        <p class="precio">29.99€</p>
                    </div>
                    <img src="Iconos/bolsoaAdd.png" class="addcarrito" data-id="3">
                </div>
            </div>
            <div class="producto">
                <img src="sudaderas/sudadera4.jpg">
                <div class="texto-producto">
                    <div class="sub-texto">
                        <h3>Sudadera The Met Miguel Ángel</h3>
                        <p class="genero">Sudadera - Unisex </p>
                        <p class="precio">29.99€</p>
                    </div>
                    <img src="Iconos/bolsoaAdd.png" class="addcarrito" data-id="4">
                </div>
            </div>
            <div class="producto">
                <img src="sudaderas/sudadera5.jpg">
                <div class="texto-producto">
                    <div class="sub-texto">
                        <h3>Sudadera The Place</h3>
                        <p class="genero">Sudadera - Unisex </p>
                        <p class="precio">27.99€</p>
                    </div>
                    <img src="Iconos/bolsoaAdd.png" class="addcarrito" data-id="5">
                </div>
            </div>
            <div class="producto">
                <img src="sudaderas/sudadera6.jpg">
                <div class="texto-producto">
                    <div class="sub-texto">
                        <h3>Sudadera roja capucha Chicago</h3>
                        <p class="genero">Sudadera - Unisex </p>
                        <p class="precio">25€</p>
                    </div>
                    <img src="Iconos/bolsoaAdd.png" class="addcarrito" data-id="6">
                </div>
            </div>
            <h3 id="zapatillas">Top Zapatillas</h3>
            <div class="producto">
                <img src="Zapatillas/dunk-1.png">
                <div class="texto-producto">
                    <div class="sub-texto">
                        <h3>Nike Dunk Low</h3>
                        <p class="genero">Zapatillas - Mujer </p>
                        <p class="precio">100€</p>
                    </div>
                    <img src="Iconos/bolsoaAdd.png" class="addcarrito" data-id="7">
                </div>
            </div>
            <div class="producto">
                <img src="Zapatillas/dunk-2.png">
                <div class="texto-producto">
                    <div class="sub-texto">
                        <h3>Nike Dunk Low</h3>
                        <p class="genero">Zapatillas - Mujer </p>
                        <p class="precio">100€</p>
                    </div>
                    <img src="Iconos/bolsoaAdd.png" class="addcarrito" data-id="8">
                </div>
            </div>
            <div class="producto">
                <img src="Zapatillas/dunk-3.png">
                <div class="texto-producto">
                    <div class="sub-texto">
                        <h3>Nike Dunk Low</h3>
                        <p class="genero">Zapatillas - Hombre </p>
                        <p class="precio">150€</p>
                    </div>
                    <img src="Iconos/bolsoaAdd.png" class="addcarrito" data-id="9">
                </div>
            </div>
            <div class="producto">
                <img src="Zapatillas/dunk-4.png">
                <div class="texto-producto">
                    <div class="sub-texto">
                        <h3>Nike Dunk Low</h3>
                        <p class="genero">Zapatillas - Hombre </p>
                        <p class="precio">100€</p>
                    </div>
                    <img src="Iconos/bolsoaAdd.png" class="addcarrito" data-id="10">
                </div>
            </div>
            <div class="producto">
                <img src="Zapatillas/dunk-5.png">
                <div class="texto-producto">
                    <div class="sub-texto">
                        <h3>Nike Dunk Low</h3>
                        <p class="genero">Zapatillas - Hombre </p>
                        <p class="precio">160€</p>
                    </div>
                    <img src="Iconos/bolsoaAdd.png" class="addcarrito" data-id="11">
                </div>
            </div>
            <div class="producto">
                <img src="Zapatillas/dunk-6.png">
                <div class="texto-producto">
                    <div class="sub-texto">
                        <h3>Nike Dunk Low</h3>
                        <p class="genero">Zapatillas - Hombre </p>
                        <p class="precio">200€</p>
                    </div>
                    <img src="Iconos/bolsoaAdd.png" class="addcarrito" data-id="12">
                </div>
            </div>
        </div>
    </section>
    <footer id="footer">
        <div class="footer-container">
            <div class="horario">
                <h4>Contacto</h4>
                <p>Horario: Lunes a Domingo 10:00 a 21:00</p>
                <p>Teléfono: +34 615-498-795</p>
                <p>Correo: Pstlye@gmail.es</p>
            </div>
            <div class="ubicacion">
                <h4>Dirección</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d194391.05079808543!2d-4.006544605468789!3d40.423023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422888404e8c01%3A0xeed4ab6554ed5ba8!2sFOOTDISTRICT!5e0!3m2!1ses!2ses!4v1713026779472!5m2!1ses!2ses" width="200" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="redes">
                <h4>Redes</h4>
                <a href="https://www.instagram.com/" target="_blank"><img src="Iconos/instagram.png"></a>
                <a href="https://twitter.com/" target="_blank"><img src="Iconos/x.png"></a>
            </div>
        </div>
    </footer>
</body>
<script src="script.js"></script>

</html>