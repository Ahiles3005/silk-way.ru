<?php if ( is_active_sidebar( 'before-article-widgets' ) ) : ?>
	<section class="before-article">
		<?php dynamic_sidebar( 'before-article-widgets' ); ?>
	</section>
<?php endif; ?>