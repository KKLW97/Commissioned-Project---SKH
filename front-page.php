<?php 
    get_header();
?>
<section class="main_display">
<!-- <div class="container">
    <div class="carousel">
        <div class="slider">
            <section> picture 1 </section>
            <section> picture 2 </section>
            <section> picture 3 </section>
            <section> picture 4 </section>
        </div>
        <div class="controls">
            <span class="arrow left">left</span>
            <span class="arrow right">right</span>
        </div>
    </div>
</div> -->
<img class="hero_image" src="<?php echo get_theme_file_uri("assets/HealthyMan.png") ?>" alt="topless man measuring his abdomen">

<p class="announcement_bar beige_text center"><?php 
    $annoucementBar = new WP_Query(array(
        'posts_per_page' => 1,
        'post_type' => 'announcement',
        'meta_key' => 'announcement_end_date',
        'orderby' => 'meta_value_num',
        'order' => 'ASC',
        'meta_query' => array(
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

<section class="update_section" id="update_section">
    <?php 
    $upcomingClasses = new WP_Query(array(
        'posts_per_page' => 2,
        'post_type' => 'class',
        'meta_key' => 'class_date',
        'orderby' => 'meta_value_num',
        'order' => 'ASC',
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
        // get_template_part('template-parts/content', 'class'); //refactor later to simplify the code below into a content-class.php file within a template-parts folder
        ?>
        <div class="update_component">
            <div class="update_image">
                <?php the_post_thumbnail() ?>
            </div>
            <div class="update_content">
                <?php echo '<h3> UPCOMING: ' . get_the_title() .' </h3>' ?>
                <h3 class="center"><?php echo get_field('class_date'); ?></h3> 
                <h3 class="center"><?php echo get_field('country'); ?></h3> 
            </div>
            <div class="hide">
                <p><?php echo the_excerpt(); ?></p>
            </div>
        </div>
    <?php }
    ?>
        
</section>

<h2 class="center cocoa_text basic_font"> TESTIMONIALS </h2>

<section class="testimonial_cards">
<?php echo do_shortcode('[grw id="95"]'); ?>
<?php echo do_shortcode('[grw id="85"]'); ?> <!-- change this later -->
    <!-- <div class="single_card cafeaulait_background beige_text">

        <p> "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim" </p>
        <p style="text-align: center;"> CLIENT NAME </p>
    </div> -->
</section>

<?php 
    get_footer();
?>