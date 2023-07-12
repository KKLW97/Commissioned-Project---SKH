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
        'post_type'=>'course',
        'posts_per_page' => 1
        // 'meta_query' => array(
        //   array(
        //     'key' => 'course_class',
        //     'compare' => 'LIKE',
        //     'value' => '"' . get_the_ID() . '"'
        //   )
        // )
    ));
    
    if($course->have_post()) {
      echo '<h2>'. get_the_title() .'</h2>';
      while($course->the_post()) {
        $course->the_post(); ?>

        <h4>OVERVIEW OF THE COURSE</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, eveniet! Molestiae esse, tempore consequatur voluptates asperiores atque voluptate, officia ipsum in vitae vel. Reiciendis impedit itaque eius rem quaerat nam.</p>
        <p>This side to have a snapshot of the following:</p>
        <ul>
          <li>Duration of the course </li>
          <li>Kit provided + details</li>
          <li>Qualifications that you will receive</li>
          <li>Course fees?</li>
        </ul>

        <h4>IS THIS COURSE FOR YOU?</h4>
        <ul>
          <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
          <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
          <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
          <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
          <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
        </ul>

        <h4>COURSE STRUCTURE</h4>
        <ul>
          <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
          <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
          <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
          <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
          <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
        </ul>

        <button>CONTACT FOR MORE DETAILS</button>
      <?php }
    }

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