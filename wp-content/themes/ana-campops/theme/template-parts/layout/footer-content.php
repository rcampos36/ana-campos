<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ana-campops
 */

?>

<footer id="colophon" class="w-full bg-cover h-60" style="background-image: url(<?php echo the_field('footer_image')?>);">
	<div class="flex items-center justify-center mt-10">
		<?php
		$ana_campops_blog_info = get_bloginfo( 'name' );
		if ( ! empty( $ana_campops_blog_info ) ) :
			?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>,
			<?php
		endif;

		/* translators: 1: WordPress link, 2: WordPress. */
		printf(
			'<a href="%1$s">proudly powered by %2$s</a>.',
			esc_url( __( 'https://media703.com/', 'ana-campops' ) ),
			'Media703'
		);
		?>
	</div>

</footer><!-- #colophon -->
