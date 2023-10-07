<?php
get_header();
?>

	<?php get_template_part( 'template-parts/absolute-widgets');

	get_template_part( 'template-parts/before-article-widgets');?>

	<?php if ( have_posts() ) : ?>
		<div class="blog-category-header">
			<h1>Результаты поиска для: "<?php echo get_search_query(); ?>"</h1>
		</div>
	<?php endif; ?>	

	<section class="aside-container">

		<?//php get_template_part( 'template-parts/leftsidebar-widgets'); ?>

		<aside class="center search-result">
		<?  
		$page = (get_query_var('paged')) ? get_query_var('paged') : 1;
		/*$args = array (
			//'post_type' => array('product','post', 'product_variation'),
			//'orderby' => 'post_type', 
            //'order' => 'DESC',
			'paged'=>$page,
			//'search_prod_title' => get_search_query(),
         );
			
		//add_filter( 'posts_where', 'title_filter', 10, 2 );
        $query = new WP_Query($args);
        //remove_filter( 'posts_where', 'title_filter', 10, 2 );
       
        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post(); 
                    get_template_part( 'template-parts/content', 'search' );	
            endwhile;
			the_posts_pagination(
				array(
					'prev_text'    => __('<'),
					'next_text'    => __('>'),
				)
			);
        else :
			get_template_part( 'template-parts/content', 'none' );
		endif;*/
		?>	
		<?php if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', 'search' );
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
