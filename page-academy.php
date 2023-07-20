<?php
  get_header();
?>

<h2 class="cocoa_text"> <?php echo get_the_title(); ?> </h2>

<section class="main display">
<img class="hero_image" src="<?php echo get_theme_file_uri("assets/HealthyMan.png") ?>" height="300px" alt="topless man measuring his abdomen">
</section>

<h3 class="cocoa_text">OUR COURSES</h3>

<!-- rewrite this section to be scalable -->
<section class="course_section basic_font">
  <div class="course_component">
    <div class="course_image">
      <img src="<?php echo get_theme_file_uri("assets/product.png") ?>" alt="Picture of micro cotton buds that are pink and blue">
    </div>
    <div class="course_content">
      <h4 class="">Lash Academy</h4>
      <button><a href='<?php echo site_url('/courses/lash-academy/');?>'>Learn More</a></button>
    </div>
  </div>
  <div class="course_component">
    <div class="course_image">
      <img src="<?php echo get_theme_file_uri("assets/product.png") ?>" alt="Picture of micro cotton buds that are pink and blue">
    </div>
    <div class="course_content">
      <h4>Brow Academy</h4>
      <button><a href='<?php echo site_url('/courses/brow-academy/');?>'>Learn More</a></button>
    </div>
    </div>
</section>


<h3 class="cocoa_text">OUR TRAINER</h3>
<section class="trainer_section basic_font">
<?php 
    $upcomingClasses = new WP_Query(array(
        'posts_per_page' => 1,
        'post_type' => 'trainers',
    ));

    while($upcomingClasses->have_posts()){
        $upcomingClasses->the_post(); ?>
        <div class="image_left">
          <?php the_post_thumbnail() ?>
        </div>

        <div class="details_right">
          <?php echo '<h4 class="cafeaulait_text "> ' . get_the_title() .' </h4>' ?>
          <h5 class="cafeaulait_text "> <?php echo get_field('company_position')?> </h5>
        <p class="cocoa_text"><?php echo get_field('trainer_details')?></p>
      </div>
    <?php } ?>
</section>

<h2 class="center cocoa_text basic_font"> TESTIMONIALS </h2>
<section class="testimonial_cards">
    <div class="single_card cafeaulait_background beige_text">
        <p> "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim" </p>
        <!-- stars to go here -->
        <p style="text-align: center;"> CLIENT NAME </p>
    </div>
    <div class="single_card cafeaulait_background beige_text">
        <p> "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor" </p>
        <!-- stars to go here -->
        <p style="text-align: center;"> CLIENT NAME </p>
    </div>
    <div class="single_card cafeaulait_background beige_text">
        <p> "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua." </p>
        <!-- stars to go here -->
        <p style="text-align: center;"> CLIENT NAME </p>
    </div>
    <div class="single_card cafeaulait_background beige_text">
        <p> "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris" </p>
        <!-- stars to go here -->
        <p style="text-align: center;"> CLIENT NAME </p>
    </div>
</section>

<!-- there is now an academy instagram -->

<?php 
  get_footer();
?>