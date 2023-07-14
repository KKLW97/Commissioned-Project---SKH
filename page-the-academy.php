<?php
  get_header();
?>

<h2> <?php echo get_the_title(); ?> </h2>

<p>Add hero slider/static image</p> 

<h3>OUR COURSES</h3>


<section class="course_section">
  <div class="course_component">
      <!-- <img src="<?php echo get_theme_file_uri("assets/product.png") ?>" alt="Picture of micro cotton buds that are pink and blue"> -->
      <h4>Lash Academy</h4>
      <button><a href='<?php echo site_url('/courses/lash-academy/');?>'>Learn More</a></button>
    
  </div>
  <div class="course_component">
  <img src="<?php echo get_theme_file_uri("assets/product.png") ?>" alt="Picture of micro cotton buds that are pink and blue">
    <h4>Brow Academy</h4>
    <button><a href='<?php echo site_url('/courses/brow-academy/');?>'>Learn More</a></button>
  </div>
</section>

<h3>OUR TRAINER</h3>
<section class="trainer_section">
    <?php 
    $trainers = new WP_Query(array(
        'posts_per_page' => -1,
        'post_type' => 'trainers'
      ));

    while($trainers->have_posts()){
        $trainers->the_post(); 
        // get_template_part('template-parts/content', 'trainers'); //refactor later to simplify the code below into a content-class.php file within a template-parts folder
        ?>
        <div>
            <img src="<?php the_post_thumbnail_url('trainerPortrait'); ?>" alt="Directors image">
            <h3><?php echo get_the_title(); ?></h3>
            <h5><?php echo get_field('company_position'); ?></h5>
            <p><?php the_content(); ?></p>
        </div>
    <?php }

    ?>
</section>


<h3>TESTIMONIALS</h3>
<!-- remember to add shop link here after testimonials -->

<?php 
  get_footer();
?>