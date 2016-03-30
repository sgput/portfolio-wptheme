<?php
/**
 * Template Name: About Page Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <div class="container about-page">
		<?php get_template_part('templates/page', 'header'); ?>
		<?php get_template_part('templates/content', 'page'); ?>
	</div>
<?php endwhile; ?>