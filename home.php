<?php get_header(); ?>
<!--<<div class="container-fluid">
	<div class="row blog-heading">
		<div class="col-md-12 col-sm-12 col-xs-12"> 
			<h1 class="text-center">Drive more bookings</h1>
		</div>
	</div>
</div>-->
<div class="container">
	<div class="row posts">
		<div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1"> 
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class=" individual-posts">
					<p class="post-date">Posted by <?php the_author(); ?> on <?php the_time('l, F jS, Y'); ?></p>
					<?php echo get_the_post_thumbnail();?>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<?php the_excerpt(); ?>
					<a href="<?php echo get_permalink(); ?>">Continue Reading</a>
				</div>
			<?php endwhile; else: ?>
				<p class="text-center"><?php _e('Sorry, there are no posts to display.'); ?></p>
			<?php endif; ?>
		</div>
		<!--<div class="col-md-4 spacer-lt" id="sidebar">
			<?php get_sidebar(); ?>	
		</div> -->
	</div>
</div>		


<?php get_footer(); ?>