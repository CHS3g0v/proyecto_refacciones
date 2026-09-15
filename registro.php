<?php include 'includes/header.php'; ?>

<div class="contenedor-login">
    <div class="caja-login caja-cliente">
        <h2>Crear Nueva Cuenta</h2>
        <p>Regístrate para realizar tus compras</p>
        
        <!-- Apunta al script que procesará el nuevo usuario en la base de datos -->
        <form action="backend/procesar_registro.php" method="POST">
            
            <div class="grupo-input">
                <label for="nombres">Nombres</label>
                <input type="text" id="nombres" name="nombres" required placeholder="">
            </div>
            <div class="grupo-input">
                <label for="apellidos">Apellidos</label>
                <input type="text" id="apellidos" name="apellidos" required placeholder=""> 
            </div>

            <div class="grupo-input">
                <label for="correo_registro">Correo Electrónico</label>
                <input type="email" id="correo_registro" name="correo_registro" required placeholder="">
            </div>
            
            <div class="grupo-input">
                <label for="password_registro">Contraseña</label>
                <input type="password" id="password_registro" name="password_registro" required placeholder="Crea una contraseña segura">
            </div>
            <div class="grupo-input">
                <label for="password_registro">Confirma Contraseña</label>
                <input type="password" id="password_registro" name="password_registro" required placeholder="">
            </div>
            <button type="submit" class="btn-login">Registrarme</button>
            
            <div class="enlaces-extra">
                <p>¿Ya tienes cuenta? <a href="login_cliente.php" class="link-destacado">Inicia sesión aquí</a></p>
            </div>
            
        </form>
    </div>
</div>

</body>
</html>