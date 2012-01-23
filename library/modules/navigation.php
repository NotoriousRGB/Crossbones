      <header class="two columns offset-by-seven">
         <h1 id="logo" class="textcenter"><?php echo bloginfo('title'); ?></h1>
         <h5 class="textcenter"><?php echo bloginfo('description'); ?></h5>  
         <!--  <img src="<?php echo get_template_directory_uri(); ?>/library/temp/logo.png" alt="" class="scale-with-grid logo"> -->
      </header>



      <nav id="navigation" class="sixteen columns">         
         <?php wp_nav_menu( array('theme_location' => 'header-menu', 'container_id' => 'centeredmenu', 'container_class' => 'hide-on-phoness')) ?>
      </nav>