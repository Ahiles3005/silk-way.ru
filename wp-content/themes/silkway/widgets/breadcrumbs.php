<?php
/*
 * Plugin Name: SilkWayBreadCrumbs
 * Plugin URI: https://hotimsite.ru
 * Description: Хлебные крошки
 * Version: 1
 * Author: Caleb El`Tropicano
 * Author URI: https://hotimsite.ru
 * License: GPLv2 or later
 */

/* Виджет SilkWayBreadCrumbs */
class silk_way_bread_crumbs_widget extends WP_Widget {

    // Установка идентификатора, заголовка, имени класса и описания для виджета.
    public function __construct() {
        $widget_options = array(
            'classname' => 'silk_way_bread_crumbs',
            'description' => 'Хлебные крошки',
        );
        parent::__construct( 'silk_way_bread_crumbs', 'Хлебные крошки', $widget_options );
    }

    // Вывод виджета в области виджетов на сайте.
    public function widget( $args, $instance ) {
		$widget_id = $args['widget_id'];

		function the_breadcrumb(){
			$pageNum = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
			$separator = '<i>&#xf054;</i>';

			if( is_front_page() ){
				if( $pageNum > 1 ) {
					echo '<a href="' . site_url() . '">Главная</a>' . $separator . $pageNum . '-я страница';
				} else {
					echo 'Вы находитесь на главной странице';
				}
			} elseif ( !is_woocommerce() ) {
				echo '<a href="' . site_url() . '">Главная</a>' . $separator;
				if( is_single() ){
					the_category(', '); echo $separator; the_title();
				} elseif ( is_page() ){
					the_title();
				} elseif ( is_category() ) {
					single_cat_title();
				} elseif( is_tag() ) {
					single_tag_title();
				} elseif ( is_day() ) {
					echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a>' . $separator;
					echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a>' . $separator;
					echo get_the_time('d');
				} elseif ( is_month() ) {
					echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a>' . $separator;
					echo get_the_time('F');
				} elseif ( is_year() ) {
					echo get_the_time('Y');
				} elseif ( is_author() ) {
					global $author;
					$userdata = get_userdata($author);
					echo 'Опубликовал(а) ' . $userdata->display_name;
				} elseif ( is_404() ) {
					echo 'Ошибка 404';
				}
				if ( $pageNum > 1 ) {
					echo ' (' . $pageNum . '-я страница)';
				} 
			} elseif ( is_woocommerce() ) {
				echo woocommerce_breadcrumb(
					array(
						'delimiter'   => $separator,
						'wrap_before' => '',
						'wrap_after'  => '',
						'before'      => '',
						'after'       => '',
						'home'        => _x( 'Home', 'breadcrumb', 'woocommerce' ),
					));
			}
		}
		?>
			<section class="breadcrumbs">
				<?php the_breadcrumb(); ?>
			</section>
		<?php
    }

    // Параметры виджета, отображаемые в области администрирования WordPress.
    public function form( $instance ) {

    }

    // Обновление настроек виджета в админ-панели.
    public function update( $new_instance, $old_instance ) {

    }

}
?>