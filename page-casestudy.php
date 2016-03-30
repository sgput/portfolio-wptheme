<?php
/**
 * Template Name: Case Study Template
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

<!-- case study featured image -->
<div class="container">
	<div class="row">
		<div class="cs-feat-img center-block col-xs-12 ">
			<img class="img-responsive" src="<?php the_field('cs_featured_img'); ?>" alt="" />
		</div>
	</div>
	
	<div class="row cs-row">
		<div class="col-xs-10 col-xs-offset-1">
			<p><?php the_field('cs_project_info'); ?></p>
			<div class="text-center">
				<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
			</div>
		</div>
	</div>

	<div class="row cs-row">
		<div class="cs-about col-xs-10 col-xs-offset-1">
			<h2>BACKGROUND</h2>
			<p><?php the_field('cs_project_about'); ?></p>
		</div>
	</div>

	<div class="row cs-row">
		<div class="col-xs-12 col-sm-4">
			<img class="img-responsive center-block cs-asset" src="<?php the_field('cs_assets_1'); ?>" alt="" />
		</div>
		<div class="col-xs-12 col-sm-4">
			<img class="img-responsive center-block cs-asset" src="<?php the_field('cs_assets_2'); ?>" alt="" />
		</div>
		<div class="col-xs-12 col-sm-4">
			<img class="img-responsive center-block cs-asset" src="<?php the_field('cs_assets_3'); ?>" alt="" />
		</div>
	</div>

	<div class="row cs-row">
		<div class="center-block col-xs-12">
			<img class="img-responsive center-block" src="<?php the_field('cs_full_page_img'); ?>" alt="" />
		</div>
	</div>
</div>



