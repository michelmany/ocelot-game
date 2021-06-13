<?php extract( $args ) ?>

<section class="hero section-bg-dark">
    <div class="hero__content text-center">
        <?php if ( $hero_logo ) : ?>
            <div class="hero__logo-wrapper">
                <img 
                    src="<?php echo $hero_logo['url'] ?>" 
                    alt="<?php echo $hero_logo['alt'] ?>" 
                    class="hero__logo">
                <img
                    src="<?php echo get_template_directory_uri(); ?>/src/images/hero-ocelot-logo-shadow.png"
                    class="hero__logo-shadow">
            </div>
        <?php endif ?>

        <h2 class="hero__subtitle"><?php echo $hero_subtitle ?></h2>
        
        <?php if ( ! empty ( $platforms ) ) : ?>
            <ul class="platforms list-unstyled d-flex justify-content-center align-items-center">
                <?php foreach ($platforms as $platform) : ?>
                    <li>
                        <img 
                            src="<?php echo $platform['logo']['url'] ?>" 
                            alt="<?php echo $platform['logo']['alt'] ?>" 
                            class="platforms__logo">
                    </li>  
                <?php endforeach ?>
            </ul>
        <?php endif ?>
    </div>
</section>

<style>
    .hero {
        background-image: url(<?php echo $hero_background_image ?>);
    }
</style>