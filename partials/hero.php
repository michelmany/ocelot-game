<?php
    $hero_bg_image = get_field('hero_background_image');
    $hero_logo = get_field('hero_logo');
    $hero_subtitle = get_field('hero_subtitle');
    $platforms = get_field('platforms'); 
?>

<section class="hero section-bg-dark">
    <div class="hero__content text-center">
        <img src="<?php echo $hero_logo['url'] ?>" alt="<?php echo $hero_logo['alt'] ?>" class="hero__logo">
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
        background-image: url(<?php echo $hero_bg_image ?>);
    }
</style>