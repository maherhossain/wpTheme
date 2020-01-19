<?php
/**
Template Name: Box Template


**/
?>
<?php get_header(); ?>

	<section style="background: #666">
		<div class="container">
			
			<div class="main-content">
			<?php if(have_posts()) : ?>
				<?php while(have_posts()) : the_post(); ?>
					<article class="single-post">
						<h3><?php the_title(); ?></h3>
						
						<div class="feature-image">
							<?php the_post_thumbnail(); ?>
						</div>
						<div class="post-content"><?php the_content(); ?></div>
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