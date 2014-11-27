<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	</ol>

	<div class="carousel-inner" role="listbox">
		<div class="item active">
			<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/carousel-1.jpg" alt="First slide">
			<!-- <div class="container">
				<div class="carousel-caption">
					<h1>Example headline.</h1>
					<p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
					<p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
				</div>
			</div> -->
		</div>
		<div class="item">
			<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/carousel-2.jpg" alt="Second slide">
			
		</div>
		<div class="item">
			<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/carousel-3.jpg" alt="Third slide">
			
		</div>
		<div class="item">
		
			<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/carousel-4.jpg" alt="Fourth slide">
			
		</div>
	</div>

	<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div><!-- /.carousel -->

<div class="container dh-container">
	<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>
	<?php the_content(); ?>
	<?php endwhile;
	endif;
	?>
</div>