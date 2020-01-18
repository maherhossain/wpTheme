<?php get_header(); ?>

	<section>
		<div class="container">
			
			<div class="main-content">
			<?php if(have_posts()) : ?>
				<?php while(have_posts()) : the_post(); ?>
					<article class="single-post">
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<div class="meta">
							Created by <span><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></span> 
							on <span><?php the_time("F j, Y"); ?></span>
							Category <span>
								<?php
									$categories = get_the_category();
									$separator = ", ";
									$output = "";

									foreach ($categories as $single) {
										$output .= $single->cat_name .$separator;
									}
									echo "<b>" . $output . "</b>";

								?>
							</span>
						</div>
						<div class="post-content"><?php the_excerpt(); ?></div>
						<a href="<?php the_permalink(); ?>" class="btn"> View Details </a>
					</article>
				<?php endwhile; ?>
			<?php else : ?>
				<?php echo wpautop("No posts Found"); ?>
			<?php endif; ?>
			</div>
			
			<!-- Sidebar area -->
			<?php get_sidebar(); ?>


			<div class="clr"></div>

		</div>
	</section>

<?php get_footer(); ?>