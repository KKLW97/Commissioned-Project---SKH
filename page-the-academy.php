<?php
get_header();
?>

<h2> <?php echo get_the_title(); ?> </h2>

  <div>
     <?php the_content(); ?>
  </div> 

<?php 
get_footer();
?>