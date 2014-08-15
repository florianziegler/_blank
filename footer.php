<?php
/**
 * @package _blank
 */
?>
        </div><!-- #content -->
    	<footer id="colophon" class="site-footer" role="contentinfo">
    		<p>&copy; Copyright <?php echo date('Y'); ?>.</p>
            <?php wp_nav_menu( array( 'theme_location' => 'footer', 'container' => 'nav', 'container_class' => 'footer-navigation') ); ?>
        </footer><!-- #site-foooter -->
	</div><!-- #site-wrap -->
	<?php wp_footer(); ?>
</body>
</html>