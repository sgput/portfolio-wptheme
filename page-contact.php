<?php
/**
 * Template Name: Contact Page Template
 */
?>

<div class="container">
    <div class="row">
        <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('templates/page', 'header'); ?>
            <?php get_template_part('templates/content', 'page'); ?>
        <?php endwhile; ?>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <?php if( function_exists( 'ninja_forms_display_form' ) ) { ninja_forms_display_form( 1 ); } ?>
        </div>
    </div>
</div>
