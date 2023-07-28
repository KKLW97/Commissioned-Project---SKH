<?php 
get_header();

while(have_posts()){
    the_post(); ?>

<h2> <?php the_title(); ?> </h2>
<div>
    <p><?php the_excerpt(); ?></p>
<div>

<section class="instagram">
<?php echo do_shortcode('[instagram-feed feed=1]'); ?>
</section> 

    <?php
} 

get_footer();
?>