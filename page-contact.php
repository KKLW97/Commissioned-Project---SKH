<?php 
get_header();
?>

<h1><?php echo get_the_title(); ?></h1>

<?php echo do_shortcode('[wpforms id="123"]'); ?>

hi kelly 

<section class="london_map">

    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2482.8779303624297!2d-0.14909723862605828!3d51.51545547159262!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48760d85ce507fa3%3A0x527f152202f97b90!2sS.K.H%20Beauty%20Clinic!5e0!3m2!1sen!2suk!4v1690452927559!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>


<section class="dubai_map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11391.494268623099!2d55.13929146451265!3d25.11875790256082!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f153e3609c979%3A0x5945a418a804ac5!2sAtlantis%2C%20The%20Palm!5e0!3m2!1sen!2suk!4v1690453833785!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

<?php
get_footer();
?>