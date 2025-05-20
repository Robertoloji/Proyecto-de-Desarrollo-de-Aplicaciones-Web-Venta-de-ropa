<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FOOTDISTRICT</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <header class="header">
        <div class="menu container">
            <a href="index.php" class="logo">FOOTDISTRICT</a>
            <nav class="navbar" aria-label="Menú principal">
                <ul>
                    <li><a href="#sudaderas">Sudaderas</a></li>
                    <li><a href="#zapatillas">Zapatillas</a></li>
                    <li><a href="#footer">Contactos</a></li>
                </ul>
            </nav>

            <aside class="carrito-container" aria-label="Carrito de compras">
                <ul>
                    <li class="submenu">
                        <img src="./iconos/bolso.png" alt="Icono de carrito de compras" class="img-carrito" />
                        <div id="carrito" aria-hidden="true">
                            <table id="lista-carrito">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Producto</th>
                                        <th>Nombre</th>
                                        <th>Precio</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                            <p class="total-price" id="monto">Total: <span id="total-carrito">0</span>€</p>
                        </div>
                    </li>
                </ul>
            </aside>

            <div class="sesion">
                <?php
                session_start();
                if (isset($_SESSION['nombre_usuario'])) {
                    echo '<p>Bienvenido, ' . htmlspecialchars($_SESSION['nombre_usuario']) . '</p>';
                } else {
                    echo '<a href="login.php">Registrar</a>';
                }
                ?>
            </div>
        </div>
    </header>

    <main>
        <h2 class="texto-productos">Las Mejores Prendas</h2>

        <section id="sudaderas" class="container-productos" aria-label="Sudaderas">
    <h3>Top Sudaderas</h3>
    <div class="allproductos">
        <article class="producto" role="listitem">
            <img src="sudaderas/sudadera1.jpg" alt="Sudadera capucha básica" class="img-producto" />
            <div class="texto-producto">
                <div class="sub-texto">
                    <h3>Sudadera capucha básica</h3>
                    <p class="genero">Sudadera - Unisex</p>
                    <p class="precio">20€</p>
                </div>
                <button class="addcarrito" data-id="1" aria-label="Agregar sudadera capucha básica al carrito">
                    <img src="Iconos/bolsoaAdd.png" alt="Agregar al carrito" />
                </button>
            </div>
        </article>
        <article class="producto" role="listitem">
            <img src="sudaderas/sudadera2.jpg" alt="Sudadera con diseño" class="img-producto" />
            <div class="texto-producto">
                <div class="sub-texto">
                    <h3>Sudadera con diseño</h3>
                    <p class="genero">Sudadera - Hombre</p>
                    <p class="precio">25€</p>
                </div>
                <button class="addcarrito" data-id="2" aria-label="Agregar sudadera con diseño al carrito">
                    <img src="Iconos/bolsoaAdd.png" alt="Agregar al carrito" />
                </button>
            </div>
        </article>
        <article class="producto" role="listitem">
            <img src="sudaderas/sudadera3.jpg" alt="Sudadera oversize" class="img-producto" />
            <div class="texto-producto">
                <div class="sub-texto">
                    <h3>Sudadera oversize</h3>
                    <p class="genero">Sudadera - Mujer</p>
                    <p class="precio">22€</p>
                </div>
                <button class="addcarrito" data-id="3" aria-label="Agregar sudadera oversize al carrito">
                    <img src="Iconos/bolsoaAdd.png" alt="Agregar al carrito" />
                </button>
            </div>
        </article>
        <article class="producto" role="listitem">
            <img src="sudaderas/sudadera4.jpg" alt="Sudadera deportiva" class="img-producto" />
            <div class="texto-producto">
                <div class="sub-texto">
                    <h3>Sudadera deportiva</h3>
                    <p class="genero">Sudadera - Unisex</p>
                    <p class="precio">30€</p>
                </div>
                <button class="addcarrito" data-id="4" aria-label="Agregar sudadera deportiva al carrito">
                    <img src="Iconos/bolsoaAdd.png" alt="Agregar al carrito" />
                </button>
            </div>
        </article>
        <article class="producto" role="listitem">
            <img src="sudaderas/sudadera5.jpg" alt="Sudadera con logo" class="img-producto" />
            <div class="texto-producto">
                <div class="sub-texto">
                    <h3>Sudadera con logo</h3>
                    <p class="genero">Sudadera - Hombre</p>
                    <p class="precio">28€</p>
                </div>
                <button class="addcarrito" data-id="5" aria-label="Agregar sudadera con logo al carrito">
                    <img src="Iconos/bolsoaAdd.png" alt="Agregar al carrito" />
                </button>
            </div>
        </article>
        <article class="producto" role="listitem">
            <img src="sudaderas/sudadera6.jpg" alt="Sudadera básica lisa" class="img-producto" />
            <div class="texto-producto">
                <div class="sub-texto">
                    <h3>Sudadera básica lisa</h3>
                    <p class="genero">Sudadera - Mujer</p>
                    <p class="precio">18€</p>
                </div>
                <button class="addcarrito" data-id="6" aria-label="Agregar sudadera básica lisa al carrito">
                    <img src="Iconos/bolsoaAdd.png" alt="Agregar al carrito" />
                </button>
            </div>
        </article>
    </div>
