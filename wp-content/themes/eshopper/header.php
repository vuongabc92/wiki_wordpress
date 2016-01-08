<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Eshopper
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> lang="en">
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Home | E-Shopper</title>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <link href="<?php echo THEME_URL; ?>/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo THEME_URL; ?>/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo THEME_URL; ?>/css/prettyPhoto.css" rel="stylesheet">
        <link href="<?php echo THEME_URL; ?>/css/price-range.css" rel="stylesheet">
        <link href="<?php echo THEME_URL; ?>/css/animate.css" rel="stylesheet">
        <link href="<?php echo THEME_URL; ?>/css/main.css" rel="stylesheet">
        <link href="<?php echo THEME_URL; ?>/css/responsive.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="<?php echo THEME_URL; ?>/js/html5shiv.js"></script>
        <script src="<?php echo THEME_URL; ?>/js/respond.min.js"></script>
        <![endif]-->
        <link rel="shortcut icon" href="images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
        <?php wp_head(); ?>
    </head><!--/head-->

    <body <?php body_class(); ?>>