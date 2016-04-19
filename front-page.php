<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

<section id="home" class="home-feature container">
    <div class="row">
		<div id="homeBox" class="text-center col-xs-12 col-md-4 col-md-offset-1">
			<div id="homeHeader">
				<h1>spencer<br>putnam</h1>
			</div>
			<div class="subHead">
				<h2>web portfolio</h2>
			</div>
		</div>
		<div class="center-block col-xs-12 col-md-7">
			<?php get_template_part('templates/devices-illustration'); ?>
	    </div>
	</div>
</section>

<!-- ABOUT SECTION -->
<section class="home-feature container-fluid" id="about">
	<div class="container" >
		<div class="row">
			<div class="home-header">
				<h1>About</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-8 col-md-offset-2">
				<div><?php the_field('home_about_copy'); ?></div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3">
				<?php get_template_part('templates/ne-animation'); ?>
			</div>
		</div>
	</div>
</section>

<!-- WORK SECTION -->
<section id="work" class="home-feature container-fluid">
	<div class="container">
		<div class="row">
			<div class="home-header">
				<h1>Work</h1>
			</div>
		</div>
		<div class="row work-previews">
			<div class="col-xs-8 workImg">
				<a href="/work/pixies"><div class="title-overlay pixies">Pixies</div><img src="<?php the_field('home_work_img_1'); ?>" class="img-responsive imgWrap" alt="" /></a>
			</div>
			<div class="col-xs-4 workImg">
				<a href="/work/adam-yale-66"><div class="title-overlay adamyale">Adam Yale</div><img src="<?php the_field('home_work_img_2'); ?>" class="img-responsive imgWrap" alt="" /></a>
			</div>
			<div class="col-xs-4 workImg">
				<a href="/work/ingrid-michaelson"><div class="title-overlay ingrid">Ingrid Michaelson</div><img src="<?php the_field('home_work_img_3'); ?>" class="img-responsive imgWrap" alt="" /></a>
			</div>
			<div class="col-xs-12 workImg">
				<a href="/work/maroon-5-gamestop"><div class="title-overlay maroon5">Maroon 5</div><img src="<?php the_field('home_work_img_4'); ?>" class="img-responsive imgWrap" alt="" /></a>
			</div>
			<div class="col-xs-6 workImg">
				<a href="/work/dear-mr-watterson"><div class="title-overlay watterson">Dear Mr. Watterson</div><img src="<?php the_field('home_work_img_5'); ?>" class="img-responsive imgWrap" alt="" /></a>
			</div>
			<div class="col-xs-6 workImg">
				<a href="/work/obi-creative"><div class="title-overlay obicreative">OBI Creative</div><img src="<?php the_field('home_work_img_6'); ?>" class="img-responsive imgWrap" alt="" /></a>
			</div>
			<div class="col-xs-12 workImg">
				<a href="/work/manchester-united"><div class="title-overlay manu">Manchester United</div><img src="<?php the_field('home_work_img_7'); ?>" class="img-responsive imgWrap" alt="" /></a>
			</div>
		</div>
	</div>
</section>

<!-- CONTACT SECTION -->
<section id="contact" class="home-feature container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="home-header"><h1>Contact</h1></div>
				<div class="contact-form col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2">
					<?php if( function_exists( 'ninja_forms_display_form' ) ) { ninja_forms_display_form( 1 ); } ?>
				</div>
			</div>
		</div>
	</div>
</section>
