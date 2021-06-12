<?php $cards = get_field('services_cards') ?>

<?php if ( ! empty( $cards ) ) : ?>
    <div class="block-services-cards">
        <div class="container">
            <div class="row">
                <?php foreach ($cards as $card) : ?>
                    <div class="col-lg-4">
                        <div class="service-card">
                            <div class="service-card__content">
                                <img
                                    src="<?php echo $card['image']['url'] ?>" 
                                    alt="<?php echo $card['image']['alt'] ?>" 
                                    class="service-card__image">
                                <p class="ocelot-subtitle"><?php echo $card['subtitle'] ?></p>
                                <h3 class="service-card__title text-uppercase"><?php echo $card['title'] ?></h3>
                                <p class="service-card__description"><?php echo $card['description'] ?></p>
                                
                                <?php if ( ! empty( $platforms ) ) : ?>
                                    <ul class="platforms list-unstyled list-unstyled d-flex justify-content-center align-items-center">
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
                            <div class="service-card__btn-wrapper">
                                <a href="#" class="service-card__button btn">Read More</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
<?php endif ?>