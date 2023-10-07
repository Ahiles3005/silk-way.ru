<?php
get_header();
?>

	<?php get_template_part( 'template-parts/absolute-widgets'); ?>

	<?php if ( is_active_sidebar( 'index-widgets' ) ) : ?>
		<section id="index-widgets">
		<?php dynamic_sidebar( 'index-widgets' ); ?>
		</section>
	<?php endif; ?>

<?php
get_footer();
