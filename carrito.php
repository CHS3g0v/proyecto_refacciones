<?php 
include 'includes/header.php'; 


$cantidad_inicial = isset($_GET['cantidad']) ? (int)$_GET['cantidad'] : 1;
?>

<div class="contenedor-principal fondo-blanco" style="padding: 20px;">
    <h2 class="titulo-seccion" style="color: #0033a0; border-bottom: 2px solid #eee; padding-bottom: 10px; margin-bottom: 25px;">Tu Carrito de Compras</h2>

    <div class="contenido-carrito" style="display: flex; justify-content: space-between; align-items: flex-start; gap: 30px;">
        
        <!-- Tabla de Productos -->
        <table class="tabla-carrito" style="width: 65%; border-collapse: collapse;">
            <thead>
                <tr>
                    <th style="text-align: left; background-color: #f0f0f0; padding: 12px; border-bottom: 2px solid #ccc;">Producto</th>
                    <th style="background-color: #f0f0f0; padding: 12px; border-bottom: 2px solid #ccc; text-align: center;">Precio</th>
                    <th style="background-color: #f0f0f0; padding: 12px; border-bottom: 2px solid #ccc; text-align: center;">Cantidad</th>
                    <th style="background-color: #f0f0f0; padding: 12px; border-bottom: 2px solid #ccc; text-align: center;">Subtotal</th>
                    <th style="background-color: #f0f0f0; padding: 12px; border-bottom: 2px solid #ccc; text-align: center;">Acción</th>
                </tr>
            </thead>
            <tbody id="cuerpo-carrito">
                
                <!-- fila-producto y data-precio -->
                <tr class="fila-producto" data-precio="20.00">
                    <td style="padding: 15px 10px; border-bottom: 1px solid #eee; display: flex; align-items: center; gap: 15px;">
                        <img src="assets/img/cangrejo-hirose.jpg" alt="Cangrejo Hirose" style="width: 80px; height: 80px; object-fit: contain; border: 1px solid #ddd; border-radius: 5px; background: white;">
                        <div>
                            <strong style="color: #333;">Cangrejo para Recta Industrial</strong>
                            <br><small style="color: #666;">Ref: 329 H</small>
                        </div>
                    </td>
                    <td style="padding: 15px 10px; border-bottom: 1px solid #eee; text-align: center;">$20.00</td>
                    <td style="padding: 15px 10px; border-bottom: 1px solid #eee; text-align: center;">
                        <input type="number" class="input-cantidad" value="<?php echo $cantidad_inicial; ?>" min="1" style="width: 60px; padding: 8px; text-align: center; border: 1px solid #ccc; border-radius: 4px;">
                    </td>
                    <td style="padding: 15px 10px; border-bottom: 1px solid #eee; text-align: center;"><strong class="precio-fila-texto">$20.00</strong></td>
                    <td style="padding: 15px 10px; border-bottom: 1px solid #eee; text-align: center;">
                        <button onclick="eliminarProducto(this)" title="Eliminar" style="background: none; border: none; color: #dc3545; font-size: 18px; cursor: pointer;"><i class="fa-solid fa-trash"></i></button>
                    </td>
                </tr>

            </tbody>
        </table>

        <!-- Panel Lateral de Resumen -->
        <div class="resumen-compra" style="width: 30%; background-color: #f9f9f9; padding: 25px; border-radius: 8px; border: 1px solid #ddd; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">
            <h3 style="margin-top: 0; border-bottom: 1px solid #ccc; padding-bottom: 10px; margin-bottom: 20px; color: #333;">Resumen del Pedido</h3>
            
            <div style="display: flex; justify-content: space-between; margin-bottom: 15px; color: #555;">
                <span>Subtotal:</span>
                <span id="resumen-subtotal">$0.00</span>
            </div>
            <div style="display: flex; justify-content: space-between; margin-bottom: 15px; color: #555;">
                <span>Envío estimado:</span>
                <span id="resumen-envio">$150.00</span>
            </div>
            
            <div style="display: flex; justify-content: space-between; margin-top: 15px; padding-top: 15px; border-top: 2px solid #ccc; font-size: 20px; font-weight: bold; color: #0033a0;">
                <span>Total:</span>
                <span id="resumen-total">$0.00 MXN</span>
            </div>

            <div id="alerta-envio-gratis" style="display: none; margin-top: 15px; font-size: 13px; color: #155724; background-color: #d4edda; padding: 10px; border-radius: 5px; border: 1px solid #c3e6cb;">
                <i class="fa-solid fa-truck-fast"></i> ¡Felicidades! Tienes envío gratis.
            </div>
            
            <div style="text-align: center; margin-top: 25px;">
                <button id="btn-proceder-pago" style="width: auto; padding: 12px 30px; font-size: 16px; background-color: #28a745; color: white; border: none; border-radius: 5px; font-weight: bold; cursor: pointer; transition: 0.3s;">
                    Proceder al Pago
                </button>
                <br>
                <a href="index.php" style="display: inline-block; margin-top: 15px; color: #0033a0; text-decoration: none; font-size: 14px;">Seguir comprando</a>
            </div>
        </div>

    </div>
