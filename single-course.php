<?php get_header(); ?>

<section class="main display">
<img class="hero_image" src="<?php echo get_theme_file_uri("assets/HealthyMan.png") ?>" height="300px" alt="topless man measuring his abdomen">
</section>

<div class="course_title cafeaulait_text center">
  <h1><?php echo get_the_title(); ?></h1>
  <h4>By Sumera</h4>
</div>
<div class="course_price cocoa_text">
  <p class="actual_price">£<?php echo get_field('actual_price'); ?></p>
  <p class="discount_price">£<?php echo get_field('discount_price'); ?></p>
</div>

<section class="overview">
  <h2 class="center cocoa_text"><?php echo get_field('course_duration') ?></h2>
  <p><?php echo get_field('overview_of_the_course'); ?></p>
<section>

<section class="course_kit">
  <div class="course_lash_kit">
    <img src="<?php echo get_theme_file_uri("assets/product.png") ?>" alt="">
    <p>Free Lash Kit</p>
  </div>
  <div class="kit_content">
    <p>Kit Includes:</p>
    <?php
    $arr = get_field('kit_provided');
    $str = explode (",", $arr);
    echo '<ul class="kit_list">';
    foreach($str as $s){
        echo '<li class="kit_item">'.$s.'</li>';
    }
    echo '</ul>';
    ?>
    
  </div>
</section>
<section class="banner">
  <h2 class="center">Benefits</h2> 
  <div class="banner_list">
    <?php the_field('benefits'); ?>
  </div>
</section>

<section class="course_structure">
  <h2 class="center">COURSE STRUCTURE</h2>
  <p><?php echo get_field('course_structure'); ?></p>
</section>

<h2 class="center"> UPCOMING CLASSES</h2>

<section class="upcoming_classes">
<?php
    $upcomingClasses = new WP_Query(array(
    'posts_per_page' => 3,
    'post_type' => 'class',
    'meta_key' => 'class_date',
    'orderby' => 'meta_value_num',
    'order' => 'ASC',
    'meta_query' => array(
      array(
        'key' => 'class_date',
        'compare' => '>=',
        'value' => date('Ymd'),
        'type' => 'numeric'
      ),
      array(
        'key' => 'course_class',
        'compare' => 'LIKE',
        'value' => '"' . get_the_ID() . '"'
    )
  )
  ));

  while($upcomingClasses->have_posts()){
    $upcomingClasses->the_post();
    $trainers = get_field('course_trainer');
    // get_template_part('template-parts/content', 'class'); //refactor later to simplify the code below into a content-class.php file within a template-parts folder
    ?>
    <div class="upcoming_section">
      <div class="class_info_left">
        <img src=<?php echo get_theme_file_uri('assets/product.png'); ?> alt=""> <!-- sort out class image -->
      </div>
      <div class="class_info_right">
        <?php echo '<h5>' . get_the_title() .' </h5>' ?>
        <h6><?php echo get_field('class_date'); ?></h6> 
        <?php if($trainers) ?>
        <p> Need to add time </p>
        <p> Trainer:
          <?php foreach($trainers as $trainer):
            echo get_the_title($trainer, $post->ID);
          endforeach; ?>
        </p>
        <p>Country: <?php echo get_field('country') ?></p>
      </div>
    </div>  
    <hr>
  <?php }
  wp_reset_query();
?>
</section>
<div class="skh_contact">
  <a href="<?php echo site_url('contact-us/');?>"><button class="skh_contact_button">START YOUR JOURNEY WITH SKH</button></a>
</div>

<?php get_footer();?>