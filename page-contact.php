<?php 
get_header();
?>

<h1><?php echo get_the_title(); ?></h1>

<section class="contact_form">
<?php echo do_shortcode('[wpforms id="123"]'); ?>
</section>

<?php
get_footer();
?>