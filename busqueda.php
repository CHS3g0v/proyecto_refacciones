<?php include 'includes/header.php'; ?>

<!-- El contenedor principal se pega a las pestañas -->
<div class="contenedor-principal fondo-blanco">
    
    <form action="backend/procesar_busqueda.php" method="GET" class="formulario-busqueda">
        
        <div class="fila-busqueda">
            <label for="num_repuesto">Número de Repuesto</label>
            <input type="text" id="num_repuesto" name="num_repuesto">
            <span class="nota-busqueda">(Use * para comodines)</span>
        </div>

        <div class="fila-busqueda">
            <label for="fabricante">Fabricante</label>
            <select id="fabricante" name="fabricante">
                <option value="todos">Todo</option>
                <option value="hirose">Hirose Hooks</option>
                <option value="brother">Brother</option>
                <option value="juki">Juki</option>
            </select>
        </div>

        <div class="fila-busqueda">
            <label for="grupo">Grupo de Repuesto</label>
            <select id="grupo" name="grupo">
                <option value="todos">Todo</option>
                <option value="cangrejos">Cangrejos</option>
                <option value="agujas">Agujas</option>
                <option value="bandas">Bandas de transmisión</option>
            </select>
        </div>

        <div class="enlaces-ayuda">
            <p>Haga clic <a href="#">aquí</a> para aprender a buscar por número de repuesto.</p>
            <br>
            <p>¿No está seguro de cómo se llama un repuesto? Ingrese algunas palabras clave a continuación.</p>
            <input type="text" class="input-ancho" name="palabras_clave">
        </div>

        <div class="acciones-busqueda">
            <button type="reset" class="btn-gris">Reiniciar</button>
            <button type="submit" class="btn-gris">Buscar</button>
        </div>

    </form>

</div>

</body>
</html>