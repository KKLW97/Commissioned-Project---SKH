<?php
  get_header();
?>

<h2> <?php echo get_the_title(); ?> </h2>

<p>Add hero slider/static image</p> 

<h3>OUR COURSES</h3>


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

<h3>OUR TRAINER</h3>

<section class="trainer_section basic_font">
<?php 
    $upcomingClasses = new WP_Query(array(
        'posts_per_page' => 1,
        'post_type' => 'trainers',
    ));

    while($upcomingClasses->have_posts()){
        $upcomingClasses->the_post(); ?>
        <div >
          <img src="#" alt="Director's image">
        </div>

        <div>
          <?php echo '<h4> ' . get_the_title() .' </h4>' ?>
          <?php echo get_field('company_position')?>
        <p><?php echo get_field('trainer_details')?></p>
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