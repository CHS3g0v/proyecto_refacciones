<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SewingTech - Refacciones</title>
    <!-- Iconos de FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Tu hoja de estilos -->
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>

<header class="cabecera-principal">
    
    <!-- Parte superior: Logo (Izquierda) y Botones (Derecha) -->
    <div class="cabecera-superior">
        <h1 class="logo">Refacciones TextilNet</h1>
        
        <div class="iconos-usuario">
            <a href="carrito.php" class="btn-icono">
                <i class="fa-solid fa-cart-shopping"></i>
                <span>Carrito</span>
            </a>
            
            <a href="login_cliente.php" class="btn-icono">
                <i class="fa-solid fa-user"></i>
                <span>Iniciar Sesión</span>
            </a>
        </div>
    </div>

    <!-- Parte inferior: Pestañas centradas -->
    <div class="nav-tabs-container">
        <div class="nav-tabs">
            <a href="index.php" class="tab active">Catálogo de Repuestos</a>
            
            <!-- Pestaña con Menú Desplegable -->
            <div class="dropdown-wrapper">
                <button class="tab btn-dropdown">
                    Categorías <i class="fa-solid fa-caret-down"></i>
                </button>
                <div class="dropdown-menu">
                    <a href="#">Refacciones máquinas de coser industriales</a>
                    <a href="#">Aceites y lubricantes</a>
                    <a href="#">Cintas Adhesivas</a>
                    <a href="#">Lámparas LED y punteros láser</a>
                </div>
            </div>
            
            <a href="busqueda.php" class="tab">Búsqueda de Número de Repuesto</a>
            <a href="login.php" class="tab">Administración</a>
        </div>
    </div>
</header>