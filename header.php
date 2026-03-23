<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- FONT AWESOME (for icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- TOP BLACK BAR -->
<div class="top-bar">
    <p>
        Sign up and get 20% off to your first order.
        <a href="#">Sign Up Now</a>
    </p>
    <span class="close-btn">&times;</span>
</div>

<!-- MAIN HEADER -->
<header class="main-header">
    <div class="header-container">

        <!-- LEFT SECTION -->
        <div class="left-section">
            <i class="fa-solid fa-bars menu-icon"></i>
            <span class="logo">SHOP.CO</span>
        </div>

        <!-- RIGHT SECTION -->
        <div class="right-section">
            <i class="fa-solid fa-magnifying-glass"></i>
            <i class="fa-regular fa-user"></i>
            <i class="fa-solid fa-chevron-down"></i>
            <i class="fa-solid fa-cart-shopping"></i>
        </div>

    </div>
</header>