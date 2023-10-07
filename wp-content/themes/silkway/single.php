<?php
get_header();
?>

	<?php get_template_part( 'template-parts/absolute-widgets');

	get_template_part( 'template-parts/before-article-widgets');?>

	<?php if (have_posts()){
		echo '<div class="article-header">';
		echo the_title('<h1>', '</h1>');
		echo '</div>';
	}?>

	<section class="aside-container">

		<?php get_template_part( 'template-parts/leftsidebar-widgets'); ?>

		<aside class="center">	
		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', 'single' );
			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Предыдущая:', 'silkway' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Следующая:', 'silkway' ) . '</span> <span class="nav-title">%title</span>',
				)
			);
		endwhile;
		?>
		</aside>

	</section>

	<?php get_template_part( 'template-parts/after-article-widgets'); ?>

<?php
get_footer();
