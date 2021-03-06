<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="description" content="PizzaTime — пицца в Москве от итальянского повара">
    <meta name="keywords" content="пицца">

    <meta property="og:title" content="PizzaTime — пицца в Москве от итальянского повара" />
    <meta property="og:description" content="PizzaTime — пицца в Москве от итальянского повара" />
    <meta property="og:image" content="img/section-top/bg.jpg" />

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <title>PizzaTime — пицца в Москве от итальянского повара</title>


    <?php wp_head(); ?>

</head>

<body>

    <!-- header-page -->
    <header class="header-page">
        <div class="container header-page__container">
            <div class="header-page__start">
                <?php echo csl_CustomSiteLogo_show_logo(); ?>
            </div>
            <div class="header-page__end">
                <nav class="header-page__nav">
                    <?php wp_nav_menu(['menu' => 'Main-Menu-Header']); ?>
<!--                    <ul class="header-page__ul">
                        <li class="header-page__li">
                            <a class="header-page__link" href="#" data-scroll-to="section-catalog">
                                <span class="header-page__text">пицца</span>
                            </a>
                        </li>
                        <li class="header-page__li">
                            <a class="header-page__link" href="#" data-scroll-to="section-about">
                                <span class="header-page__text">о нас</span>
                            </a>
                        </li>
                        <li class="header-page__li">
                            <a class="header-page__link" href="#" data-scroll-to="section-contacts">
                                <span class="header-page__text">контакты</span>
                            </a>
                        </li>
                    </ul>
-->
                </nav>
                <div class="phone">
                    <?php echo do_shortcode('[contact-form-7 id="20" title="Phone-Button"]'); ?>
                </div>
                <div class="header-page__hamburger">
                    <button class="btn-menu" type="button" data-popup="popup-menu">
                        <span class="btn-menu__box">
                            <span class="btn-menu__inner"></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </header>
    <!-- /.header-page -->
    