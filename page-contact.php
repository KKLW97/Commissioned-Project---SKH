<?php 
get_header();
?>

<h1><?php echo get_the_title(); ?></h1>

<?php echo do_shortcode('[wpforms id="123"]'); ?>

<?php
get_footer();
?>