<?php
/*
Template Name: Chapter Navigation
*/

get_header();
?>

<div id="content">
    <?php
    // Query for the chapters
    $args = array(
        'post_type' => 'chapter',
        'posts_per_page' => 1,
        'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
        'orderby' => 'menu_order',
        'order' => 'ASC'
    );
    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
    ?>
        <h1><?php the_title(); ?></h1>
        <div><?php the_content(); ?></div>
    <?php
        endwhile;

        // Pagination
        echo '<div class="pagination">';
        echo get_previous_post_link('%link', 'Previous Chapter');
        echo get_next_post_link('%link', 'Next Chapter');
        echo '</div>';

        // Restore original Post Data
        wp_reset_postdata();
    else :
        echo '<p>No chapters found.</p>';
    endif;
    ?>
</div>

<?php get_footer(); ?>
