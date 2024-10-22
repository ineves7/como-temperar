<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
   
        <!-- Wordpress Header -->
        <?php wp_head(); ?>
</head>
<body>
    <header id="header">
        <a href="/">
        <div id="logo">
            <div class="oval oval0"></div>
            <div class="oval oval1"></div>
            <div class="oval oval2"></div>
            <div class="oval oval3"></div>
        </div>
        </a>
        <nav id="nav">
            <button aria-label="Abrir Menu"id="btn-mobile" aria-haspopup="true" aria-controls="menu" aria-expanded="false">
                <span id="hamburguer"></span>
            </button>
            <ul id="menu" role="menu">
                <li><a href="/Temperos/">Temperos</a></li>
                <li><a href="/">Blog</a></li>
                <li><a href="/">Sobre</a></li>
                <li><a href="/">Contato</a></li>
            </ul>
        </nav>
    </header>
    <div class="banner">
      <div class="banner-content">
        <h1>Como Temperar</h1>
        <p>Sabor na medida certa!</p>
      </div>
    </div>