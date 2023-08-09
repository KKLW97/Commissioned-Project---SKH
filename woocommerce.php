<?php
get_header();
?>

<section class="main_display">

    <section class="hero_slider">
        <?php echo do_shortcode('[smartslider3 slider="2"]'); ?>
    </section>

    <p class="announcement_bar beige_text center"><?php 
    $annoucementBar = new WP_Query(array(
        'posts_per_page' => 1,
        'post_type' => 'announcement',
        'meta_key' => 'announcement_end_date',
        'orderby' => 'meta_value_num',
        'order' => 'ASC',
        'meta_query' => array(
            array(
                'key' => 'announcement_type',
                'compare' => 'LIKE',
                'value' => get_option('woocommerce_shop_page_id')
            ),
            array(
                'key' => 'announcement_end_date',
                'compare' => '>=',
                'value' => date('Ymd'),
                'type' => 'numeric'
            )
        )
    ));

    while($annoucementBar->have_posts()){
        $annoucementBar->the_post(); ?>
        <?php echo get_the_title(); ?>
        <?php } 
?></p>
</section>

<?php woocommerce_content(); ?>

<?php 
get_footer();
?>