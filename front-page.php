<?php
/**
 * The front page template file
 * 
 * If the user has selected a static page for their homepage, this is what will appear.
 */

get_header();

$data = get_fields( get_the_ID() );

get_template_part('partials/section', 'hero', $data); ?>


  <section class="ocelot-section section-bg-dark">
    <?php get_template_part('partials/block', 'two-columns', $data) ?>
    <?php get_template_part('partials/block', 'services-cards', $data) ?>
  </section>

<?php 

get_template_part('partials/section-contact');

get_footer();

