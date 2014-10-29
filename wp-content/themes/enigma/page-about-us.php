<?php

/**
 * 
 */
get_header(); ?>

<div class="container dh-container">
	
	<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>
	
	<div class="row">
		<div class="col-md-4">
			<?php the_post_thumbnail('medium', array(
				'class' => 'img-responsive img-rounded'
			)); ?>
		</div>

		<div class="col-md-8">
			<h1 class="text-center"><?php the_title(); ?></h1>
			<?php the_content(); ?>
		</div>
	</div>

	<?php endwhile;
	endif;
	?>

</div>

<?php get_footer(); ?>