<article id="post-<?php the_ID(); ?>" class="material">
	<?//php if(get_the_excerpt()){ echo '<blockquote>' . get_the_excerpt() . '</blockquote>'; } ?>
	<?php the_content(); ?>
</article>
