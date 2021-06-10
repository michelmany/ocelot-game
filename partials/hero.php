<?php
    $hero_bg_image = get_field('hero_background_image');
    $hero_logo = get_field('hero_logo');
    $hero_subtitle = get_field('herhero_subtitleo_logo');
    $platforms = get_field('platforms'); 
?>

<section class="hero section-bg-dark" style="background-image: url(<?php echo $hero_bg_image ?>)">
    <div class="hero__content text-center">
        <img src="<?php echo $hero_logo['url'] ?>" alt="<?php echo $hero_logo['alt'] ?>" class="hero__logo">
        <h2 class="hero__subtitle"><?php echo $hero_subtitle ?></h2>
        <ul class="plataforms list-unstyled d-flex justify-content-center align-items-center">
            <?php foreach ($platforms as $platform) : ?>
                <li>
                    <img 
                        src="<?php echo $platform['logo']['url'] ?>" 
                        alt="<?php echo $platform['logo']['alt'] ?>" 
                        class="platforms__logo">
                </li>  
            <?php endforeach; ?>
        </ul>
    </div>
</section>