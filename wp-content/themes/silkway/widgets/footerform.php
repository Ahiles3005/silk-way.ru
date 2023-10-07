<?php
/*
 * Plugin Name: SilkWayFooterForm
 * Plugin URI: https://hotimsite.ru
 * Description: Форма связи в футере
 * Version: 1
 * Author: Caleb El`Tropicano
 * Author URI: https://hotimsite.ru
 * License: GPLv2 or later
 */

/* Виджет SilkWayFooterForm */
class silk_way_footer_form_widget extends WP_Widget {

    // Установка идентификатора, заголовка, имени класса и описания для виджета.
    public function __construct() {
        $widget_options = array(
            'classname' => 'silk_way_footer_form',
            'description' => 'Форма связи в футере',
        );
        parent::__construct( 'silk_way_footer_form', 'Форма связи в футере', $widget_options );
    }

    // Вывод виджета в области виджетов на сайте.
    public function widget( $args, $instance ) {
		$widget_id = $args['widget_id'];
		?>
		<section class="footer-form">
			<div class="h2">СВЯЖИТЕСЬ С НАМИ</div>
            <div class="h3">ЗАДАЙТЕ НАМ ВОПРОС</div>
			<?php 
				//echo do_shortcode( '[gravityform id=1 ajax=true]' );
				gravity_form( 1, false, false, false, null, true );
			?>
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