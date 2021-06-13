<?php
    $contact_title = get_field('contact_title', 'option');
    $contact_subtitle = get_field('contact_subtitle', 'option');
    $form_shortcode = get_field('form_shortcode', 'option');
    $contact_bg_image = get_field('contact_bg_image', 'option');
?>

<section id="section-contact" class="section-contact text-center">
    <div class="section-contact__container">
        <h3 class="section-contact__title text-uppercase"><?php echo $contact_title ?></h3>
        <p class="section-contact__subline"><?php echo $contact_subtitle ?></p>

        <div class="section-contact__form-wrapper">
            <?php echo do_shortcode( $form_shortcode ); ?>
        </div>
    </div>
</section>

<style>
    .section-contact {
        background-image: url(<?php echo $contact_bg_image ?>);
    }
</style>