<?php
/**
 * Template Name: Work Page Template
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

<section class="home-feature container-fluid" id="work">
	<div class="container">
		<div class="row work-previews">
			<div class="col-xs-8 workImg">
				<a href="/work/pixies"><div class="title-overlay pixies">Pixies</div><img class="img-responsive imgWrap" src="<?php the_field('work_img_1'); ?>" alt="" /></a>
			</div>
			<div class="col-xs-4 workImg">
				<a href="/work/adam-yale-66"><div class="title-overlay adamyale">Adam Yale</div><img class="img-responsive imgWrap" src="<?php the_field('work_img_2'); ?>" alt="" /></a>
			</div>
			<div class="col-xs-4 workImg">
				<a href="/work/ingrid-michaelson"><div class="title-overlay ingrid">Ingrid Michaelson</div><img class="img-responsive imgWrap" src="<?php the_field('work_img_3'); ?>" alt="" /></a>
			</div>
			<div class="col-xs-12 workImg">
				<a href="/work/maroon-5-gamestop"><div class="title-overlay maroon5">Maroon 5</div><img class="img-responsive imgWrap" src="<?php the_field('work_img_4'); ?>" alt="" /></a>
			</div>
			<div class="col-xs-6 workImg">
				<a href="/work/dear-mr-watterson"><div class="title-overlay watterson">Dear Mr. Watterson</div><img class="img-responsive imgWrap" src="<?php the_field('work_img_5'); ?>" alt="" /></a>
			</div>
			<div class="col-xs-6 workImg">
				<a href="/work/obi-creative"><div class="title-overlay obicreative">OBI Creative</div><img class="img-responsive imgWrap" src="<?php the_field('work_img_6'); ?>" alt="" /></a>
			</div>
			<div class="col-xs-12 workImg">
				<a href="/work/manchester-united"><div class="title-overlay manu">Manchester United</div><img class="img-responsive imgWrap" src="<?php the_field('work_img_7'); ?>" alt="" /></a>
			</div>
		</div>
	</div>
</section>