<?php $cards = get_field('services_cards') ?>

<?php if ( ! empty( $cards ) ) : ?>
    <div class="block-services-cards">
        <div class="container">
            <div class="row">
                <?php foreach ($cards as $card) : ?>
                    <div class="col-lg-4">
                        <div class="service-card">
                            <div class="service-card__content">
                                <?php if ( ! empty ( $card['image'] ) ) : ?>
                                    <div class="service-card__image-wrapper">
                                        <img
                                            src="<?php echo $card['image']['url'] ?>" 
                                            alt="<?php echo $card['image']['alt'] ?>" 
                                            class="service-card__image">
                                        <img
                                            src="<?php echo get_template_directory_uri(); ?>/src/images/services-card-shadow.png"
                                            class="service-card__image-shadow">
                                    </div>
                                <?php endif ?>

                                <div class="service-card__text">
                                    <p class="ocelot-subtitle"><?php echo $card['subtitle'] ?></p>
                                    <h3 class="service-card__title text-uppercase"><?php echo $card['title'] ?></h3>
                                    <p class="service-card__description"><?php echo $card['description'] ?></p>
                                </div>
                                
                                <?php if ( ! empty( $card['platforms'] ) ) : ?>
                                    <ul class="platforms list-unstyled list-unstyled d-flex justify-content-center align-items-center">
                                        <?php foreach ( $card['platforms'] as $platform ) : ?>
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
                            <div class="service-card__btn-wrapper">
                                <a href="<?php echo $card['cta_button']['url'] ?>" class="service-card__button btn">
									<?php echo $card['cta_button']['title'] ?>
								</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
<?php endif ?>