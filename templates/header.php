<?php if( !defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>

 <header>
 <?php // Refer to https://jonsuh.com/hamburgers/ for animated hamburger menus. Replace X with desired animation ?>
  <button class="hamburger hamburger--X" type="button" data-hide-for="medium" data-responsive-toggle="top-menu" aria-label="Menu" aria-controls="navigation">
      <span class="hamburger-box">
          <span class="hamburger-inner"></span>
      </span>
    </button>
  <div class="top-bar" id="top-menu">
    <div class="top-bar-left">
        <ul class="menu">
          <li class="menu-text"><?php bloginfo('name'); ?></li>
        </ul>
    </div>
    <div class="top-bar-right">
     <nav class="top-bar-section">
      <ul class="dropdown menu" data-dropdown-menu id="main-menu">
        <?php if (has_nav_menu('primary_navigation')) :?>
          <?php wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'container' => '', 'items_wrap' => '%3$s']);?>
        <?php endif;?>
      </ul>
      </nav>
    </div>
  </div>
</header>
