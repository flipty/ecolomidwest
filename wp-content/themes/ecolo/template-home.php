<?php

/* Template Name: Home Page */

get_header();

if(have_posts()):
	while(have_posts()): the_post();
?>

<main>
	<div class="container">

<?php the_content();?>

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
</main>

<?php
	endwhile;
endif;

get_footer();
?>
