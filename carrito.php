<?php include 'includes/header.php'; ?>

<div class="contenedor-principal">
    <main class="area-carrito">
        <h2>Tu Carrito de Compras</h2>
        
        <div class="contenido-carrito">
            
            <!-- Columna Izquierda: Tabla de productos -->
            <div class="lista-carrito">
                <table class="tabla-carrito">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Subtotal</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Producto de prueba (Maqueta) -->
                        <tr>
                            <td>
                                <div class="info-producto-carrito">
                                    <img src="assets/img/cangrejo-hirose.jpg" alt="Cangrejo Hirose">
                                    <div>
                                        <p class="nombre-prod">Cangrejo Recta Industrial</p>
                                        <p class="modelo-prod">Modelo: 329 H</p>
                                    </div>
                                </div>
                            </td>
                            <td>$450.00</td>
                            <td>
                                <!-- El input type="number" crea las flechitas para subir/bajar el número -->
                                <input type="number" value="1" min="1" class="input-cantidad">
                            </td>
                            <td><strong>$450.00</strong></td>
                            <td><a href="#" class="btn-eliminar">Eliminar</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Columna Derecha: Resumen de compra -->
            <aside class="resumen-carrito">
                <h3>Resumen del Pedido</h3>
                <hr class="divisor">
                <div class="fila-resumen">
                    <span>Subtotal</span>
                    <span>$450.00</span>
                </div>
                <div class="fila-resumen">
                    <span>Envío Estimado</span>
                    <span>$150.00</span>
                </div>
                <hr class="divisor">
                <div class="fila-resumen total">
                    <span>Total</span>
                    <span>$600.00 MXN</span>
                </div>
                
                <button class="btn-pagar">Proceder al Pago</button>
                <a href="index.php" class="link-seguir">Seguir comprando</a>
            </aside>

        </div>
    </main>
</div>

</body>
</html>