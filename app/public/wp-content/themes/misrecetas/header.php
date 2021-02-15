<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name ="description" content="Página web de recetas">
    <meta name="keywords" content="recetas, ingredientes, menus">
    <link rel="icon" href="/images/restaurant.png">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css">  
    <link rel="stylesheet" href=""> 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet"> 
    <?php wp_head(); ?>

</head>
<body>
    <div class="container">
    <header id="header" class="row-full block-center-row ll mb-3">
       
       <h2 class="fnt-xl2 head-strong txt-center">MIS RECETAS </h2>
       <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/restaurant.png" alt="Mis recetas">
    </header>

    <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-1',
                        'menu_id' => 'primary-menu',
                        'container' => 'nav',
                        'container_class' => 'nav-main block-center-row mb-2'
                    )
                );

            ?>            
  
    <!--<nav class="nav-main fnt-lg block-center-row mb-2">
                <ul>
                    <li>Inicio</li>
                    <li class="separator">|</li>
                    <li><a href="">Recetas</a></li>
                    <li class="separator">|</li>
                    <li><a href="">Contactar</a></li>                      
                </ul>                             
            </nav>-->