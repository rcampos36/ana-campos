<?php
/*
  Template Name: The Home Custom Template     
*/


get_header();
?>

	<section id="primary">
		<main id="main">

		<?php
		if ( have_posts() ) {

			// Load posts loop.
			while ( have_posts() ) {
				the_post();
				get_template_part( 'template-parts/blocks/projects' );
				get_template_part( 'template-parts/blocks/contact-form' );
			}

		} else {

			// If no content, include the "No posts found" template.
			get_template_part( 'template-parts/content/content', 'none' );

		}
		?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
