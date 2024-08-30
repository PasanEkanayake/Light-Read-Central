<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
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
	</div><!-- #primary -->
<?php
if ( astra_page_layout() == 'right-sidebar' ) :

	get_sidebar();

endif;

get_footer();

<?php
// Define an array of chapters with titles and content
$chapters = [
    [
        'title' => 'Introduction',
        'content' => '<p>Welcome to the introduction chapter. Here we will cover the basics.</p>'
    ],
    [
        'title' => 'Chapter 1: Getting Started',
        'content' => '<p>This chapter will guide you through the initial setup and basic concepts.</p>'
    ],
    [
        'title' => 'Chapter 2: Advanced Topics',
        'content' => '<p>In this chapter, we delve into more advanced topics and techniques.</p>'
    ],
    [
        'title' => 'Conclusion',
        'content' => '<p>We summarize the key points covered and discuss the next steps.</p>'
    ]
];

?>
