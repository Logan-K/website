<?php
/**
 *
 * Template Name: Home Page
 *
 */
get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h1><?php echo the_title(); ?></h1>
            <h2>Test</h2>
            <?php echo the_content(); ?>
        <?php endwhile; endif; ?>
    </main>
</div>
<?php get_footer(); ?>
