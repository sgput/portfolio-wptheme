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
		<!-- end #homeBox -->
		<!-- 'DEVICES' CSS ANIMATION -->
		<div class="center-block col-xs-12 col-md-7">
			<div class="devices center-block">
			  <div class="desktop-wrap">
			    <div class="desktop-monitor">
			      <div class="anim-content">
			        <div class="pg">
			          <ul class="txt">
			            <li></li>        
			            <li></li>
			            <li class="thin"></li>
			            <li class="thin"></li>
			            <li class="thin"></li>
			          </ul>  
			        </div>
			      </div>
			      <!-- end anim-content -->
			    </div>
			    <!-- end screen -->
			    <div class="base"></div> <!-- base -->
			  </div>
			  <!--end desktop-wrap-->
			  <!-- begin laptop -->
			  <div class="laptop-wrap">
			    <div class="laptop-monitor"> 
			      <div class="anim-content">
			          <ul class="txt txt-laptop">
			            <li></li>        
			            <li></li>
			            <li class="thin"></li>
			            <li class="thin"></li>
			            <li class="thin"></li>
			          </ul>          
			      </div>
			    </div>
			    <!-- end laptop-monitor   -->
			    <div class="btm"></div> <!-- bottom of laptop -->
			  </div>
			  <!-- end laptop-wrap -->
			  <!-- begin tablet -->
			  <div class="tablet">
			    <div class="tablet-screen">
			      <div class="tablet-content">
			        <ul class="txt">
			          <li></li>
			          <li></li>
			          <li></li>
			        </ul>
			      </div>
			    </div>    
			  </div>
			  <!-- end tablet -->
			  <!-- begin phone -->
			  <div class="phone">
			    <div class="screen">
			      <div class="phone-content">
			        <ul class="txt">
			          <li></li>
			          <li></li>
			          <li></li>
			        </ul>
			      </div>
			    </div>    
			  </div>
			  <!-- end phone -->
			</div>
			<!--end devices-->
		</div>
	</div>
	<!-- end row -->
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
			<div class="col-xs-12">
				<div><?php the_field('home_about_copy'); ?></div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3">
				<svg id="nebraska_drawing" data-name="nebraska drawing" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 558 283"><defs><style>.cls-1{fill:none;}</style></defs><title>nebraska</title><path class="cls-1" d="M1,284Q1,142.5,1,1H559q0,141.5,0,283H1ZM508.55,139.69c0.73-2.84,1.37-4.23,1.41-5.64,0.19-6.55,1.54-13.45,0-19.57A50,50,0,0,0,500.13,95c-7.6-8.93-7.26-19.79-9.18-29.94-1.66-8.75-.73-9-9.56-11-2.19-.5-5-2.37-5.78-4.31-3.2-7.57-9.81-11.78-15.93-16s-13.31-6.49-20.13-9.41c-1.59-.68-3.53-0.55-5.31-0.74q-3.91-.43-7.84-0.78c-3.11-.28-6.22-0.73-9.33-0.71-3.47,0-6.95.8-10.41,0.69-4.28-.14-7.59.57-10.18,4.62-1.12,1.75-5.48,3.67-6.34,3-4.53-3.64-8.87-7.23-14.82-8.31-0.74-.14-1.23-1.5-1.9-2.24-4.7-5.11-10.63-8.35-17.45-8.35q-168.74-.2-337.48-0.07c-1.75,0-3.49.21-5.16,0.32v175H138v81.91H544.41a21.63,21.63,0,0,1,2.5,0c3.65,0.43,4.73-1.89,3.78-4.56a69,69,0,0,0-6-12.79c-1.79-2.92-5.52-4.85-6.75-7.89-2.39-5.91-3-12.54-5.52-18.4-2.09-4.93-5.87-9.12-8.67-13.78a7.31,7.31,0,0,1-1.08-4.83c1.51-6.57,4.87-12.44,2.92-20-1.65-6.38-.31-13.49-0.86-20.23-0.2-2.44-2.16-4.71-3.17-7.12a26.53,26.53,0,0,1-2.25-6.53c-0.39-3,1.19-6.47-3.09-8-0.44-.15-0.68-1.43-0.69-2.18C515.5,138.14,513.73,136.65,508.55,139.69Z" transform="translate(-1 -1)"/><path d="M508.55,139.69c5.19-3,7-1.55,7,2.81,0,0.76.25,2,.69,2.18,4.28,1.49,2.71,5,3.09,8a26.53,26.53,0,0,0,2.25,6.53c1,2.41,3,4.68,3.17,7.12,0.56,6.74-.79,13.85.86,20.23,2,7.54-1.41,13.42-2.92,20a7.31,7.31,0,0,0,1.08,4.83c2.79,4.66,6.58,8.85,8.67,13.78,2.48,5.86,3.13,12.49,5.52,18.4,1.22,3,5,5,6.75,7.89a69,69,0,0,1,6,12.79c1,2.68-.13,5-3.78,4.56a21.63,21.63,0,0,0-2.5,0H138V186.85H13.33v-175c1.67-.11,3.41-0.32,5.16-0.32q168.74,0,337.48.07c6.82,0,12.75,3.24,17.45,8.35,0.67,0.73,1.16,2.1,1.9,2.24,6,1.08,10.29,4.68,14.82,8.31,0.86,0.69,5.22-1.23,6.34-3,2.58-4,5.89-4.76,10.18-4.62,3.46,0.11,6.93-.66,10.41-0.69,3.11,0,6.22.43,9.33,0.71q3.92,0.35,7.84.78c1.78,0.19,3.73.06,5.31,0.74,6.82,2.93,14.1,5.28,20.13,9.41s12.73,8.4,15.93,16c0.82,1.95,3.59,3.81,5.78,4.31,8.83,2,7.9,2.23,9.56,11,1.93,10.15,1.58,21,9.18,29.94a50,50,0,0,1,9.78,19.45c1.58,6.13.23,13,0,19.57C509.91,135.46,509.28,136.85,508.55,139.69Z" transform="translate(-1 -1)"/></svg>
				<div class="omaha-star"></div>
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
				<div class="contact-form"><?php if( function_exists( 'ninja_forms_display_form' ) ) { ninja_forms_display_form( 1 ); } ?></div>
			</div>
		</div>
	</div>
</section>
