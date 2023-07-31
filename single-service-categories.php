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

<section class="service_section">
<?php 
    $availableServices = new WP_Query(array(
        'posts_per_page' => -1,
        'post_type' => 'services',
        'meta_query' => array(
            array(
              'key' => 'related_service_category',
              'value' => get_the_ID(),
              'compare' => 'LIKE'
          )
        )
));

    while($availableServices->have_posts()){
        $availableServices->the_post(); ?>
        <div class="single_service">
            <div class="description_right">
                <h3><?php echo get_the_title(); ?></h3>
                <?php echo get_field('service_description') ?> 
            </div>
            <div class=img_left>
                <?php echo the_post_thumbnail(); ?> 
            </div>
        </div>
        <?php } 

wp_reset_postdata();
?>
</section>



<section class="instagram">
<?php echo do_shortcode('[instagram-feed feed=1]'); ?>
</section>

<?php
}

get_footer();
?>


