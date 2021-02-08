<?php get_header();?>

	<?php	if(have_posts()): while(have_posts()): the_post();?>

<main>
	<div class="container">

					<div <?php post_class();?>>
						<h1><?php the_title();?></h1>
						<div class="post-content">
							<?php the_content();?>							
						</div>
					</div>

					<h4>Post listing</h4>
					<?php
					$args = array(
							'posts_per_page' => -1
					);
					$latest_posts = new WP_Query( $args );
					if ( $latest_posts->have_posts() ) {
						?>
						<ul>
						<?php
							while ( $latest_posts->have_posts() ) {
									$latest_posts->the_post();
									// Post data goes here.
									?>

							<li class="post">
								<div class="content">
									<h3><a href="<?php echo get_the_permalink();?>"><?php echo get_the_title();?></a></h3>
								</div>
							</li>
									<?php
							}
							?>
						</ul>
						<?php }
					wp_reset_postdata();
					?>


	</div>
</main>

	<?php	endwhile; endif;?>

<?php get_footer();
