<?php if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
} ?>

<form role="search" method="get" class="site-search js-search-submit" action="<?php echo esc_url(home_url('/')); ?>">
  <div class="small-12 row no-margin collapse">
    <input type="text" class="search-bar small-10" value="<?php echo get_search_query(); ?>" name="s" placeholder="<?php _e('Search', 'sage'); ?> <?php bloginfo('name'); ?>">
    <input type="submit" class="button fa small-12" value="&#xf002;">
  </div>
</form>
