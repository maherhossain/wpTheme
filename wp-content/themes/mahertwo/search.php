<?php get_header(); ?>

	<section>
		<div class="container">
			
			<div class="main-content">
				<h2>Search Result: 
					<?php global $wp_query; echo $wp_query->found_posts ?>
					 results found for 
					 <code>'<?php echo get_search_query();?>'</code> 
				</h2>

			<?php if(have_posts()) : ?>
				<?php while(have_posts()) : the_post(); ?>
					<article class="single-post">
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<div class="post-content"><?php the_excerpt(); ?></div>
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