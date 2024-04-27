const carro = document.getElementById('carrito');
const listaProductos = document.querySelector('.allproductos');
const tablaCarrito = document.querySelector('tbody');

let productos = [];

const valorTotal = document.getElementById('total-carrito');
const contadorProducto = document.getElementById('contador-productos')

listaProductos.addEventListener('click', e => {
    if (e.target.classList.contains('addcarrito')) {
        const producto = e.target.parentElement.parentElement;
        const infoProducto = {
            quantity: 1,
            producto: producto.querySelector('img').src,
            nombre: producto.querySelector('h3').textContent,
            precio: producto.querySelector('.precio').textContent,
        };
        
        const existe = productos.some(product => product.nombre === infoProducto.nombre);
        if (existe) {
            const products = productos.map(product => {
                if (product.nombre === infoProducto.nombre) {
                    product.quantity++;
                    return product
                } else {
                    return product
                }
            });
            productos = [...products];
        } else {
            productos = [...productos, infoProducto];
        }
        volcarProductos();
    }
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
            <td>${product.precio}</td>
            <td><img src="iconos/borrar.png" class="borrarProducto" style="width: 30px;"></td>
        `;
        tablaCarrito.append(filaProducto);
        total += parseFloat(product.precio) * product.quantity;
        totalProductos += product.quantity;
    });

    valorTotal.textContent = total.toFixed(2);
};

tablaCarrito.addEventListener('click', e => {
    if (e.target.classList.contains('borrarProducto')) {
        const filaProducto = e.target.parentElement.parentElement;
        const nombre = filaProducto.querySelector('.nombre').textContent;
        productos = productos.filter(product => product.nombre !== nombre);
        volcarProductos();
    }
});
