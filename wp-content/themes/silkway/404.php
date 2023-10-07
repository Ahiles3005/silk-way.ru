<?php
get_header();
?>

	<?php get_template_part( 'template-parts/absolute-widgets');

	get_template_part( 'template-parts/before-article-widgets');?>
	<div class="article-header">
		<h1>Страница не существует</h1>
	</div>

	<section class="aside-container">

		<?php get_template_part( 'template-parts/leftsidebar-widgets'); ?>

		<aside class="center">	
			<p>Запрашиваемая вами страница больше недоступна на нашем сайте или была удалена.</p>			
		</aside>

	</section>

	<?php get_template_part( 'template-parts/after-article-widgets'); ?>

<?php
get_footer();
