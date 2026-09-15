<?php include 'includes/header.php'; ?>

<div class="contenedor-login">
    <div class="caja-login caja-cliente">
        <h2>Ingresar a mi cuenta</h2>
        
        <!-- script diferente que ketzy hará para los clientes -->
        <form action="backend/login_cliente.php" method="POST">
            
            <div class="grupo-input">
                <label for="correo_cliente">Correo Electrónico</label>
                <input type="email" id="correo_cliente" name="correo_cliente" required placeholder="tu@correo.com">
            </div>
            
            <div class="grupo-input">
                <label for="password_cliente">Contraseña</label>
                <input type="password" id="password_cliente" name="password_cliente" required placeholder="********">
            </div>
            
            <button type="submit" class="btn-login">Ingresar</button>
            
            <div class="enlaces-extra">
                <a href="#">¿Olvidaste tu contraseña?</a>
                <hr class="divisor">
                <p><a href="registro.php" class="link-destacado">Crear una Cuenta</a></p>
            </div>
            
        </form>
    </div>
</div>

</body>
</html>