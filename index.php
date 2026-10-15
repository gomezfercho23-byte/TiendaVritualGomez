<?php
// ==========================================
// SECCIÓN C: PROGRAMACIÓN CON PHP
// ==========================================

// RETO 1: Información del negocio
$nombre_heladeria = "Heladería Rico Rico";
$nombre_administrador = "Dario Fernando Gomez Agreda";
$ciudad = "Pasto";

// RETO 2: Mensaje de bienvenida según la edad
$edad = 10; // Puedes cambiar este valor para probar (ej. 15 o 20)

if ($edad >= 18) {
    $mensaje_bienvenida = "¡Bienvenido! Conoce nuestras promociones especiales";
} else {
    $mensaje_bienvenida = "¡Bienvenido! Descubre nuestros deliciosos sabores";
}

// RETO 3: Promoción según el día
$dia_semana = "martes"; // Puedes cambiar este valor para probar (ej. "martes" o "viernes")

if (strtolower($dia_semana) == "viernes") {
    $mensaje_promocion = "¡Hoy tenemos 2x1 en conos!";
} else {
    $mensaje_promocion = "Hoy puedes disfrutar de nuestros sabores habituales";
}

// RETO 4: Disponibilidad de un sabor
$disponible = true; // Puedes cambiar a true o false para probar

if ($disponible == true) {
    $mensaje_disponibilidad = "¡Este sabor está disponible!";
    $clase_disponibilidad = "disponible";
} else {
    $mensaje_disponibilidad = "Lo sentimos, este sabor está agotado";
    $clase_disponibilidad = "agotado";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $nombre_heladeria; ?></title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

    <!-- ENCABEZADO / IDENTIDAD VISUAL -->
    <header class="header">
        <div class="logo">🍦 <?php echo $nombre_heladeria; ?></div>
        <p class="info-admin">Administrado por: <strong><?php echo $nombre_administrador; ?></strong> | <?php echo $ciudad; ?></p>
    </header>

    <!-- BANNER CON MENSAJE DE BIENVENIDA -->
    <section class="banner">
        <h2><?php echo $mensaje_bienvenida; ?></h2>
    </section>

    <!-- SECCIÓN DE DESCRIPCIÓN DEL NEGOCIO -->
    <section class="contenedor descripcion">
        <h2>Sobre Nosotros</h2>
        <p>En <?php echo $nombre_heladeria; ?>, elaboramos los helados más cremosos y artesanales de la ciudad de <?php echo $ciudad; ?>. Utilizamos ingredientes 100% naturales para brindarte una experiencia refrescante e inolvidable.</p>
    </section>

    <!-- SECCIÓN DE SABORES DE HELADO -->
    <section class="contenedor">
        <h2>Nuestros Sabores</h2>
        <div class="grid-sabores">
            
            <!-- Sabor 1 -->
            <div class="tarjeta-helado">
                <img src="imagenes/helado1.jpg" alt="Helado de Fresa">
                <h3>Cono Sencillo</h3>
                <p class="precio">$5.000 COP</p>
                <button class="btn-comprar">Pedir Ahora</button>
            </div>

            <!-- Sabor 2 -->
            <div class="tarjeta-helado">
                <img src="imagenes/helado2.jpg" alt="Helado de Chocolate">
                <h3>Chocolate Intenso</h3>
                <p class="precio">$5.500 COP</p>
                <button class="btn-comprar">Pedir Ahora</button>
            </div>

            <!-- Sabor 3 -->
            <div class="tarjeta-helado">
                <img src="imagenes/helado3.jpg" alt="Helado de Vainilla">
                <h3>Tres Sabores</h3>
                <p class="precio">$4.500 COP</p>
                <button class="btn-comprar">Pedir Ahora</button>
            </div>

            <!-- Sabor 4 (Sabor especial con estado de disponibilidad PHP) -->
            <div class="tarjeta-helado especial">
                <img src="imagenes/helado4.jpg" alt="Helado de Pistacho">
                <h3>Morita</h3>
                <p class="precio">$6.000 COP</p>
                <p class="estado <?php echo $clase_disponibilidad; ?>">
                    <?php echo $mensaje_disponibilidad; ?>
                </p>
                <button class="btn-comprar">Pedir Ahora</button>
            </div>

        </div>
    </section>

    <!-- SECCIÓN DE PROMOCIONES -->
    <section class="contenedor promocion-seccion">
        <h2>Promoción del Día</h2>
        <div class="caja-promocion">
            <p><?php echo $mensaje_promocion; ?></p>
        </div>
    </section>

    <!-- PIE DE PÁGINA -->
    <footer>
        <p>&copy; 2026 <?php echo $nombre_heladeria; ?> - Todos los derechos reservados.</p>
        <p>📍 Dirección: Calle Centro #12-34, <?php echo $ciudad; ?> | 📞 Teléfono: +57 3125217571 | ✉️ Contacto: dario@heladeriaricorico.com</p>
    </footer>

</body>
</html>