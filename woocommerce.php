<?php
get_header();
?>

<section class="main_display">

    <section class="hero_slider">
        <?php echo do_shortcode('[smartslider3 slider="3"]'); ?>
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

<div class="shop_area">
  <div class="filters_for_shop">
    <?php echo do_shortcode('[woof  sid="generator_64d389e97570c" autohide="0" autosubmit="-1" is_ajax="0" ajax_redraw="0" start_filtering_btn="0" btn_position="b" dynamic_recount="-1" hide_terms_count_txt="0" mobile_mode="0" ]'); ?>

  </div>
  <div class="shop_product_results">
    <?php woocommerce_content(); ?>
  </div>
</div>
<?php 
get_footer();
?>