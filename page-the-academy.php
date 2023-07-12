<?php
  get_header();
?>

<h2> <?php echo get_the_title(); ?> </h2>

<p>Add hero slider/static image</p> 

<h3>OUR COURSES</h3>

<section class="course_section">
  <div>
    <h4>Lash Academy</h4>
    <button>Learn More</button>
  </div>
  <div>
    <h4>Brow Academy</h4>
    <button>Learn More</button>
  </div>
</section>

<h3>OUR TRAINER</h3>

<section class="trainer_section">
  <img src="#" alt="Director's image">
  <h4>SUMERA HUSSEIN</h4>
  <h5>CEO & FOUNDER</h5>
  <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim </p>
</section>

<h3>TESTIMONIALS</h3>

<!-- remember to add shop link here after testimonials -->
<?php 
  get_footer();
?>