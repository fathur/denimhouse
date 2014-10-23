<?php 
/**
 * Woocomerce support
 */

// Call header
get_header(); 

// Call breadcrumbs
get_template_part('breadcrums'); 

?>

<div class="container">
	<div class="row enigma_blog_wrapper">
		<div class="col-md-8">
			
			<?php if ( woocommerce_content()) : while ( woocommerce_content() ) : the_post(); ?>
			
			<div class="enigma_blog_full">
				<?php  if(has_post_thumbnail()): 
				$defalt_arg = array('class' => "enigma_img_responsive"); 
				?>
				<div class="enigma_blog_thumb_wrapper_showcase">						
					<div class="enigma_blog-img">
						<?php the_post_thumbnail('wl_page_thumb',$defalt_arg); ?>						
					</div>						
				</div>
				<?php endif; ?>
				<div class="enigma_blog_post_content">
					<?php the_content( __( 'Read More' , 'weblizar' ) ); ?>
				</div>
			</div>	
			<div class="push-right">
				<hr class="blog-sep header-sep">
			</div>
			
			<?php comments_template( '', true ); ?>
			
			<?php
			endwhile; // woocommerce_content()
			endif;  // / woocommerce_content()
			?>

		</div>

		<?php get_sidebar(); ?>	
		
	</div>
</div>	
<?php get_footer(); ?>