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
          <li>info@skh-london.com</li>
          <li>+ 44 (0) 20 8810 1717</li>
          <li>s.k.hbeauty</li>
        </ul>
      </div>
      <header>
          <div class="center">
            <a class="header_logo" href="<?php echo site_url();?>"><img src="<?php echo get_theme_file_uri('assets/RoseGoldLogo.jpg'); ?>" alt="SKH logo"></a>
          </div>
          <div class="header_nav">
            <nav>
              <ul>
                <li <?php if(is_page('updates')) echo 'class="current_menu_item"' ?>><a href="#update_section"> Updates </a></li>

                <div class="dropdown_menu">
                  <li <?php if(is_page('london')) echo 'class="current_menu_item list_styling"' ?>><a> London </a>
                    <i class="fa fa-caret-down" style="font-size: 17px"></i>  
                  <div class="dropdown-content">
                      <a href="<?php echo site_url('/service_categories/weight-loss-clinic/');?>">Weight Loss Clinic</a>
                      <a href="<?php echo site_url('/service_categories/beauty-clinic/');?>">Beauty Clinic</a>
                      <a href="<?php echo site_url('/service_categories/lash-bar/');?>">Lash Bar</a>
                    </div>
                  </li>
                </div>
                
                <div class="dropdown_menu">
                  <li <?php if(is_page('dubai')) echo 'class="current_menu_item list_styling"' ?>><a href="#"> Dubai </a>
                    <i class="fa fa-caret-down" style="font-size: 17px"></i>
                  <div class="dropdown-content">
                      <a href="<?php echo site_url('academy/');?>"> SKH Academy </a>
                      <a href="<?php echo site_url('/courses/lash-academy/');?>"> Lash Academy </a>
                      <a href="<?php echo site_url('/courses/brow-academy/');?>"> Brow Academy </a>
                    </div>
                  </li>
                </div>

                <li <?php if(is_page('shop')) echo 'class="current_menu_item"' ?>><a href="<?php echo site_url('');?>"> Shop </a></li>
                <li <?php if(is_page('team')) echo 'class="current_menu_item"' ?>><a href="<?php echo site_url('team/');?>"> Team </a></li>
                <li <?php if(is_page('contact')) echo 'class="current_menu_item"' ?>><a href="<?php echo site_url('contact-us/');?>"> Contact </a></li>
                <li <?php if(is_page('book')) echo 'class="current_menu_item"' ?>><a href="https://shorturl.at/BEU06"> Book </a></li>
              </ul>
            </nav>
          </div>
      </header>
