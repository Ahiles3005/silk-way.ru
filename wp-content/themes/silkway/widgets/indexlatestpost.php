<?php
/*
 * Plugin Name: SilkWayOurTeam
 * Plugin URI: https://hotimsite.ru
 * Description: Наша команда
 * Version: 1
 * Author: Caleb El`Tropicano
 * Author URI: https://hotimsite.ru
 * License: GPLv2 or later
 */

/* Виджет SilkWayOurTeam */
class silk_way_latest_post_widget extends WP_Widget {

    // Установка идентификатора, заголовка, имени класса и описания для виджета.
    public function __construct() {
        $widget_options = array(
            'classname' => 'silk_way_latest_post',
            'description' => 'Последняя статья',
        );
        parent::__construct( 'silk_way_latest_post', 'Последняя статья', $widget_options );
    }

    // Вывод виджета в области виджетов на сайте.
    public function widget( $args, $instance ) {
		$widget_id = $args['widget_id'];
		?>
        
<?php
$args = array(
	'numberposts' => 1,
	'category' => 163,
    'orderby' => 'post_date',
	'order' => 'DESC',
    'post_type' => 'post',
	'post_status' => 'publish',
);
$result = wp_get_recent_posts($args);
?>
		<section class="index-latest-post">
			<div class="section-header">
                <div class="h2">Блог</div>
            </div>
			<div class="latest-post">
                <?php foreach($result as $post):?>
                    <a href="<?=get_permalink($post['ID']);?>" title="<?=$post['post_title'];?>"><div class="h4"><?=$post['post_title'];?></div></a>
                    <div class="lp_preview"><?=$post['post_excerpt'];?></div>
                    <a href="<?=get_permalink($post['ID']);?>" class="entry-readmore">Читать дальше</a>
                <?php endforeach; ?>
			</div>
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