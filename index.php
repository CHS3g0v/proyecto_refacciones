<?php include 'includes/header.php'; ?>

<div class="contenedor-principal">
    <!-- Barra lateral de categorías -->
    <aside class="sidebar-categorias">
        <h3>Categorías</h3>
        <ul>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li class="activo"><a href="#">5</a></li>
            <li><a href="#">6</a></li>
            <li><a href="#">7</a></li>
        </ul>
    </aside>

    <!-- Área de la cuadrícula de productos -->
    <main class= "area-productos">
        <div class="grid-productos">
            
          <article class="tarjeta">
    <div class="imagen-caja">
        <img src="assets/img/cangrejo-hirose.jpg" alt="Cangrejo Hirose Hooks">
    </div>
    <!-- Agregamos el título y modelo basándonos en tu imagen -->
    <h4 style="font-size: 15px; margin: 10px 0; color: #0033a0;">Cangrejo Recta Industrial</h4>
    <p class="codigo-pieza">Modelo: 329 H</p>
    <p style="font-size: 12px; color: #666; margin-top: 5px;">Hirose Hooks</p>
     <a href="detalle_producto.php" style="display:inline-block; margin-top:10px; padding:8px 15px; background:#0033a0; color:white; text-decoration:none; border-radius:4px; font-size:13px;">Ver pieza</a>
</article>
            
            <?php 
                // Aquí ketzy inyectará el ciclo de PHP para generar el resto 
            ?>

        </div>
    </main>
</div>

</body>
</html>