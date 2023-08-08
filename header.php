<!DOCTYPE html>
<html <?php language_attributes();?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Cormorant+Infant:wght@600&family=Montserrat:wght@200&family=Pontano+Sans:wght@300;600;700&family=Roboto:wght@100&display=swap');
    </style> 

<?php wp_head(); ?>
  </head> 

  <body <?php body_class(); ?>>

      <div class="announcement_bar">
        <ul> 
          <li> LONDON </li>
          <li> DUBAI </li>
          <li> TURKEY (Coming Soon) </li>
        </ul>
      </div>
      <?php echo do_shortcode('[rmp_menu id="230"]'); ?>
      <header>
            <a class="header_logo" href="<?php echo site_url();?>"><img src="<?php echo get_theme_file_uri('assets/RoseGoldLogo.jpg'); ?>" alt="SKH logo"></a>
          <div class="header_nav">
          <?php wp_nav_menu( array(
              'theme_location' => 'new-menu',
              'menu_class'     => 'primary-menu'
            ) );
          ?>

        </div>
      </header>