</div>

<!-- LÓGICA UNIVERSAL -->
<script>
    const txtResumenSubtotal = document.getElementById('resumen-subtotal');
    const txtResumenEnvio = document.getElementById('resumen-envio');
    const txtResumenTotal = document.getElementById('resumen-total');
    const alertaEnvioGratis = document.getElementById('alerta-envio-gratis');
    const btnProcederPago = document.getElementById('btn-proceder-pago');
    const cuerpoCarrito = document.getElementById('cuerpo-carrito');

    function calcularCarrito() {
        
        const filas = document.querySelectorAll('.fila-producto');
        let subtotalGlobal = 0;

        if (filas.length === 0) {
            cuerpoCarrito.innerHTML = '<tr><td colspan="5" style="text-align: center; padding: 40px; color: #666; font-size: 18px;">Tu carrito está vacío.</td></tr>';
            actualizarTextosDOM(0, 0, 0);
            alertaEnvioGratis.style.display = 'none';
            btnProcederPago.style.backgroundColor = "#ccc";
            btnProcederPago.style.cursor = "not-allowed";
            btnProcederPago.disabled = true;
            return;
        }

        filas.forEach(fila => {
            const input = fila.querySelector('.input-cantidad');
            const txtSubtotalFila = fila.querySelector('.precio-fila-texto');
            const precioUnitario = parseFloat(fila.getAttribute('data-precio'));
            
            let cantidad = parseInt(input.value);
            if(cantidad < 1 || isNaN(cantidad)) {
                cantidad = 1;
                input.value = 1;
            }

            const subtotalFila = precioUnitario * cantidad;
            txtSubtotalFila.innerText = "$" + subtotalFila.toFixed(2);
            subtotalGlobal += subtotalFila;
        });

        let costoEnvio = 150.00;
        if (subtotalGlobal + costoEnvio >= 500) {
            costoEnvio = 0.00;
            alertaEnvioGratis.style.display = 'block'; 
        } else {
            costoEnvio = 150.00;
            alertaEnvioGratis.style.display = 'none'; 
        }

        actualizarTextosDOM(subtotalGlobal, costoEnvio, subtotalGlobal + costoEnvio);
    }

    function actualizarTextosDOM(sub, envio, total) {
        txtResumenSubtotal.innerText = "$" + sub.toFixed(2);
        txtResumenEnvio.innerText = "$" + envio.toFixed(2);
        txtResumenTotal.innerText = "$" + total.toFixed(2) + " MXN";
    }

    function eliminarProducto(boton) {
        const fila = boton.closest('tr');
        fila.remove();
        calcularCarrito();
    }

    document.querySelectorAll('.input-cantidad').forEach(input => {
        input.addEventListener('input', calcularCarrito);
    });
    
    calcularCarrito();
</script>

</body>
</html>