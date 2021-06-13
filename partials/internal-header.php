<?php extract( $args ) ?>

<div class="internal-header">
    <div class="container">
        <div class="internal-header__headline">
            <?php echo $internal_page_title ?: get_the_title() ?>
        </div>
    </div>
</div>

<style>
    .internal-header {
        background-image: url(<?php echo $internal_header_bg_image ?>);
        background-color: <?php echo $internal_header_bg_color ?: '#252c30' ?>;
    }
</style>