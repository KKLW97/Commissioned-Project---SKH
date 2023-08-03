<?php
  get_header();
?>

<h1 class="cocoa_text"> <?php echo get_the_title(); ?> </h1>

<section class="static_hero_image">
  <!-- <div class="hero_image_bg" style="background-image: url('<?php the_post_thumbnail(); ?>')"> -->
    <?php echo the_post_thumbnail(); ?>
  <!-- </div> -->
</section>

<h2 class="cocoa_text">OUR COURSES</h2>
<section class="course_section">
<?php 
    $upcomingCourses = new WP_Query(array(
        'posts_per_page' => -1,
        'post_type' => 'course'
    ));

    while($upcomingCourses->have_posts()){
      $upcomingCourses->the_post(); ?>
            <div class="course_component">
              <div class="course_image">
                <?php echo the_post_thumbnail(); ?>
              </div>
              <div class="course_content">
                <h3><?php echo get_the_title() ?></h3>
                <button class="training_btn"><a href='<?php echo the_permalink();?>'>Learn More</a></button>
              </div>
            </div>
    <?php } 
    wp_reset_postdata();
    ?>
</section> 

<h2 class="cocoa_text">OUR TRAINER</h2>
<section class="trainer_section ">
<?php 
    $upcomingClasses = new WP_Query(array(
        'posts_per_page' => 1,
        'post_type' => 'trainers',
        'meta_key' => 'company_position',
        'meta_value' => 'Founder',
        'meta_compare' => 'LIKE'
    ));

    while($upcomingClasses->have_posts()){
        $upcomingClasses->the_post(); ?>
        <div class="image_left">
          <?php the_post_thumbnail('trainerPortrait') ?>
        </div>

        <div class="details_right">
          <?php echo '<h4 class="cafeaulait_text "> ' . get_the_title() .' </h4>' ?>
          <h5 class="cafeaulait_text "> <?php echo get_field('company_position')?> </h5>
        <p class="cocoa_text"><?php echo get_field('trainer_details')?></p>
      </div>
    <?php } 
      wp_reset_postdata();
      ?>
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