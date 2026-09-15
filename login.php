<?php include 'includes/header.php'; ?>

<div class="contenedor-login">
<div class="caja-login">
    <h2>Bienvenido</h2>
    <p>Ingresa tus credenciales para administrar el inventario</p>

    <form action="backend/procesar_login.php" method="POST">

        <div class="grupo-input">
            <label for="correo">Correo electronico</label>
            <input type="email" id="correo" name="correo" required placeholder="admin@textilnet.com">
        </div>

        <div class="grupo-input">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" required placeholder="********">
            </div>

            <button type="submit" class="btn-login">Iniciar sesion</button>

            <div class="enlaces-extra">
                <a href="#">¿Olvidaste tu contraseña?</a>
            </div>


    </form>
</div>
</boddy>
</html>