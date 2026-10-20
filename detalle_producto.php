<?php include 'includes/header.php'; ?>

<div class="contenedor-principal fondo-blanco">
    

    <a href="index.php" class="btn-regresar">
        <i class="fa-solid fa-arrow-left"></i> Volver al Catálogo
    </a>


    <div class="detalle-producto-container">
        

        <div class="detalle-imagen-caja">
            <img src="assets/img/cangrejo-hirose.jpg" alt="Cangrejo para Recta Industrial" class="img-detalle">
        </div>


        <div class="detalle-info-caja">
            <span class="etiqueta-marca">Hirose Hooks</span>
            <h2 class="titulo-detalle">Cangrejo para Recta Industrial</h2>
            <p class="sku-detalle">Número de Repuesto (Ref): <strong>329 H</strong></p>
            
            <h3 class="precio-detalle">$20.00 MXN</h3>
            
            <div class="descripcion-producto">
                <p>Cangrejo original de alta velocidad y precisión. Ideal para máquinas rectas industriales estándar que trabajan en jornadas largas. Evita el salto de puntada y el desgaste prematuro del hilo.</p>
                <ul>
                    <li><strong>Material:</strong> Acero endurecido de alta calidad</li>
                    <li><strong>Tipo de máquina:</strong> Recta Industrial (Brother, Juki, Siruba)</li>
                    <li><strong>Garantía:</strong> 6 meses contra defectos de fábrica</li>
                </ul>
            </div>

            <form action="carrito.php" method="GET" class="caja-comprar">
                <div class="selector-cantidad">
                    <label for="cantidad">Cantidad:</label>
                    <input type="number" id="cantidad" name="cantidad" value="1" min="1" class="input-cantidad">
                </div>
                
                <button type="submit" class="btn-agregar-carrito">
                    <i class="fa-solid fa-cart-plus"></i> Agregar al Carrito
                </button>
            </form>
            
        </div>
    </div>

</div>

</body>
</html>