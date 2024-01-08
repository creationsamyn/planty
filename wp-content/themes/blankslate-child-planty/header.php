<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Syne&display=swap" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body>
<header class="header">
<div id="logo">
<a href="http://localhost:8888/planty/home/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Logo.png" alt="logo-Planty"></a>
</div>
    <nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
    <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>
    </nav>
</header>

<main >
