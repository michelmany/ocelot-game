<?php
/**
 * Template Name: Internal Pages Template
 */

get_header();

$data = get_fields( get_the_ID() );

get_template_part('partials/internal', 'header', $data); ?>

<?php if ( ! empty ( $data['default_section'] ) ) : ?>
    <?php foreach ( $data['default_section'] as $key => $section ) : ?>

        <?php $section_id = !empty( $section['btc_anchor_id'] ) 
            ? $section['btc_anchor_id'] 
            : sanitize_title( $section['btc_title'] ) . "-" . $key ?>

        <section 
            id="<?php echo $section_id ?>"
            class="ocelot-section section-bg-dark ocelot-section--internal">
            <?php get_template_part('partials/block', 'two-columns', $section) ?>
        </section>

    <?php endforeach ?>
<?php endif ?>

<?php 
get_template_part('partials/section-contact');
get_footer();
