<?php include 'includes/header.php'; ?>

<!-- El contenedor usa Flexbox para centrar la tarjeta vertical y horizontalmente -->
<div class="contenedor-principal fondo-blanco" style="display: flex; justify-content: center; align-items: center; min-height: 75vh; padding: 40px 20px;">
    
    <div class="tarjeta-formulario">
        <h2 class="titulo-formulario">Crear Cuenta</h2>
        <p class="subtitulo-formulario">Únete a Refacciones TextilNet</p>

        <!-- Formulario listo para que tu compañera lo conecte a la base de datos -->
        <form action="#" method="POST">
            
            <div class="grupo-input">
                <label for="nombre">Nombre Completo</label>
                <div class="input-con-icono">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" id="nombre" name="nombre" placeholder="Ej. Juan Pérez" required>
                </div>
            </div>

            <div class="grupo-input">
                <label for="correo">Correo Electrónico</label>
                <div class="input-con-icono">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" id="correo" name="correo" placeholder="ejemplo@correo.com" required>
                </div>
            </div>

            <div class="grupo-input">
                <label for="password">Contraseña</label>
                <div class="input-con-icono">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" id="password" name="password" placeholder="********" required>
                </div>
            </div>

            <div class="grupo-input">
                <label for="confirmar_password">Confirmar Contraseña</label>
                <div class="input-con-icono">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" id="confirmar_password" name="confirmar_password" placeholder="********" required>
                </div>
            </div>

            <button type="submit" class="btn-formulario">Registrarse</button>
        </form>

        <div class="pie-formulario">
            ¿Ya tienes una cuenta? <a href="login_cliente.php">Inicia sesión aquí</a>
        </div>
    </div>

</div>

</body>
</html>