<!-- Containing the header -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    $base_path = get_template_directory_uri();
    wp_head() ?>
</head>

<body>
    <header>
        <div class="nav-title">
            <!-- <div class="logo-container"> -->
            <img src=<?php get_full_path("/assets/images/icon_transperent.png") ?> alt="" class="nav-logo">
            <!-- </div> -->
            <!-- <div class="text-wrapper"> -->
            <a href="#" class="logo-text">Testbyte</a>
            <!-- </div> -->

        </div>
        <i class="fa fa-bars drawer-icon"></i>
        <nav class="site-nav">
            <!-- <?php
                    // wp_nav_menu(array(
                    //     'menu' => 'primary',
                    //     'container' => 'primary',
                    //     'theme_location' => 'primary',
                    //     'items_wrap' => '<ul id="" class="nav-items ">%3$s</ul>'
                    // ));
                    ?> -->
            <!-- <button class="nav-signup-btn btn" onclick="">Sign Up</button>
            <button class=" nav-signup-btn btn">Login</button> -->
            <ul class="">
                <li class="nav-item"><a href="#" class="nav_link">Home</a></li>
                <li class="nav-item"><a href="#about-us" class="nav_link">About Us</a></li>
                <li class="nav-item"><a href="#" class="nav_link">Courses</a></li>
                <li class="nav-item"><a href="#" class="nav_link">Testimonials</a></li>
                <li class="nav-item"><a href="#" class="nav_link">Hire through us</a></li>
                <li class="nav-item"><a href="#" class="nav_link">Contact Us</a></li>
            </ul>
            <div class="nav-social-media">
                <button type="sumbit" class="cst-nav-btn nav-wp">Whatsapp<i class="fa-brands fa-whatsapp"></i></button>
                <button type="sumbit" class="cst-nav-btn nav-ins">Instagram<i class="fa-brands fa-instagram"></i></button>
            </div>
            <!-- <hr style="border: 2px solid grey;"> -->
        </nav>
    </header>
    <hr class="header-hr">

    <div class="container">