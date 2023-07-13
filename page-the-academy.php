<?php
  get_header();
?>

<h2> <?php echo get_the_title(); ?> </h2>

<p>Add hero slider/static image</p> 

<h3>OUR COURSES</h3>


<section class="course_section">
  <div class="course_component">
    <img src="assets/product.png" alt="Picture of micro cotton buds that are pink and blue">
    <h4>Lash Academy</h4>
    <button><a href='<?php echo site_url('/courses/lash-academy/');?>'>Learn More</a></button>
  </div>
  <div class="course_component">
  <img src="assets/product.png" alt="Picture of micro cotton buds that are pink and blue">
    <h4>Brow Academy</h4>
    <button><a href='<?php echo site_url('/courses/brow-academy/');?>'>Learn More</a></button>
  </div>
</section>

<h3>OUR TRAINER</h3>

<section class="trainer_section">
  <img src="#" alt="Director's image">
  <h4>SUMERA HUSSEIN</h4>
  <h5>CEO & FOUNDER</h5>
  <p><?php echo get_field('our_trainer') ?></p>
</section>

<h3>TESTIMONIALS</h3>
<!-- remember to add shop link here after testimonials -->

<?php 
  get_footer();
?>