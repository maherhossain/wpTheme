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
	<div class="post-content"><?php the_content(); ?></div>

</article>