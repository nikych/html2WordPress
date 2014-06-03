<?php
	get_header();
?>
			<!-- Blog START-->
			
			<div id="blog">
			
			<!-- Content -->
			<div id="content">
			
			<!-- Section -->
				<?php 
					if (have_posts() ) :
						while (have_posts() ) :
							the_post(); 
				?>
				<section>
					<article>
							<h3 class="heading"><a href=""<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<div class="entry-page"><?php echo the_content(); ?></div>
					</article>
				</section>
				<?php 
					endwhile;
					endif;
				?>
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