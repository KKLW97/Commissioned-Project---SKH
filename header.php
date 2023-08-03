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
      <header>
          <div class="center">
            <a class="header_logo" href="<?php echo site_url();?>"><img src="<?php echo get_theme_file_uri('assets/RoseGoldLogo.jpg'); ?>" alt="SKH logo"></a>
          </div>
          <div class="header_nav">
            <nav>
              <ul>
            <div class="dropdown_menu">
              <li <?php if(is_page('academy') OR get_post_type()== 'course') echo 'class="current_menu_item"'?>><a href="<?php echo site_url('academy/');?>"> ACADEMY </a>
                <i class="fa fa-caret-down" style="font-size: 17px"></i>
                  <div class="dropdown-content">
                    <a href="<?php echo site_url('/courses/lash-academy/');?>"> LASH TRAINING </a>
                    <a href="<?php echo site_url('/courses/brow-academy/');?>"> BROW TRAINING </a>
                  </div>
              </li>
            </div>

            <div class="dropdown_menu">
              <li <?php if(get_post_type()== 'service-categories') echo 'class="current_menu_item"'?>><a> SERVICES </a>
                <i class="fa fa-caret-down" style="font-size: 17px"></i>
                  <div class="dropdown-content">
                    <a href="<?php echo site_url('/service_categories/beauty-clinic/');?>"> BEAUTY CLINIC </a>
                    <a href="<?php echo site_url('/service_categories/lash-bar/');?>"> LASH BAR </a>
                  </div>
              </li>
            </div>
            
              <li <?php if(is_page('shop')) echo 'class="current_menu_item"' ?>>
                <a href="<?php echo site_url('/service_categories/weight-loss-clinic/');?>"> WEIGHT LOSS </a>
              </li>

              <li <?php if(is_page('team')) echo 'class="current_menu_item"' ?>>
                <a href="<?php echo site_url('team/');?>"> TEAM </a>
              </li>

              <li <?php if(is_page('contact-us')) echo 'class="current_menu_item"' ?>> 
                <a href="<?php echo site_url('contact/');?>"> CONTACT </a>
              </li>

              <li>
                <a href="https://shorturl.at/BEU06"> BOOK </a>
              </li>

            </ul>
          </nav>
      </header>
