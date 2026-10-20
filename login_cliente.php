<?php include 'includes/header.php'; ?>


<div class="contenedor-principal fondo-blanco" style="display: flex; justify-content: center; align-items: center; min-height: 65vh; padding: 40px 20px;">
    
    <div class="tarjeta-formulario">
        <h2 class="titulo-formulario">Iniciar Sesión</h2>
        <p class="subtitulo-formulario">Bienvenido de vuelta a Refacciones TextilNet</p>

   
        <form action="#" method="POST">
            
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

            <div class="opciones-formulario">
                <label>
                    <input type="checkbox" name="recordar"> Recordarme
                </label>
                
            </div>

            <button type="submit" class="btn-formulario">Ingresar</button>
        </form>

        <div class="pie-formulario">
            ¿No tienes una cuenta? <a href="registro.php">Regístrate aquí</a>
        </div>
    </div>

</div>

</body>
</html>