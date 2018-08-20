<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes()?>><![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" <?php language_attributes()?>><![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" <?php language_attributes()?>><![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" <?php language_attributes() ?>><!--<![endif]-->
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width">
    <title><?php wp_title('|', true, 'right') ?></title>
    <meta name="author" content="">
    <link rel="author" href="">
    <?php wp_head() ?>

    <script
            src="<?php bloginfo('template_url'); ?>/js/jquery-2.2.4.min.js"
            integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
            crossorigin="anonymous"></script>

    <script src="<?php bloginfo('template_url'); ?>/js/utils.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
          integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>

</head>
<body <?php body_class() ?>>
<div class="d-flex align-content-start flex-wrap">

</div>
<header class='header text-primary d-flex flex-row justify-content-between align-items-center desktop'>
    <?php wp_nav_menu(array(
        'theme_location' => 'main-nav',
        'container' => 'nav',
        'container_id' => 'primary-nav',
    )) ?>

    <div class="logo">
        <img src="<?php bloginfo('template_url'); ?>/images/svg/logo-hekima-black.svg" alt="Logo Hekima">
    </div>

</header>

<header class='d-flex flex-row mobile justify-content-start align-content-center'>
    <div class="menu-mobile">
        <nav class="appbar d-flex flex-row justify-content-start align-content-center">
            <div class="icon-close d-flex flex-row justify-content-center align-content-center">
                <img src="<?php bloginfo('template_url'); ?>/images/svg/icon-close.svg" alt="Close">
            </div>
            <div class="logo d-flex flex-row justify-content-center align-content-center">
                <img src="<?php bloginfo('template_url'); ?>/images/svg/logo-hekima-white.svg" alt="Close">
            </div>
        </nav>

        <?php wp_nav_menu(array(
            'theme_location' => 'main-nav',
            'container' => 'nav',
            'container_id' => 'primary-nav',
        )) ?>
    </div>

    <div class="icon-close d-flex flex-row justify-content-center align-content-center">
        <img src="<?php bloginfo('template_url'); ?>/images/svg/icon-menu-mobile.svg" alt="Menu">
    </div>

    <div class="logo d-flex flex-row justify-content-center align-content-center">
        <img src="<?php bloginfo('template_url'); ?>/images/svg/logo-hekima-black.svg" alt="Logo Hekima">
    </div>

</header>

<div id="content-wrap">
