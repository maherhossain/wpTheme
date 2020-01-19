<?php if(is_search()) :?>
	<article class="single-post">
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<div class="post-content"><?php the_excerpt(); ?></div>
	</article>
<?php elseif(is_author()) : ?>
	<article class="single-post">
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<div class="meta">
			Created by <span><b><?php the_author(); ?></b></span> 
			on <span><?php the_time("F j, Y"); ?></span>
			Category <span>
				<?php
					$categories = get_the_category();
					$separator = ", ";
					$output = "";

					foreach ($categories as $single) {
						$output .= '<a href="'. get_category_link($single->term_id) .'">'. $single->cat_name .'</a>' . $separator;
					}
					echo $output;

				?>
			</span>
			<img src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>" />
		</div>
		<div class="post-content"><?php the_excerpt(); ?></div>
		<a href="<?php the_permalink(); ?>" class="btn"> View Details </a>
	</article>
<?php elseif(is_category()) : ?>
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
<?php else : ?>
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
						$output .= '<a href="'. get_category_link($single->term_id) .'">'. $single->cat_name .'</a>' . $separator;
					}
					echo $output;

				?>
			</span>
		</div>
		<div class="feature-image">
			<?php the_post_thumbnail(); ?>
		</div>
		
		<?php if(is_single()) : ?>
			<div class="post-content"><?php the_content(); ?></div>
		<?php else : ?>
				<div class="post-content"><?php the_excerpt(); ?></div>
				<a href="<?php the_permalink(); ?>" class="btn"> View Details </a>
		<?php endif; ?>
	</article>
<?php endif; ?>


