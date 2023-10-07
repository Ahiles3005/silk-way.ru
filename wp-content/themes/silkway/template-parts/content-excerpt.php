<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if(has_post_thumbnail()){
		silkway_post_thumbnail();
	} else {
		echo '<a href="' . esc_url(get_permalink()) . '" class="post-thumbnail"><img src="' . get_template_directory_uri() . '/img/blog_empty_thumb.jpg"></a>';
	}?>
	<?php
	the_title( sprintf( '<a href="%s" class="entry-title">', esc_url( get_permalink() ) ), '</a>' );
	?>
	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div>
	<a href="<?php echo esc_url(get_permalink()); ?>" class="entry-readmore">Читать дальше</a>
</article>