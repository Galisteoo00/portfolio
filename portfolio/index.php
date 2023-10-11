<?php
include "./config/config.php";
$nombre = $datos['nombre'];
$apellidos = $datos['apellidos'];
$foto = $datos['foto'];
$catprofesional = $datos['catprofesional'];
$email = $datos['email'];
$telefono = $datos['telefono'];
$redessociales = $datos['redessociales'];
$recursos = $datos['recursos'];
$trabajos = $datos['trabajos'];
$habilidades = $datos['habilidades'];
$logros = $datos['logros'];
?>

<!DOCTYPE html>
<html lang="es">
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $nombre . " " . $apellidos; ?> - Portafolio</title>
    <link rel="stylesheet" href="styles.css">
    <!-- Agregar el enlace a la fuente de Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="#sobre-mi">Sobre mí</a></li>
                <li><a href="#trabajos">Trabajos</a></li>
                <li><a href="#habilidades">Habilidades</a></li>
                <li><a href="#logros">Logros</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <section id="sobre-mi">
    <div class="container">
        <img src="<?php echo $foto; ?>" alt="Foto de perfil de <?php echo $nombre; ?>" class="profile-image">
        <h1><?php echo $nombre . " " . $apellidos; ?></h1>
        <p><?php echo $catprofesional; ?></p>
        
        <p><a href="<?php echo $recursos; ?>" target="_blank">Recursos</a></p>
    </div>
</section>



    <section id="trabajos">
    <div class="container">
        <h2>Trabajos</h2>
        <ul>
            <?php foreach ($trabajos as $trabajo) { ?>
                <li>
                    <h3><?php echo $trabajo['titulo']; ?></h3>
                    <p><?php echo $trabajo['descripcion']; ?></p>
                </li>
            <?php } ?>
        </ul>
    </div>
</section>


    <section id="habilidades">
        <div class="container">
            <h2>Habilidades</h2>
            <ul>
                <?php foreach ($habilidades as $habilidad) { ?>
                    <li><?php echo $habilidad; ?></li>
                <?php } ?>
            </ul>
        </div>
    </section>

    <section id="logros">
    <div class="container">
        <h2>Logros</h2>
        <ul>
            <?php foreach ($logros as $logro) { ?>
                <li><?php echo $logro; ?></li>
            <?php } ?>
        </ul>
    </div>
</section>


    <section id="contacto">
    <div class="container">
        <h2>Contacto</h2>
        <p>Email: <?php echo $email; ?></p>
        <p>Teléfono: <?php echo $telefono; ?></p>
        <p><a href="<?php echo $redessociales['LinkedIn']; ?>" target="_blank">LinkedIn</a></p>
        <p><a href="<?php echo $redessociales['Twitter']; ?>" target="_blank">Twitter</a></p>
        
        <p><a href="<?php echo $recursos; ?>" target="_blank">Recursos</a></p>
    </div>
</section>


    <footer>
    <div class="container">
        <p>&copy; <?php echo date('Y'); ?> <?php echo $nombre; ?> - Todos los derechos reservados</p>
    </div>
</footer>

</body>
</html>
