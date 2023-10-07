<?php
/*
 * Plugin Name: SilkWayHeaderSearch
 * Plugin URI: https://hotimsite.ru
 * Description: Поиск в хидере
 * Version: 1
 * Author: Caleb El`Tropicano
 * Author URI: https://hotimsite.ru
 * License: GPLv2 or later
 */

/* Виджет SilkWayHeaderSearch */
class silk_way_header_search_widget extends WP_Widget {

    // Установка идентификатора, заголовка, имени класса и описания для виджета.
    public function __construct() {
        $widget_options = array(
            'classname' => 'silk_way_header_search',
            'description' => 'Поиск в хидере',
        );
        parent::__construct( 'silk_way_header_search', 'Поиск в хидере', $widget_options );
    }

    // Вывод виджета в области виджетов на сайте.
    public function widget( $args, $instance ) {
		$widget_id = $args['widget_id'];
		?>
            <div class="header-search">
                <!--<form role="search" method="get" class="search-form" action="/">
                    <input type="search" class="search-field" placeholder="Поиск" value="<?=$_GET['s'];?>" name="s" required>
                    <button type="submit" class="search-submit">
                        <svg viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M15.664 15.7067C15.5676 15.8032 15.4531 15.8798 15.327 15.9321C15.201 15.9843 15.0659 16.0112 14.9295 16.0112C14.793 16.0112 14.6579 15.9843 14.5319 15.9321C14.4059 15.8798 14.2914 15.8032 14.195 15.7067L11.105 12.6167C9.83765 13.544 8.29473 14.017 6.72543 13.9593C5.15613 13.9016 3.65211 13.3165 2.45633 12.2986C1.26054 11.2807 0.442804 9.88944 0.135235 8.34949C-0.172334 6.80955 0.0482193 5.21089 0.761257 3.81175C1.4743 2.41261 2.63818 1.2947 4.06491 0.638596C5.49164 -0.017504 7.09789 -0.173476 8.62419 0.195875C10.1505 0.565225 11.5077 1.43833 12.4766 2.67415C13.4455 3.90997 13.9695 5.43633 13.964 7.00668C13.9604 8.50155 13.4743 9.95531 12.578 11.1517L15.668 14.2417C15.8612 14.4367 15.9693 14.7004 15.9685 14.975C15.9678 15.2496 15.8583 15.5127 15.664 15.7067ZM6.96397 2.00668C5.97506 2.00668 5.00837 2.29992 4.18612 2.84933C3.36388 3.39874 2.72301 4.17963 2.34457 5.09326C1.96613 6.00689 1.86711 7.01223 2.06004 7.98213C2.25297 8.95204 2.72917 9.84295 3.42843 10.5422C4.1277 11.2415 5.01862 11.7177 5.98852 11.9106C6.95843 12.1035 7.96376 12.0045 8.87739 11.6261C9.79102 11.2476 10.5719 10.6068 11.1213 9.78453C11.6707 8.96229 11.964 7.99559 11.964 7.00668C11.964 5.6806 11.4372 4.40883 10.4995 3.47115C9.56183 2.53346 8.29005 2.00668 6.96397 2.00668Z"/>
                        </svg>
                    </button>
                </form>-->
				<?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
            </div>
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