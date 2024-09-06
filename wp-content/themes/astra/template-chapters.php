<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header(); ?>
<?php if ( astra_page_layout() == 'left-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>
	<div id="primary" <?php astra_primary_class(); ?>>
		<?php
		astra_primary_content_top();

		astra_content_loop();

		astra_pagination();

		astra_primary_content_bottom();
		?>
	</div>
<?php
if ( astra_page_layout() == 'right-sidebar' ) :

	get_sidebar();

endif;

get_footer();
