<?php

/* Template Name: Home Page */

get_header();

if(have_posts()):
	while(have_posts()): the_post();
?>

<main>
	<div class="container">

		<section class="hero">
			<div class="content">
				<div class="inner">
				<?php the_content();?>
				</div>
			</div>
			<div class="articles">
				<?php
				$args = array(
				    'posts_per_page' => 2
				);
				$latest_posts = new WP_Query( $args );
				if ( $latest_posts->have_posts() ) {
					echo '<ul>';
				    while ( $latest_posts->have_posts() ) {
				        $latest_posts->the_post();
								?>
										<li>
											<a href="<?php echo get_the_permalink();?>">
												<h4><?php echo get_the_title();?></h4>
												<p><?php echo get_the_excerpt();?></p>
											</a>
										</li>
								<?php
				    }
					echo '</ul>';
				}
				wp_reset_postdata();
				?>
			</div>
		</section>

		<section class="extra" style="background-image: url('<?php echo get_field('second_section_background') ?>');">
			<div class="inner">
				<?php the_field('second_section_content');?>				
			</div>
		</section>

	</div>
</main>

<?php
	endwhile;
endif;

get_footer();
?>
