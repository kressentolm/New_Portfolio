<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package New_Portfolio
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'new-portfolio-theme-for-cblackmon-com' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'new-portfolio-theme-for-cblackmon-com' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'new-portfolio-theme-for-cblackmon-com' ), 'New_Portfolio', '<a href="http://cblackmon.com" rel="designer">Chris Blackmon</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
