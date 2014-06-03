<?php
	get_header();
?>
		
			<!-- Blog START-->
			
			<div id="blog">
			
			<!-- Content -->
			<div id="content">
				
				<!-- Section -->
				<section>
					<?php 
						if (have_posts() ) :
							while (have_posts() ) :
								the_post(); 
					?>
					<article>
							<h3 class="heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<div class="line"></div>
							<div class="postdate">Posted by <?php the_author(); ?> in on <?php the_date('m dS, Y'); ?> | <?php comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' ); ?></div>
							<div class="post-nav">
								<div class="previous-post"><?php previous_post_link(); ?></div>
								<div class="next-post"><?php next_post_link(); ?></div>
							</div>
							<div class="line"></div>
							<div class="entry-page">
							<div><?php 
         						 if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
         						   the_post_thumbnail();
         						 } 
      							  ?></div>
							<?php echo get_the_content(); ?>
							</div>
							<div class="postmeta"> <?php if(get_the_tags()) { ?> 
							<img src="<?php bloginfo('template_url'); ?>/images/tag.png" alt="tag" /> <?php  the_tags('Tags: ', ', '); } ?></div>
					</article>
					<?php comments_template('', true); ?>
					
					<?php 
						endwhile;
						endif;
					?>
				</section>
				<!-- END Section -->
				
				<?php
					get_sidebar();
				?>
				
			</div>
			<!-- END Content -->
			</div>	
			<!-- Blog END -->
<?php
	get_footer();
?>