</section>

<section id="zapatillas" class="container-productos" aria-label="Zapatillas">
    <h3>Top Zapatillas</h3>
    <div class="allproductos">
        <article class="producto" role="listitem">
            <img src="Zapatillas/dunk-1.png" alt="Nike Dunk Low Mujer" />
            <div class="texto-producto">
                <div class="sub-texto">
                    <h3>Nike Dunk Low</h3>
                    <p class="genero">Zapatillas - Mujer</p>
                    <p class="precio">100€</p>
                </div>
                <button class="addcarrito" data-id="7" aria-label="Agregar Nike Dunk Low al carrito">
                    <img src="Iconos/bolsoaAdd.png" alt="Agregar al carrito" />
                </button>
            </div>
        </article>
        <article class="producto" role="listitem">
            <img src="Zapatillas/dunk-2.png" alt="Nike Air Max" />
            <div class="texto-producto">
                <div class="sub-texto">
                    <h3>Nike Air Max</h3>
                    <p class="genero">Zapatillas - Hombre</p>
                    <p class="precio">120€</p>
                </div>
                <button class="addcarrito" data-id="8" aria-label="Agregar Nike Air Max al carrito">
                    <img src="Iconos/bolsoaAdd.png" alt="Agregar al carrito" />
                </button>
            </div>
        </article>
        <article class="producto" role="listitem">
            <img src="Zapatillas/dunk-3.png" alt="Air Jordan 1" />
            <div class="texto-producto">
                <div class="sub-texto">
                    <h3>Air Jordan 1</h3>
                    <p class="genero">Zapatillas - Unisex</p>
                    <p class="precio">150€</p>
                </div>
                <button class="addcarrito" data-id="9" aria-label="Agregar Air Jordan 1 al carrito">
                    <img src="Iconos/bolsoaAdd.png" alt="Agregar al carrito" />
                </button>
            </div>
        </article>
        <article class="producto" role="listitem">
            <img src="Zapatillas/dunk-4.png" alt="Adidas Yeezy Boost" />
            <div class="texto-producto">
                <div class="sub-texto">
                    <h3>Adidas Yeezy Boost</h3>
                    <p class="genero">Zapatillas - Hombre</p>
                    <p class="precio">220€</p>
                </div>
                <button class="addcarrito" data-id="10" aria-label="Agregar Adidas Yeezy Boost al carrito">
                    <img src="Iconos/bolsoaAdd.png" alt="Agregar al carrito" />
                </button>
            </div>
        </article>
        <article class="producto" role="listitem">
            <img src="Zapatillas/dunk-5.png" alt="Nike VaporMax" />
            <div class="texto-producto">
                <div class="sub-texto">
                    <h3>Nike VaporMax</h3>
                    <p class="genero">Zapatillas - Mujer</p>
                    <p class="precio">180€</p>
                </div>
                <button class="addcarrito" data-id="11" aria-label="Agregar Nike VaporMax al carrito">
                    <img src="Iconos/bolsoaAdd.png" alt="Agregar al carrito" />
                </button>
            </div>
        </article>
        <article class="producto" role="listitem">
            <img src="Zapatillas/dunk-6.png" alt="Zapatillas clásicas" />
            <div class="texto-producto">
                <div class="sub-texto">
                    <h3>Zapatillas clásicas</h3>
                    <p class="genero">Zapatillas - Unisex</p>
                    <p class="precio">90€</p>
                </div>
                <button class="addcarrito" data-id="12" aria-label="Agregar zapatillas clásicas al carrito">
                    <img src="Iconos/bolsoaAdd.png" alt="Agregar al carrito" />
                </button>
            </div>
        </article>
    </div>
</section>

            </div>
        </section>
    </main>

    <footer id="footer">
        <div class="footer-container">
            <section class="horario" aria-label="Información de contacto">
                <h4>Contacto</h4>
                <p>Horario: Lunes a Domingo 10:00 a 21:00</p>
                <p>Teléfono: +34 615-498-795</p>
                <p>Correo: Pstlye@gmail.es</p>
            </section>
            <section class="ubicacion" aria-label="Ubicación">
                <h4>Dirección</h4>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d194391.05079808543!2d-4.006544605468789!3d40.423023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422888404e8c01%3A0xeed4ab6554ed5ba8!2sFOOTDISTRICT!5e0!3m2!1ses!2ses!4v1713026779472!5m2!1ses!2ses"
                    width="200" height="150" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade" title="Mapa de la ubicación de Footdistrict"></iframe>
            </section>
            <section class="redes" aria-label="Redes sociales">
                <h4>Redes</h4>
                <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer">
                    <img src="Iconos/instagram.png" alt="Instagram" />
                </a>
                <a href="https://twitter.com/" target="_blank" rel="noopener noreferrer">
                    <img src="Iconos/x.png" alt="Twitter" />
                </a>
            </section>
        </div>
    </footer>

    <script src="script.js"></script>
</body>

</html>
