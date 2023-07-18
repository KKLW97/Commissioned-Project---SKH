<!DOCTYPE html>
<html <?php language_attributes();?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head> 

  <body <?php body_class(); ?>>
      <div class="announcement_bar">
        <ul> 
          <li> London </li>
          <li> Dubai </li>
          <li> Turkey (Coming Soon) </li>
        </ul>
      </div>
      <header>
          <div class="center">
            <a class="header_logo" href="<?php echo site_url();?>"><img src="<?php echo get_theme_file_uri('assets/RoseGoldLogo.jpg'); ?>" alt="SKH logo"></a>
          </div>

          <nav>
            <ul>

            <div class="dropdown_menu">
              <li <?php if(is_page('academy') OR get_post_type()== 'course') echo 'class="current_menu_item"'?>><a href="<?php echo site_url('academy/');?>"> Academy </a>
                <i class="fa fa-caret-down" style="font-size: 17px"></i>
                  <div class="dropdown-content">
                    <a href="<?php echo site_url('/courses/lash-academy/');?>"> Lash Academy </a>
                    <a href="<?php echo site_url('/courses/brow-academy/');?>"> Brow Academy </a>
                  </div>
              </li>
            </div>

            <div class="dropdown_menu">
              <li <?php if(get_post_type()== 'service-categories') echo 'class="current_menu_item"'?>><a> Services </a>
                <i class="fa fa-caret-down" style="font-size: 17px"></i>
                  <div class="dropdown-content">
                    <a href="<?php echo site_url('/service_categories/beauty-clinic/');?>"> Beauty Clinic </a>
                    <a href="<?php echo site_url('/service_categories/lash-bar/');?>"> Lash Bar </a>
                  </div>
              </li>
            </div>
            
              <li <?php if(is_page('shop')) echo 'class="current_menu_item"' ?>>
                <a href="<?php echo site_url('/service_categories/weight-loss-clinic/');?>"> Weight Loss </a>
              </li>

              <li <?php if(is_page('shop')) echo 'class="current_menu_item"' ?>>
                <a href="<?php echo site_url('#');?>"> Shop </a>
              </li>

              <li <?php if(is_page('team')) echo 'class="current_menu_item"' ?>>
                <a href="<?php echo site_url('team/');?>"> Team </a>
              </li>

              <li <?php if(is_page('contact-us')) echo 'class="current_menu_item"' ?>> 
                <a href="<?php echo site_url('contact-us/');?>"> Contact </a>
              </li>

              <li>
                <a href="https://shorturl.at/BEU06"> Book </a>
              </li>

              <li>
                <a href="#">
                  <i class="fa fa-shopping-cart fa-lg" aria-hidden="true"></i>
                </a>
              </li>

            </ul>
          </nav>
      </header>
