<?php if ( is_active_sidebar( 'after-article-widgets' ) ) : ?>
	<section class="after-article">
		<?php dynamic_sidebar( 'after-article-widgets' ); ?>
	</section>
<?php endif; ?>