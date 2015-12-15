<!DOCTYPE html>
<html <?php language_attributes(); ?> lang="en">
    <head>
        <?php $template_uri = esc_url( get_template_directory_uri() ); ?>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title><?php wp_title(' | ', true, 'right'); ?><?php bloginfo('name'); ?></title>
        <link href="<?php echo $template_uri; ?>/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo $template_uri; ?>/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo $template_uri; ?>/css/prettyPhoto.css" rel="stylesheet">
        <link href="<?php echo $template_uri; ?>/css/price-range.css" rel="stylesheet">
        <link href="<?php echo $template_uri; ?>/css/animate.css" rel="stylesheet">
        <link href="<?php echo $template_uri; ?>/css/main.css" rel="stylesheet">
        <link href="<?php echo $template_uri; ?>/css/responsive.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="<?php echo $template_uri; ?>/js/html5shiv.js"></script>
        <script src="<?php echo $template_uri; ?>/js/respond.min.js"></script>
        <![endif]-->
        <link rel="shortcut icon" href="<?php echo $template_uri; ?>/images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $template_uri; ?>/images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $template_uri; ?>/images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $template_uri; ?>/images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo $template_uri; ?>/images/ico/apple-touch-icon-57-precomposed.png">
        <?php wp_head(); ?>
    </head><!--/head-->

    <body>