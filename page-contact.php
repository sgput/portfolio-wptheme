<?php
/**
 * Template Name: Contact Page Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
	<div class="container">
		<div class="row">
			<?php get_template_part('templates/page', 'header'); ?>
		  <?php get_template_part('templates/content', 'page'); ?>
		</div>
	</div>
<?php endwhile; ?>

<div class="container">
	<div class="row">
		<?php if( function_exists( 'ninja_forms_display_form' ) ) { ninja_forms_display_form( 1 ); } ?>
	</div>
</div>