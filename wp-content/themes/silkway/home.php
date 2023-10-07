<?php
get_header();
?>	
    
    <?php if ( is_active_sidebar( 'index-slider' ) ) : ?>
		<section id="index-slider">
			<?php dynamic_sidebar( 'index-slider' ); ?>
		</section>
	<?php endif; ?>
	<?php if ( is_active_sidebar( 'index-widgets' ) ) : ?>
		<section id="index-widgets" class="index_var">
		    <?php dynamic_sidebar( 'index-widgets' ); ?>
		</section>
	<?php endif; ?>

<?php get_template_part( 'template-parts/absolute-widgets'); ?>

<?php 
get_footer();