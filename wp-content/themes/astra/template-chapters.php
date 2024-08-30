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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapters</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
</head>
<body>
    <header>
        <h1>Chapter Overview</h1>
    </header>
    
    <nav>
        <ul>
            <?php foreach ($chapters as $index => $chapter): ?>
                <li><a href="#chapter-<?php echo $index; ?>"><?php echo htmlspecialchars($chapter['title']); ?></a></li>
            <?php endforeach; ?>
        </ul>
    </nav>

    <main>
        <?php foreach ($chapters as $index => $chapter): ?>
            <section id="chapter-<?php echo $index; ?>">
                <h2><?php echo htmlspecialchars($chapter['title']); ?></h2>
                <?php echo $chapter['content']; ?>
            </section>
        <?php endforeach; ?>
    </main>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> Your Company</p>
    </footer>
</body>
</html>
