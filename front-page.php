<?php
/**
 * The front page template file
 * 
 * If the user has selected a static page for their homepage, this is what will appear.
 */

get_header();
get_template_part('partials/hero'); ?>

  <section class="ocelot-section section-bg-dark">
    <?php get_template_part('partials/block-two-columns') ?>
    <?php get_template_part('partials/block-services-cards') ?>
  </section>

<?php 
get_template_part('partials/section-contact');
get_footer();

