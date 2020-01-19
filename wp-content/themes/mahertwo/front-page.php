<?php get_header(); ?>

	<section>
		<div class="container">
			<div class="showcase-container">
				<div class="showcase">
					<?php 
						if(is_active_sidebar("showcase")){
							dynamic_sidebar("showcase");
						}
					 ?>
				</div>
			</div>
			

			<div class="full-width-content">
			<?php if(have_posts()) : ?>
				<?php while(have_posts()) : the_post(); ?>
					<article class="single-post">
					<?php if(is_parent_page() || $post->post_parent > 0) : ?>
						<nav class="inner-page-menu">
							<ul>
								<li class="page_item"><a href="<?php echo esc_url(get_the_permalink(get_top_parent())); ?>">
									<?php echo get_the_title(get_top_parent()); ?>
								</a></li>
								<?php 
									$args = array(
										"child_of"	=> get_top_parent(),
										"title_li"	=> "",
									);
									wp_list_pages($args); 
								?>
							</ul>
						</nav>
					<?php endif; ?>
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


			<div class="box-container">
				<div class="box1">
					<?php 
						if(is_active_sidebar("box-1")){
							dynamic_sidebar("box-1");
						}
					 ?>
				</div>
				<div class="box2">
					<?php 
						if(is_active_sidebar("box-2")){
							dynamic_sidebar("box-2");
						}
					 ?>
				</div>
				<div class="box3">
					<?php 
						if(is_active_sidebar("box-3")){
							dynamic_sidebar("box-3");
						}
					 ?>
				</div>
				<div class="clr"></div>
			</div>

		</div>
	</section>

<?php get_footer(); ?>