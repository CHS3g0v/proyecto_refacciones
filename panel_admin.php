<?php include 'includes/header.php'; ?>

<div class="contenedor-principal" style="display: flex; gap: 30px; padding: 30px 20px;">
    
    <!-- BARRA LATERAL (Menú del Admin) -->
    <aside style="width: 250px; background: #fff; border: 1px solid #ddd; border-radius: 8px; padding: 20px; height: fit-content; box-shadow: 0 4px 6px rgba(0,0,0,0.05);">
        <h3 style="margin-top: 0; color: #333; border-bottom: 2px solid #eee; padding-bottom: 10px;">
            <i class="fa-solid fa-screwdriver-wrench"></i> Administración
        </h3>
        <ul style="list-style: none; padding: 0; margin: 0;">
            <li style="margin-bottom: 15px;">
                <a href="#" style="text-decoration: none; color: #0033a0; font-weight: bold;"><i class="fa-solid fa-plus-circle"></i> Agregar Producto</a>
            </li>
            <li style="margin-bottom: 15px;">
                <a href="#" style="text-decoration: none; color: #666;"><i class="fa-solid fa-boxes-stacked"></i> Ver Inventario</a>
            </li>
            <li style="margin-bottom: 15px;">
                <a href="#" style="text-decoration: none; color: #666;"><i class="fa-solid fa-chart-line"></i> Reporte de Ventas</a>
            </li>
            <li style="margin-top: 30px; border-top: 1px solid #eee; padding-top: 15px;">
                <!-- Botón para cerrar sesión y regresar al inicio -->
                <a href="index.php" style="text-decoration: none; color: #dc3545; font-weight: bold;"><i class="fa-solid fa-right-from-bracket"></i> Cerrar Sesión</a>
            </li>
        </ul>
    </aside>

    <!-- ÁREA PRINCIPAL (Formulario para subir productos) -->
    <main style="flex: 1; background: #fff; border: 1px solid #ddd; border-radius: 8px; padding: 30px; box-shadow: 0 4px 6px rgba(0,0,0,0.05);">
        <h2 style="margin-top: 0; color: #0033a0;">Agregar Nuevo Repuesto</h2>
        <p style="color: #666; margin-bottom: 25px;">Llena los datos para publicar un nuevo producto en el catálogo.</p>

        <!-- El atributo enctype es VITAL para que PHP pueda recibir la imagen -->
        <form action="#" method="POST" enctype="multipart/form-data" style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
            
            <div style="display: flex; flex-direction: column; gap: 8px;">
                <label style="font-weight: bold; font-size: 14px; color: #333;">Nombre del Producto</label>
                <input type="text" name="nombre" placeholder="Ej. Bobina de acero" required style="padding: 10px; border: 1px solid #ccc; border-radius: 5px; outline: none;">
            </div>

            <div style="display: flex; flex-direction: column; gap: 8px;">
                <label style="font-weight: bold; font-size: 14px; color: #333;">Número de Repuesto (Ref/SKU)</label>
                <input type="text" name="sku" placeholder="Ej. 329 H" required style="padding: 10px; border: 1px solid #ccc; border-radius: 5px; outline: none;">
            </div>

            <div style="display: flex; flex-direction: column; gap: 8px;">
                <label style="font-weight: bold; font-size: 14px; color: #333;">Precio (MXN)</label>
                <input type="number" name="precio" step="0.01" placeholder="Ej. 120.00" required style="padding: 10px; border: 1px solid #ccc; border-radius: 5px; outline: none;">
            </div>

            <div style="display: flex; flex-direction: column; gap: 8px;">
                <label style="font-weight: bold; font-size: 14px; color: #333;">Categoría</label>
                <select name="categoria" style="padding: 10px; border: 1px solid #ccc; border-radius: 5px; outline: none;">
                    <option value="rectas">Máquinas Rectas</option>
                    <option value="overlock">Overlock</option>
                    <option value="bordadoras">Bordadoras</option>
                    <option value="accesorios">Accesorios y Aceites</option>
                </select>
            </div>

            <div style="grid-column: span 2; display: flex; flex-direction: column; gap: 8px;">
                <label style="font-weight: bold; font-size: 14px; color: #333;">Descripción Corta</label>
                <textarea name="descripcion" rows="3" placeholder="Detalles técnicos del producto..." required style="padding: 10px; border: 1px solid #ccc; border-radius: 5px; outline: none; resize: vertical;"></textarea>
            </div>

            <div style="grid-column: span 2; display: flex; flex-direction: column; gap: 8px;">
                <label style="font-weight: bold; font-size: 14px; color: #333;">Imagen del Producto</label>
                <input type="file" name="imagen" accept="image/*" required style="padding: 12px; border: 2px dashed #ccc; border-radius: 5px; background: #f9f9f9; cursor: pointer;">
            </div>

            <button type="submit" style="grid-column: span 2; padding: 14px; background: #0033a0; color: white; border: none; border-radius: 5px; font-weight: bold; cursor: pointer; font-size: 16px; transition: 0.3s; margin-top: 10px;">
                <i class="fa-solid fa-floppy-disk"></i> Guardar y Publicar Producto
            </button>
        </form>
    </main>
</div>

</body>
</html>