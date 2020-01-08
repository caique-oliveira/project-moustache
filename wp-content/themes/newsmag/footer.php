<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Newsmag
 */

?> 
</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<?php get_sidebar( 'footer' ); ?>
		

	<?php
	if ( get_theme_mod( 'newsmag_after_footer_enable', false ) ) {
		get_template_part( 'template-parts/after-footer' );
	}
	?>

	<?php $go_top_enabled = get_theme_mod( 'newsmag_enable_go_top', true ); ?>

	<?php if ( $go_top_enabled ) : ?>
		<a href="#0" id="back-to-top" class="back-to-top">
			<span class="nmicon-angle-up"></span>
		</a>
	<?php endif; ?>

	<?php
	$copyright_area = get_theme_mod( 'newsmag_enable_copyright', true );
	$copyright_menu = has_nav_menu( 'copyright' );
	?>
	<div class="site-info">
				<div class="<?php echo $copyright_menu ? 'col-md-7 col-lg-7 col-sm-7' : 'col-lg-8 col-md-8 col-sm-8 col-xs-12 text-copy'; ?>">
					<?php if ( $copyright_area ) : ?>
						<?php
						echo wp_kses_post( get_theme_mod( 'newsmag_copyright_contents', '&copy; ' . date( 'Y' ) . ' <a href="https://www.machothemes.com/newsmag-lite/"></a>' ) );
						?>
					<?php endif; ?>
				</div>

				<div class="<?php echo $copyright_menu ? 'col-lg-4 col-md-4 col-sm-4' : 'col-xs-12 col-md-4 links-footer' ; ?>">
					<?php echo __( '<a class="links-externos" href="https://www.machothemes.com" rel="dofollow" title="link-externo1">Link Externo 1</a>'); ?>
						<?php echo __( '|'); ?>
					<?php echo __( '<a class="links-externos" href="https://www.machothemes.com" rel="dofollow" title="link-externo1">Link Externo 2</a>'); ?>

				</div>

				<?php
				if ( has_nav_menu( 'copyright' ) ) {
					?>
					<div class="col-lg-5 col-sm-4 text-right">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'copyright',
								'menu_id'        => 'copyright-menu',
								'items_wrap'     => '<ul id="%1$s" class="copyright-menu %2$s">%3$s</ul>',
							)
						);
						?>
					</div>
				<?php } ?>
			
		
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
