<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2"> 
			 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				    
					<?php previous_post('&laquo; &laquo; %', 'PREV', 'no'); ?>
					| <?php next_post('% &raquo; &raquo; ', 'NEXT', 'no'); ?>

				    <p class="post-date text-right"><?php the_time('l, F jS, Y'); ?></p>
			 		<hr>
					<h1 class="text-center"><?php the_title(); ?></h1>
					<p class="text-center">by <?php the_author(); ?></p>
					<hr>
	
						<?php the_content(); ?>
					<hr>
					<?php comments_template(); ?>
	
			
			<?php endwhile; else: ?>
				<p><?php _e('Sorry, this page does not exist.'); ?></p>
				
			<?php endif; ?>
		</div>
	</div>
</div>
<div class="post-nav">
      <ul>
	    <li>Share</li>
        <li class="active"><a href="http://www.facebook.com/odysys"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter fa-lg"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin fa-lg"></i></a></li>
        <li><a href="#"><i class="fa fa-google-plus fa-lg"></i></a></li>
		<li><a href="#"><i class="fa fa-pinterest fa-lg"></i></a></li>
      </ul>

</div>


<?php get_footer(); ?>