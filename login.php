<?php include 'includes/header.php'; ?>

<div class="contenedor-principal fondo-blanco" style="display: flex; justify-content: center; align-items: center; min-height: 65vh; padding: 40px 20px;">
    
    <!-- Usamos tu misma clase de tarjeta, pero le ponemos un borde superior oscuro -->
    <div class="tarjeta-formulario" style="border-top: 5px solid #333;">
        <h2 class="titulo-formulario" style="color: #333;"><i class="fa-solid fa-shield-halved"></i> Acceso Admin</h2>
        <p class="subtitulo-formulario">Panel de control de Refacciones TextilNet</p>

        <!-- Este formulario enviará los datos al panel cuando tu compañera lo conecte -->
        <form action="panel_admin.php" method="POST">
            
            <div class="grupo-input">
                <label for="usuario_admin">Usuario Administrador</label>
                <div class="input-con-icono">
                    <i class="fa-solid fa-user-tie"></i>
                    <input type="text" id="usuario_admin" name="usuario_admin" placeholder="Ej. admin" required>
                </div>
            </div>

            <div class="grupo-input">
                <label for="password_admin">Contraseña</label>
                <div class="input-con-icono">
                    <i class="fa-solid fa-key"></i>
                    <input type="password" id="password_admin" name="password_admin" placeholder="********" required>
                </div>
            </div>

            <!-- Botón oscuro para diferenciarlo del botón verde de clientes -->
            <button type="submit" class="btn-formulario" style="background-color: #333;">
                Entrar al Panel
            </button>
        </form>
    </div>

</div>

</body>
</html>