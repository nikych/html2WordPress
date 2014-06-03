<?php
	get_header();
?>

<?php include 'slider.php'; ?>
			
			<!-- Blog START-->
			
			<div id="blog">
			
			<!-- Content -->
			<div id="content">
				<section id="content_column1">
					<h2>POPULAR ARTICLES</h2>
					<?php 
						if (have_posts() ) :
							while (have_posts() ) :
								the_post(); 
					?>
						<article>
							<div class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
							<div class="separator"></div>
							<div class="postdate">Posted by <?php the_author(); ?> in on <?php the_date('m dS, Y'); ?> | <?php comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' ); ?></div>
							<div class="separator"></div>
							<div class="image"><?php 
         						 if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
         						   the_post_thumbnail();
         						 } 
      							  ?></div>
							<p class="dot"><?php echo get_the_content(); ?></p>
						</article>
					<?php 
						endwhile;
						endif;
					?>
				</section>
				<section id="content_column2">
					<h2>RECENT COMMENTS</h2>
					<?php
						global $wpdb;
						$sql = "SELECT DISTINCT ID, post_title, post_password, comment_ID,
						comment_post_ID, comment_author, comment_date_gmt, comment_approved,
						comment_type,comment_author_url,
						SUBSTRING(comment_content,1,30) AS com_excerpt
						FROM $wpdb->comments
						LEFT OUTER JOIN $wpdb->posts ON ($wpdb->comments.comment_post_ID =
						$wpdb->posts.ID)
						WHERE comment_approved = '1' AND comment_type = '' AND
						post_password = ''
						ORDER BY comment_date_gmt DESC
						LIMIT 10";
						$comments = $wpdb->get_results($sql);
						$output = $pre_HTML;
						foreach ($comments as $comment) {
						$output .= "\n<div class='comment'>\n<div class='name'>".strip_tags($comment->comment_author)
						." <span>says</span>\n</div>" . "<p><a href=\"" . get_permalink($comment->ID) .
						"#comment-" . $comment->comment_ID . "\" title=\"on " .
						$comment->post_title . "\">" . strip_tags($comment->com_excerpt)
						."</a></p></div>";
						}
						$output .= $post_HTML;
						echo $output;
					?>
				</section>
				<section id="content_column3">
					<h2>LIFESTREAM</h2>
					<?php 
						if (have_posts() ) :
							while (have_posts() ) :
								the_post(); 
					?>
						<article>
							<div class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
							<div class="separator"></div>
							<div class="postdate">Posted by <?php the_author(); ?> in on <?php the_date('m dS, Y'); ?> | <?php comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' ); ?></div>
							<div class="separator"></div>
							<div class="image"><?php 
         						 if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
         						   the_post_thumbnail();
         						 } 
      							  ?></div>
							<p class="dot"><?php echo get_the_content(); ?></p>
						</article>
					<?php 
						endwhile;
						endif;
					?>
				</section>
				
				<!-- Section -->
				<section>
					<h2>RECENT POSTS</h2>
				<?php query_posts('showposts=10'); ?>
				<?php 
					if (have_posts() ) :
						while (have_posts() ) :
							the_post(); 
				?>
					<article>
							<h3 class="heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<div class="line"></div>
							<div class="postdate">Posted by <?php the_author(); ?> in on <?php the_date('m dS, Y'); ?> | <?php comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' ); ?></div>
							<div class="line"></div>
							<div class="picture"><?php 
         						 if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
         						   the_post_thumbnail();
         						 } 
      							  ?></div>
							<div class="entry"><?php echo get_the_content(); ?></div>
					</article>
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