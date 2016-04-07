<?php
/**
 * Template Name: About Page Template
 */
?>

<div class="container about-page">
    <div class="row">
    <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('templates/page', 'header'); ?>
        <div class="col-md-8 col-md-offset-2">
            <?php get_template_part('templates/content', 'page'); ?>
        </div>
    <?php endwhile; ?>
    </div>
</div>
