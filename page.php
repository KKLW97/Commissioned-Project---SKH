<?php
get_header();
?>

<h2> <?php echo get_the_title(); ?> </h2>

<?php

while(have_posts()) {
  the_post();
  ?>

  <div>
     <?php the_content(); ?>
  </div> 

<?php }
get_footer();
?>