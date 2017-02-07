<?php if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
} ?>

<?php the_content(); ?>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
