    <footer class="ocelot-footer text-center">
        <div class="container">
            <?php if ( get_field('main_logo', 'option') ) : ?>
                <?php $footer_logo = get_field('footer_logo', 'option') ?>
                <img 
                    src="<?php echo $footer_logo['url'] ?>" 
                    alt="<?php echo $footer_logo['alt'] ?>" 
                    class="ocelot-footer__logo">
            <?php endif ?>
            
            <nav class="ocelot-footer__menu">
                <?php if ( has_nav_menu('footer_menu') ) :
                    wp_nav_menu(['theme_location' => 'footer_menu', 'menu_class' => 'list-unstyled d-md-flex justify-content-md-center']);
                endif ?>            
            </nav>

            <p class="ocelot-footer__copy">
                <?php echo get_field('site_info', 'option') ?>
            </p>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>