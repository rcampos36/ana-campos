<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ana-campops
 */

?>

<header id="masthead">
	<?php
		get_template_part( 'template-parts/blocks/hero' );
	?>
	<nav id="site-navigation" class="absolute right-80 top-12" aria-label="<?php esc_attr_e( 'Main Navigation', 'ana-campops' ); ?>">

		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
			)
		);
		?>
	</nav><!-- #site-navigation -->

</header><!-- #masthead -->
