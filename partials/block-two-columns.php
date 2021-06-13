<?php extract( $args ) ?>

<div class="block-two-columns">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-5 col-xl-6 block-two-columns__col-1">
                <?php if ( ! empty ( $btc_main_image ) ) : ?>
                    <div class="block-two-columns__image-wrapper">
                        <img 
                            src="<?php echo $btc_main_image['url'] ?>" 
                            alt="<?php echo $btc_main_image['alt'] ?>"
                            class="block-two-columns__image">
                        <img
                            src="<?php echo get_template_directory_uri(); ?>/src/images/welcome-logo-shadow.png"
                            class="block-two-columns__image-shadow">
                    </div>
                <?php endif ?>
            </div>

            <div class="col-md-8 col-lg-7 col-xl-6 block-two-columns__col-2">
                <h4 class="block-two-columns__subtitle text-uppercase"><?php echo $btc_subtitle ?></h4>
                <h2 class="block-two-columns__title text-uppercase"><?php echo $btc_title ?></h2>
                <p class="block-two-columns__copy"><?php echo $btc_copy ?></p>
            </div>
        </div>
    </div>
</div>