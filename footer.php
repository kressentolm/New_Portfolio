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
			<div>Icons made by <a href="http://www.flaticon.com/authors/icons8" title="Icons8">Icons8</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a>             is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0">CC BY 3.0</a></div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
