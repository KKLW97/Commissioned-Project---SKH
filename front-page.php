<?php 
    get_header();
?>
<section class="main_display">




<div class="your-class">
  <div data-slick-index="1" aria-hidden="false" style="width: 405px; position: relative; left: -405px; top: 0px; z-index: 999; opacity: 1;" tabindex="-1" role="option" aria-describedby="slick-slide91"><img class="hero_image" src="<?php echo get_theme_file_uri("assets/HealthyMan.png") ?>" alt="topless man measuring his abdomen"></div>
  <div data-slick-index="1" aria-hidden="false" style="width: 405px; position: relative; left: -405px; top: 0px; z-index: 999; opacity: 1;" tabindex="-1" role="option" aria-describedby="slick-slide91"><img class="hero_image" src="<?php echo get_theme_file_uri("assets/HealthyMan.png") ?>" alt="topless man measuring his abdomen"></div>
</div>





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

<section class="upcoming_classes">
    <h2 class="center">UPCOMING CLASSES</h2>
    <div class="update_section">
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
                    <?php echo '<h3>' . get_the_title() .' </h3>' ?>
                    <h3 class="center"><?php echo get_field('class_date'); ?></h3> 
                    <h3 class="center"><?php echo get_field('country'); ?></h3> 
                </div>
                <div class="hide">
                    <?php echo the_excerpt(); ?>
                    <?php
                    $training = get_field('course_class');

                    if ($training) {
                    
                      foreach ($training as $post) {
                        setup_postdata($post);
                        echo '<button class="enquire_btn"><a href="' . get_permalink() . '">' . "FIND OUT MORE" . '</a></button>';
                      }
                      wp_reset_postdata();
                    }
                    ?>
                </div>
            </div>
        <?php }
        ?>
    </div>
    <button class="enquire_btn"><a href="<?php echo site_url('contact/');?>">ENQUIRE NOW</a></button>
        
</section>

<h2 class="center cocoa_text basic_font"> TESTIMONIALS </h2>

<section class="testimonial_cards">
<?php echo do_shortcode('[grw id="95"]'); ?>
<?php echo do_shortcode('[grw id="85"]'); ?> 
</section>

<section class="instagram">
<?php echo do_shortcode('[instagram-feed feed=1]'); ?>
</section> 

<?php 
    get_footer();
?>