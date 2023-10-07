<?php
get_header();
?>

	<?php get_template_part( 'template-parts/absolute-widgets');

	get_template_part( 'template-parts/before-article-widgets');?>

	<?php if ( have_posts() ) : ?>
	<div class="blog-category-header">
		<?php
			the_archive_title( '<h1>', '</h1>' );
		?>
	</div>
	<?php endif; ?>

	<section class="aside-container">

		<?php get_template_part( 'template-parts/leftsidebar-widgets'); ?>

		<aside class="center blog">	
		<?php if ( have_posts() ) : ?>
			<?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', 'excerpt' );
			endwhile;
			the_posts_pagination(
				array(
					'prev_text'    => __('<'),
					'next_text'    => __('>'),
				)
			);
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif;
		?>
		</aside>
	</section>
	<?php get_template_part( 'template-parts/after-article-widgets'); ?>

<?php
get_footer();
