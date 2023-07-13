<?php 
    get_header();
?>
<img class="hero_image" src="#" alt="">

<p> ANNOUNCEMENTS: Rolling Text to go here </p>

<section class="update_section">
    <?php 
    $upcomingClasses = new WP_Query(array(
        'posts_per_page' => 2,
        'post_type' => 'class',
        'meta_key' => 'class_date',
        'orderby' => 'meta_value_num',
        'order' => "ASC",
        'meta_query' => array(
            array(
                'key' => 'class_date',
                'compare' => '>=',
                'value' => date('Ymd'),
                'type' => 'numeric'
            )
        )
    ));

    while($upcomingClasses->have_posts()){
        $upcomingClasses->the_post(); 
        get_template_part('template-parts/content', 'class');
        ?>
        <div>
            <img src="#" alt="">
            <h3> UPCOMING CLASS </h3>
            <!-- rolling text -->
            <p><?php echo the_excerpt(); ?></p>
        </div>
    <?php }

    ?>
        
</section>

<section class="testimonial_cards">
    <h2> TESTIMONIALS </h2>
    <div>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor </p>
        <!-- stars to go here -->
        <p> CLIENT NAME </p>
    </div>
    <div>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor </p>
        <!-- stars to go here -->
        <p> CLIENT NAME </p>
    </div>
    <div>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor </p>
        <!-- stars to go here -->
        <p> CLIENT NAME </p>
    </div>
    <div>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor </p>
        <!-- stars to go here -->
        <p> CLIENT NAME </p>
    </div>
</section>

<?php 
    get_footer();
?>