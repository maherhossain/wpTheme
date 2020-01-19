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

					<?php get_template_part("templates/content", get_post_format()); ?>
					
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