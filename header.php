<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php wp_title( '|', true, 'right' ); ?> <?php bloginfo('name'); ?>
    </title>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <header class="page-header">
        <section class="navbar">
            <div class="container">
            <a href="<?php echo home_url() ?>" class="navbar__logo-wrapper brand">
                <?php if ( get_field('main_logo', 'option') ) : ?>
                    <?php $main_logo = get_field('main_logo', 'option') ?>
                    <img 
                        src="<?php echo $main_logo['url'] ?>" 
                        alt="<?php echo $main_logo['alt'] ?>"
                        class="navbar__logo">
                <?php endif ?>
            </a>
            
            <nav class="nav-primary main-menu d-none d-lg-block">
                <?php if ( has_nav_menu('primary_menu') ) :
                    wp_nav_menu(['theme_location' => 'primary_menu', 'menu_class' => 'list-unstyled d-flex']);
                endif ?>
            </nav>

            <div id="menu-toggle" class="d-lg-none">
                <span></span>
                <span></span>
                <span></span>
            </div>
            </div>
        </section>

        <nav id="menu-mobile" class="d-lg-none">
            <div class="container">
                <?php if ( has_nav_menu('primary_menu') ) :
                    wp_nav_menu(['theme_location' => 'primary_menu', 'menu_class' => 'list-unstyled']);
                endif ?>
            </div>
        </nav>
    </header>
