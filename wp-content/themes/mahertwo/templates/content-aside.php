<article class="single-post">
	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	<div class="meta">
		<?php the_author(); ?>@<?php the_date(); ?>
	</div>
	<div class="feature-image">
		<?php if(has_post_thumbnail()){the_post_thumbnail();} ?>
	</div>
	<div class="post-content"><i><?php the_content(); ?></i></div>
</article>