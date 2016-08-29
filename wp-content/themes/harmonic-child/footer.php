<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package harmonic
 */
?>

					<div class="clear"></div>
				</div><!-- #content .site-wrapper -->
			</div><!-- #content-wrapper -->
			<footer id="colophon" class="site-footer" role="contentinfo">

				<div class="site-info">
					<?php do_action( 'harmonic_credits' ); ?>
					<a href="<?php echo site_url(); ?>"><?php echo get_bloginfo( $show, '' ); ?> &copy </a>
				</div><!-- .site-info -->

			</footer><!-- #colophon .site-footer -->
		</div><!-- #page -->

		<?php wp_footer(); ?>
	</body>
</html>
