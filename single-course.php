<?php get_header(); ?>

<img src="#" alt="lash academy banner">

<?php echo get_the_title(); ?>

  <h4 class="center">OVERVIEW OF THE COURSE</h4>
  <section class="overview">
    <p><?php echo get_field('overview_of_the_course'); ?></p>
    <ul>
      <li><?php echo get_field('kit_provided'); ?></li>
      <li><?php echo get_field('qualification'); ?></li>
      <li><?php echo get_field('course_cost'); ?></li>
    </ul>
  <section>

  <h4 class="center">IS THIS COURSE FOR YOU?</h4>
  <p><?php echo get_field('course_requirement'); ?></p>

  <h4 class="center">COURSE STRUCTURE</h4>
  <!-- this will probably be a table of some sort or something -->
  <p><?php echo get_field('course_structure'); ?></p>

  <button>CONTACT FOR MORE DETAILS</button>  

<?php get_footer();?>