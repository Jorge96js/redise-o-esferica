<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Esferica</title>
        

    
    <?php wp_head(); ?>
    
</head>
<body>
    <div class="wrapper">
        <!--Navegacion-->
        <nav class="navbar <?php if ( is_page() || is_single() ) echo 'nav-page'; ?> " id="navbar">
        <div class="navbar__logo">
            <a href="/">
            <img src="<?php echo get_template_directory_uri(); ?>/public/build/img/Logo Esferica-1.svg" alt="logo esferica">
            </a>
        </div>

        <ul class="navbar__menu" id="navMenu" >
            <a href="/" class="footer__link">Inicio</a>
            <a href="/#quienes-somos" class="footer__link">Quiénes Somos</a>
            <a href="/proyectos" class="footer__link">Proyectos</a>
            <a href="/noticias" class="footer__link">Consultoria Ambiental</a>
            <a href="/multimedia" class="footer__link">Academias</a>
            <a href="/participa" class="footer__link">Relaciones internacionales</a>
        </ul>

            <button data-menu="close" id="mobileButton" class="mobile-button"><i class="fa-solid fa-bars"></i></button>
    </nav>