const carro = document.getElementById('carrito');
const listasProductos = document.querySelectorAll('.allproductos');
const tablaCarrito = document.querySelector('tbody');

let productos = [];

const valorTotal = document.getElementById('total-carrito');
// Si tienes un contador visible de productos en carrito, ponlo en el HTML con id="contador-productos"
const contadorProducto = document.getElementById('contador-productos');

listasProductos.forEach(lista => {
    lista.addEventListener('click', e => {
        const botonAgregar = e.target.closest('.addcarrito');
        if (botonAgregar) {
            const producto = botonAgregar.parentElement.parentElement;
            const infoProducto = {
                quantity: 1,
                producto: producto.querySelector('img').src,
                nombre: producto.querySelector('h3').textContent,
                precio: producto.querySelector('.precio').textContent.replace('€', '').trim(),
            };

            const existe = productos.some(product => product.nombre === infoProducto.nombre);
            if (existe) {
                productos = productos.map(product => {
                    if (product.nombre === infoProducto.nombre) {
                        product.quantity++;
                    }
                    return product;
                });
            } else {
                productos = [...productos, infoProducto];
            }
            volcarProductos();
        }
    });
});

const volcarProductos = () => {
    tablaCarrito.innerHTML = '';
    let total = 0;
    let totalProductos = 0;

    productos.forEach(product => {
        const filaProducto = document.createElement('tr');
        filaProducto.innerHTML = `
            <td>${product.quantity}</td>
            <td><img src="${product.producto}" style="width: 50px;"></td>
            <td class="nombre">${product.nombre}</td>
            <td>${product.precio}€</td>
            <td><img src="iconos/borrar.png" class="borrarProducto" style="width: 30px; cursor: pointer;"></td>
        `;
        tablaCarrito.append(filaProducto);
        total += parseFloat(product.precio) * product.quantity;
        totalProductos += product.quantity;
    });

    valorTotal.textContent = total.toFixed(2);

    if (contadorProducto) {
        contadorProducto.textContent = totalProductos;
    }
};

tablaCarrito.addEventListener('click', e => {
    if (e.target.classList.contains('borrarProducto')) {
        const filaProducto = e.target.parentElement.parentElement;
        const nombre = filaProducto.querySelector('.nombre').textContent;
        productos = productos.filter(product => product.nombre !== nombre);
        volcarProductos();
    }
});
