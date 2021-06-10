<?php
    $btc_main_image = get_field('btc_main_image');
    $btc_subtitle = get_field('btc_subtitle');
    $btc_title = get_field('btc_title');
    $btc_copy = get_field('btc_copy');
    $show_platform_icons = get_field('show_platform_icons');
    $btc_platforms = get_field('btc_platforms');
?>

<div class="block-two-columns">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-5 col-xl-6">
                <?php if ( ! empty ( $btc_main_image ) ) : ?>
                    <div class="block-two-columns__image-wrapper">
                        <img 
                        src="<?php echo $btc_main_image['url'] ?>" 
                        alt="<?php echo $btc_main_image['alt'] ?>"
                        class="block-two-columns__image">
                        <img
                            src="@asset('images/welcome-logo-shadow.png')"
                            class="block-two-columns__image-shadow"
                            alt="Ocelot Logo shadow">
                    </div>
                <?php endif ?>
            </div>

            <div class="col-md-8 col-lg-7 col-xl-6">
                <h4 class="block-two-columns__subtitle text-uppercase"><?php echo $btc_subtitle ?></h4>
                <h2 class="block-two-columns__title text-uppercase"><?php echo $btc_title ?></h2>
                <p class="block-two-columns__copy"><?php echo $btc_copy ?></p>
            </div>
        </div>
    </div>
</div>