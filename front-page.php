<?php 
    get_header();
?>
<img class="hero_image" src="#" alt="">

<p> ANNOUNCEMENTS: Rolling Text to go here </p>

<section class="update_section">
    <?php 
    $upcomingClasses = new WP_Query(array(
        'posts_per_page' => -1,
        'post_type' => 'class',
        'meta_key' => 'class_date',
        'orderby' => 'meta_value_num',
        'order' => 'ASC'
        // LOOK INTO THE CLASS DATE 
        // 'meta_query' => array(
        //     array(
        //         'key' => 'class_date',
        //         'compare' => '>=',
        //         'value' => date('Ymd'),
        //         'type' => 'numeric'
        //     )
        // )
    ));

    while($upcomingClasses->have_posts()){
        $upcomingClasses->the_post(); 
        get_template_part('template-parts/content', 'class');
        ?>
        <div class="upcoming_section">
            <div class="upcoming_section_before">
                <img src=<?php echo get_theme_file_uri('assets/product.png'); ?> alt="">
            <!-- <div class="upcoming_section_contents"> -->
                <?php echo '<h3> UPCOMING: ' . get_the_title() .' </h3>' ?>
                <h4><?php echo the_time('F j Y g:i a'); ?></h4> 
                <!-- rolling text -->
                
            </div>
            <!-- <button>Learn More</button> -->
             <div class="hide">
                <p><?php echo the_excerpt(); ?></p>
            </div>
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