<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage atheros
 * @since atheros 1.0
 */
?>
	
	 
	
	</div><!-- #main -->

	<div id="footer" role="contentinfo">
		<div id="colophon">

<?php
	/* A sidebar in the footer? Yep. You can can customize
	 * your footer with four columns of widgets.
	 */
	get_sidebar( 'footer' );
?>

			<div id="site-info">
				<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php bloginfo( 'name' ); ?>
				</a>
			</div><!-- #site-info -->

		 

		</div><!-- #colophon -->
	</div><!-- #footer -->

	<div id="leftstripe"></div>
	<div id="rightstripe"></div>
	
	
</div><!-- #wrapper -->

<div id="footerbottom">
	<?php 
		/**
		 * This is where the credit for the theme is placed. 
		 * Please keep the link back to the author's website.
		 * Seriously, developing this awesome theme took a lot
		 * of effort and time, weeks and weeks of voluntary unpaid work. I only ask 
		 * that you retain this link here, and you can use and/or modify the theme
		 * however you like to. Of course you can remove the whole line. :-)
		*/
		?>
		 <?php _e( 'By', 'atheros' ); ?> <a href="<?php echo esc_url( __( 'http://www.otto-gutschein.net/', 'atheros' ) ); ?>"><?php printf( 'Otto Gutschein' ); ?></a> Themes.

</div>
<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>