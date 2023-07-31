<?php
get_header();

while (have_posts()) {
    the_post();?>

<section class="static_hero_image">
    <?php echo the_post_thumbnail(); ?>
    <!-- <?php echo the_content(); ?> -->

</section>

<h2> <?php the_title();?> </h2>

<div class="service_category_summary">
    <?php if(the_excerpt()){
        the_excerpt();
    } ?>
<div>

<section class="instagram">
<?php echo do_shortcode('[instagram-feed feed=1]'); ?>
</section>

<?php
}

get_footer();
?>


