			<!-- Slider -->
			<div id="slidercontent">
				<div id="slider">
					<ul>
					<?php query_posts('showposts=5'); ?>
					<?php	
						if (have_posts() ) :
							while (have_posts() ) :
								the_post(); 
					?>
						<li>
							<div class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
							<div class="separator"></div>
							<div class="postdate">Posted by <?php the_author(); ?> in on <?php the_date('m dS, Y'); ?> | <?php comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' ); ?></div>
							<div class="separator"></div>
							<p><?php echo get_the_content(); ?></p>
						</li>
						<?php 
							endwhile;
							endif;
						?>
					</ul>
				</div>
			</div>
			<!-- END Slider -->