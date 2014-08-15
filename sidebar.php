<?php
/**
 * @package _blank
 */

if ( ! is_active_sidebar( 'sidebar' ) ) {
	return;
}
?>
<div class="sidebar" role="complementary">
    <?php dynamic_sidebar( 'sidebar' ); ?>
</div><!-- .sidebar -->