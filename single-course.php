<?php get_header(); ?>

<img src="#" alt="lash academy banner">
<div class="course_title">
  <?php echo get_the_title(); ?>
  <p>By Sumera</p>
</div>
<div class="course_price">
  <p class="actual_price"><?php echo get_field('actual_price'); ?></p>
  <p class="discount_price"><?php echo get_field('discount_price'); ?></p>
</div>

<section class="overview">
  <h4 class="center"><?php echo get_field('course_duration') ?></h4>
  <p><?php echo get_field('overview_of_the_course'); ?></p>
<section>

<section class="course_kit">
  <div class="course_lash_kit">
    <img src="#" alt="">
    <p>Free Lash Kit</p>
  </div>
  <div class="kit_content">
    <ul>
      <?php echo get_field('kit_provided'); ?>
    </ul>
  </div>
</section>

<section class="banner">
  <h4 class="center">Benefits</h4> <!-- look up ACF documentation -->
  <p><?php echo get_field('benefits'); ?></p>
</section>

<section class="course_structure">
  <h4 class="center">COURSE STRUCTURE</h4>
  <!-- this will probably be a table of some sort or something -->
  <p><?php echo get_field('course_structure'); ?></p>
</section>

<section class="upcoming_classes">
<?php 
  $upcomingClasses = new WP_Query(array(
      'posts_per_page' => 3,
      'post_type' => 'class',
      'meta_key' => 'class_date',
      'orderby' => 'meta_value_num',
      'order' => 'ASC'
      // LOOK INTO THE CLASS DATE 
      // 'meta_query' => array(
      //     array(
      //         'key' => 'class_date',
      //         'compare' => '>=',
      //         'value' => date('Ymd'),
      //         'type' => 'numeric'
      //     )
      // )
  ));

  while($upcomingClasses->have_posts()){
    $upcomingClasses->the_post(); 
    // get_template_part('template-parts/content', 'class'); //refactor later to simplify the code below into a content-class.php file within a template-parts folder
    ?>
    <div class="upcoming_section">
      <div class="class_info_left">
        <img src=<?php echo get_theme_file_uri('assets/product.png'); ?> alt=""> <!-- sort out class image -->
      </div>
      <div class="class_info_right">
        <?php echo '<h3> UPCOMING: ' . get_the_title() .' </h3>' ?>
        <h4><?php echo the_time('F j Y g:i a'); ?></h4> 
        <p><?php echo get_field('course_trainer') ?></p>
        <p>Country: <?php echo get_field('country') ?></p>
      </div>
    </div>  
  <?php }
?>
</section>

<button>START YOUR JOURNEY WITH SKH</button>  

<?php get_footer();?>