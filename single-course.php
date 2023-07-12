<?php
get_header(); ?>
<img src="£" alt="lash academy banner">
<?php
get_the_title();
?>

<div>
    <?php 
    $today = date('Ymd');
    $course = new WP_Query(array(
        'post_type'=>'course'
    ));
    ?>
</div>

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