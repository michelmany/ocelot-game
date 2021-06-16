<?php
/**
 * Template Name: Internal Pages Template
 */

get_header();

// $default_section = get_fields('default_section');
$data = get_fields( get_the_ID() );

// var_dump($data);

get_template_part('partials/internal', 'header', $data); 
?>

<?php if ( ! empty ( $data['default_section'] ) ) : ?>
    <?php foreach ( $data['default_section'] as $section ) : ?>
        <section class="ocelot-section section-bg-dark ocelot-section--internal">
            <?php get_template_part('partials/block', 'two-columns', $section) ?>
        </section>
    <?php endforeach ?>
<?php endif ?>


<?php 
get_template_part('partials/section-contact');
get_footer();

