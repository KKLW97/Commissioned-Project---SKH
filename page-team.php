<?php
get_header();
?>

<h2> <?php echo get_the_title(); ?> </h2>

<section class="trainer_section ">
<?php 
    $founder = new WP_Query(array(
        'posts_per_page' => 1,
        'post_type' => 'team-members',
        'meta_key' => 'team_member_role',
        'meta_value' => 'Founder',
        'meta_compare' => 'LIKE'
    ));

    while($founder->have_posts()){
        $founder->the_post(); ?>
        <div class="image_left">
          <?php the_post_thumbnail('trainerPortrait') ?>
        </div>

        <div class="details_right">
          <?php echo '<h4 class="cafeaulait_text "> ' . get_the_title() .' </h4>' ?>
          <h5 class="cafeaulait_text "> <?php echo get_field('team_member_role')?> </h5>
        <p class="cocoa_text"><?php echo get_field('team_member_summary')?></p>
      </div>
    <?php } 
    wp_reset_postdata();
    ?>
</section>

<section class="team_section">
<?php 
    $teamMembers = new WP_Query(array(
        'posts_per_page' => -1,
        'post_type' => 'team-members',
        'meta_key' => 'team_member_role',
        'meta_value' => 'Founder',
        'meta_compare' => 'NOT LIKE'
    ));

    while($teamMembers->have_posts()){
        $teamMembers->the_post(); ?>
        <div class="image_left">
          <?php the_post_thumbnail('trainerPortrait') ?>
        </div>

        <div class="details_right">
          <?php echo '<h4 class="cafeaulait_text "> ' . get_the_title() .' </h4>' ?>
          <h5 class="cafeaulait_text "> <?php echo get_field('team_member_role')?> </h5>
        <p class="cocoa_text"><?php echo get_field('team_member_summary')?></p>
      </div>
    <?php } 
        wp_reset_postdata();
    ?>
</section>
<?php
get_footer();
?>