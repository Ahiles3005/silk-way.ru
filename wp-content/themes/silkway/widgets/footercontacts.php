<?php
/*
 * Plugin Name: SilkWayFooterContacts
 * Plugin URI: https://hotimsite.ru
 * Description: Контакты в футере
 * Version: 1
 * Author: Caleb El`Tropicano
 * Author URI: https://hotimsite.ru
 * License: GPLv2 or later
 */

/* Виджет SilkWayFooterContacts */
class silk_way_footer_contacts_widget extends WP_Widget {

    // Установка идентификатора, заголовка, имени класса и описания для виджета.
    public function __construct() {
        $widget_options = array(
            'classname' => 'silk_way_footer_contacts',
            'description' => 'Контакты в футере',
        );
        parent::__construct( 'silk_way_footer_contacts', 'Контакты в футере', $widget_options );
    }

    // Вывод виджета в области виджетов на сайте.
    public function widget( $args, $instance ) {
		$widget_id = $args['widget_id'];
		?>
		<section class="footer-contacts">
			<div class="h2">КОНТАКТЫ</div>
			<div class="tabs-switches-container">
				<?php
				$tabnum=1;
				while ( have_rows('footer_contacts', 'widget_' . $widget_id) ) : the_row();?>
				<div class="tab<?php if($tabnum==1){ echo ' active'; } ?>" tabnum="<?php echo $tabnum; ?>"><?php the_sub_field('footer_contacts_city'); ?></div>
				<?php
				$tabnum++;
				endwhile; ?>
			</div>
			<div class="tabs-content-container">
				<?php
				$tabnum=1;
				while ( have_rows('footer_contacts', 'widget_' . $widget_id) ) : the_row();?>
				<div class="tab-content<?php if($tabnum==1){ echo ' active'; } ?>" tabnum="<?php echo $tabnum; ?>">
					<?php the_sub_field('footer_contacts_adres'); ?>
				</div>
				<?php
				$tabnum++;
				endwhile; ?>
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