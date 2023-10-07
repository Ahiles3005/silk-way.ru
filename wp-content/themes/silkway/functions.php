<?php
if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}

// require get_template_directory() . '/inc/ajax.php';

add_action("product_cat_edit_form_fields", 'custom_category_meta');
function custom_category_meta( $term ) {
    ?>
        <tr class="form-field">
            <th scope="row" valign="top"><label>Заголовок h1</label></th>
            <td>
                <input type="text" name="silk_custom[h1]" value="<?php echo esc_attr( get_term_meta( $term->term_id, 'h1', 1 ) ) ?>"><br />
                <p class="description">Заголовок страницы</p>
            </td>
        </tr>
    <?php
}
add_action('edited_product_cat', 'custom_save_meta_product_cat');
add_action('create_product_cat', 'custom_save_meta_product_cat');
function custom_save_meta_product_cat($term_id){
    if (!isset($_POST['silk_custom']))
        return;
    $custom = array_map('trim', $_POST['silk_custom']);
    foreach($custom as $key => $value){
        if(empty($value)){
            delete_term_meta($term_id, $key);
            continue;
        }
        update_term_meta($term_id, $key, $value);
    }
    return $term_id;
}
if (strpos($_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'], '/product-category/')) {
	add_filter('woocommerce_page_title', 'custom_product_cat_h1', 10, 2 );
}
function custom_product_cat_h1() {
    $pch = get_term_meta(get_queried_object()->term_id, 'h1', true);
    if (empty($pch)) {
        echo get_queried_object()->name;
    } else {
		echo $pch;
	}
}



if ( ! function_exists( 'silkway_setup' ) ) :
	function silkway_setup() {
		load_theme_textdomain( 'silkway', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'silkway' ),
			)
		);
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);
		add_theme_support(
			'custom-background',
			apply_filters(
				'silkway_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);
		add_theme_support( 'customize-selective-refresh-widgets' );
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'silkway_setup' );

function silkway_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'silkway_content_width', 640 );
}
add_action( 'after_setup_theme', 'silkway_content_width', 0 );

function silkway_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Фиксированные виджеты', 'silkway' ),
			'id'            => 'absolute-widgets',
			'description'   => esc_html__( 'Фиксированные виджеты', 'silkway' ),
			'before_widget' => '',
			'after_widget'	=> ''
		)
	);

    register_sidebar(
        array(
            'name'          => esc_html__( 'Виджеты в хидере (top)', 'silkway' ),
            'id'            => 'header-widgets-top',
            'description'   => esc_html__( 'Виджеты в хидере (top)', 'silkway' ),
            'before_widget' => '',
            'after_widget'	=> ''
        )
    );
    register_sidebar(
        array(
            'name'          => esc_html__( 'Виджеты в хидере (middle)', 'silkway' ),
            'id'            => 'header-widgets-middle',
            'description'   => esc_html__( 'Виджеты в хидере (middle)', 'silkway' ),
            'before_widget' => '',
            'after_widget'	=> ''
        )
    );
    register_sidebar(
        array(
            'name'          => esc_html__( 'Виджеты в хидере (bottom)', 'silkway' ),
            'id'            => 'header-widgets-bottom',
            'description'   => esc_html__( 'Виджеты в хидере (bottom)', 'silkway' ),
            'before_widget' => '',
            'after_widget'	=> ''
        )
    );

	register_sidebar(
		array(
			'name'          => esc_html__( 'Виджеты перед контентом', 'silkway' ),
			'id'            => 'before-article-widgets',
			'description'   => esc_html__( 'Виджеты перед контентом', 'silkway' ),
			'before_widget' => '',
			'after_widget'	=> ''
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Виджеты перед магазином', 'silkway' ),
			'id'            => 'before-woocommerce-widgets',
			'description'   => esc_html__( 'Виджеты перед магазином', 'silkway' ),
			'before_widget' => '',
			'after_widget'	=> ''
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Слайдер на главной', 'silkway' ),
			'id'            => 'index-slider',
			'description'   => esc_html__( 'Слайдер на главной', 'silkway' ),
			'before_widget' => '',
			'after_widget'	=> ''
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Виджеты на главной', 'silkway' ),
			'id'            => 'index-widgets',
			'description'   => esc_html__( 'Виджеты на главной', 'silkway' ),
			'before_widget' => '',
			'after_widget'	=> ''
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Боковые виджеты слева', 'silkway' ),
			'id'            => 'leftsidebar-widgets',
			'description'   => esc_html__( 'Боковые виджеты слева', 'silkway' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'	=> '</section>'
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Виджеты после контента', 'silkway' ),
			'id'            => 'after-article-widgets',
			'description'   => esc_html__( 'Виджеты после контента', 'silkway' ),
			'before_widget' => '',
			'after_widget'	=> ''
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Виджеты в футере', 'silkway' ),
			'id'            => 'footer-widgets',
			'description'   => esc_html__( 'Виджеты в футере', 'silkway' ),
			'before_widget' => '',
			'after_widget'	=> ''
		)
	);

}
add_action( 'widgets_init', 'silkway_widgets_init' );

function silkway_scripts() {
	wp_enqueue_style('swiper', get_stylesheet_directory_uri() . '/css/swiper.min.css');
	wp_enqueue_style('woocommerce', get_stylesheet_directory_uri() . '/css/woocommerce.css');
	wp_enqueue_style('fancybox', get_stylesheet_directory_uri() . '/css/jquery.fancybox.min.css');
	wp_enqueue_style('woocommerce-gallery', get_site_url() . '/wp-content/plugins/woo-variation-gallery/assets/css/frontend.min.css');
//	$silkway_style = get_template_directory_uri() . '/css/silkway.css?v=Supe200999990000000995559999';
//	$lastedit = filemtime($silkway_style);
//	wp_enqueue_style('silkway', $silkway_style, array(), $lastedit);
    wp_enqueue_style('silkway', get_stylesheet_directory_uri() . '/css/silkway.css?v=290722-2');
	wp_enqueue_script('jquery', get_stylesheet_directory_uri() . '/js/jquery-3.5.1.min.js', '', '1.0', false);
	wp_enqueue_script('swiper', get_stylesheet_directory_uri() . '/js/swiper.min.js', '', '1.0', false);
	wp_enqueue_script('fancybox', get_stylesheet_directory_uri() . '/js/jquery.fancybox.min.js', '', '1.0', false);
	wp_enqueue_script('sitescripts', get_stylesheet_directory_uri() . '/js/sitescripts.js', '', '1.0', false);
    //wp_enqueue_script( 'jq.inputmask', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js','','',false);
	gravity_form_enqueue_scripts(1, true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'silkway_scripts' );

function admin_fix() {
	print '<style>
		.editwidget{width:100% !important;}
	</style>';
}
add_action('admin_head', 'admin_fix');

require get_template_directory() . '/inc/custom-header.php';

require get_template_directory() . '/inc/template-tags.php';

require get_template_directory() . '/inc/template-functions.php';

/*if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}*/

//Подключаем файлы своих виджетов
require get_template_directory() . '/widgets/grayheadermenu.php';
require get_template_directory() . '/widgets/headerlogo.php';
require get_template_directory() . '/widgets/headermenu.php';
require get_template_directory() . '/widgets/headercartnav.php';
require get_template_directory() . '/widgets/indexFirstDisplay.php';
require get_template_directory() . '/widgets/indexmarquiztest.php';
require get_template_directory() . '/widgets/indextilda.php';
require get_template_directory() . '/widgets/indexfamouspeople.php';
require get_template_directory() . '/widgets/indexproductadvertising.php';
require get_template_directory() . '/widgets/indexadvantages.php';
require get_template_directory() . '/widgets/indexadvantages2.php';
require get_template_directory() . '/widgets/indexforwhom.php';
require get_template_directory() . '/widgets/indexstock.php';
require get_template_directory() . '/widgets/indexstockcounter.php';
require get_template_directory() . '/widgets/indexcomments.php';
require get_template_directory() . '/widgets/indexfaq.php';
require get_template_directory() . '/widgets/indexrequestconsultation.php';
require get_template_directory() . '/widgets/indexrequestconsultation2.php';
require get_template_directory() . '/widgets/indexourteam.php';
require get_template_directory() . '/widgets/indexlatestpost.php';
require get_template_directory() . '/widgets/indexsertificates.php';
require get_template_directory() . '/widgets/footercontacts.php';
require get_template_directory() . '/widgets/footerform.php';
require get_template_directory() . '/widgets/breadcrumbs.php';
require get_template_directory() . '/widgets/headersearch.php';
require get_template_directory() . '/widgets/headermobilemenu.php';
require get_template_directory() . '/widgets/footercopiright.php';
require get_template_directory() . '/widgets/chatbitrix.php';
require get_template_directory() . '/widgets/metrics.php';
require get_template_directory() . '/widgets/indextags.php';
require get_template_directory() . '/widgets/footerlinks.php';
require get_template_directory() . '/widgets/indexgetconsult.php';

function silkway_load_widgets() {
	register_widget( 'silk_way_gray_header_menu_widget' );
	register_widget( 'silk_way_header_logo_widget' );
	register_widget( 'silk_way_header_menu_widget' );
	register_widget( 'silk_way_header_cart_widget' );
	register_widget( 'silk_way_marquiztest_widget' );
	register_widget( 'silk_way_tilda_widget' );
	register_widget( 'silk_way_index_first_display_widget' );
	register_widget( 'silk_way_famous_people_widget' );
	register_widget( 'silk_way_indexproductadvertising_widget' );
	register_widget( 'silk_way_index_advantages_widget' );
	register_widget( 'silk_way_index_advantages2_widget' );
	register_widget( 'silk_way_index_forwhom_widget' );
	register_widget( 'silk_way_index_stock_widget' );
	register_widget( 'silk_way_index_stock_counter_widget' );
	register_widget( 'silk_way_index_comments_widget' );
	register_widget( 'silk_way_FAQ_widget' );
	register_widget( 'silk_way_index_consultation_widget' );
	register_widget( 'silk_way_index_consultation2_widget' );
	register_widget( 'silk_way_our_team_widget' );
	register_widget( 'silk_way_latest_post_widget' );
	register_widget( 'silk_way_sertificates_widget' );
	register_widget( 'silk_way_footer_contacts_widget' );
	register_widget( 'silk_way_footer_form_widget' );
	register_widget( 'silk_way_bread_crumbs_widget' );
	register_widget( 'silk_way_header_search_widget' );
	register_widget( 'silk_way_mobile_menu_widget' );
	register_widget( 'silk_way_footer_copyright_widget' );
	register_widget( 'silk_way_chat_bitrix_widget' );
	register_widget( 'silk_way_metrics_widget' );
	register_widget( 'silk_way_index_tags_widget' );
	register_widget( 'silk_way_footer_links_widget' );
    register_widget( 'silk_way_index_get_consultation_widget' );
}
add_action( 'widgets_init', 'silkway_load_widgets' );

//Отключаем эмоджи
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');


//Подлключаем файл с настройками магазина в шаблоне
if ( class_exists( 'WooCommerce' ) ) {
	require_once(get_template_directory() . '/woocommerce_add.php');
}

add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
function my_navigation_template( $template, $class ){
 return '
 <div class="%1$s" role="navigation">
  <div class="nav-links">%3$s</div>
 </div>    
 ';
}

add_action( 'woocommerce_thankyou', 'my_custom_tracking' );

function my_custom_tracking( $order_id ) {

  // Получаем информации по заказу

    $order = wc_get_order( $order_id );

	$order_data = $order->get_data();
  // Получаем базовую информация по заказу

    $coupon_details = $order->get_coupon_codes();

	$coupon_dratils = implode('<br>Применен купон',$coupon_details);
	$order_id = $order_data['id'];

  $order_currency = $order_data['currency'];
  $order_comments = $order_data['comments'];
  $order_payment_method_title = $order_data['payment_method_title'];

  $order_shipping_totale = $order_data['shipping_total'];

  $order_total = $order_data['total'];

  $order_base_info = "<hr><strong>Общая информация по заказу</strong><br>

  ID заказа: $order_id<br>

  Валюта заказа: $order_currency<br>

  Метода оплаты: $order_payment_method_title<br>

  Стоимость доставки: $order_shipping_totale<br>

  Итого с доставкой: $order_total<br>";

  // Получаем информация по клиенту

  $order_customer_id = $order_data['customer_id'];

  $order_customer_ip_address = $order_data['customer_ip_address'];

$order_billing_first_name = $order_data['billing']['first_name'];

  $order_billing_last_name = $order_data['billing']['last_name'];

 $order_billing_email = $order_data['billing']['email'];

 $order_billing_phone = $order_data['billing']['phone'];
 $trans = array("-" => "", ")" => "", "(" => "");
 $tempo = strtr($order_billing_phone, $trans);
 $clean_number = substr($tempo, -10);
 $queryUrl2 = 'https://silk-way.bitrix24.ru/rest/3099/1q3h2h0riklqn77m/crm.duplicate.findbycomm.json?&entity_type=CONTACT&type=PHONE&values[]=+7'.$clean_number.',8'.$clean_number;

  $curl2 = curl_init();

  curl_setopt_array($curl2, array(

    CURLOPT_SSL_VERIFYPEER => 0,

    CURLOPT_POST => 1,

    CURLOPT_HEADER => 0,

    CURLOPT_RETURNTRANSFER => 1,

    CURLOPT_URL => $queryUrl2,

    ));

  $result2 = curl_exec($curl2);

  curl_close($curl2);
  $contact_id2 = json_decode($result2, true);

  $order_client_info = "<hr><strong>Информация по клиенту</strong><br>

  ID клиента = $order_customer_id<br>

  IP адрес клиента: $order_customer_ip_address<br>

  Имя клиента: $order_billing_first_name<br>

  Фамилия клиента: $order_billing_last_name<br>

  Email клиента: $order_billing_email<br>

  Телефон клиента: $order_billing_phone<br>";

  // Получаем информацию по доставке

  $order_billing_address_1 = $order_data['billing']['address_1'];

  $order_billing_address_2 = $order_data['billing']['address_2'];

  $order_billing_city = $order_data['billing']['city'];

  $order_billing_state = $order_data['billing']['state'];

  $order_billing_postcode = $order_data['billing']['postcode'];

  $order_billing_country = $order_data['billing']['country'];

  $order_billing_info = "<hr><strong>Информация по доставке</strong><br>

  Страна доставки: $order_billing_state<br>

  Город доставки: $order_billing_city<br>

  Индекс: $order_billing_postcode<br>

  Адрес доставки 1: $order_billing_address_1<br>

  Адрес доставки 2: $order_billing_address_2<br>";

  // Получаем информации по товару

  $order->get_total();

  $line_items = $order->get_items();

  foreach ( $line_items as $item ) {

    $product = $order->get_product_from_item( $item );

	$sku = $product->get_sku(); // артикул товара

    $id = $product->get_id(); // id товара

    $name = $product->get_name(); // название товара

    $description = $product->get_description(); // описание товара

    $stock_quantity = $product->get_stock_quantity(); // кол-во товара на складе

    $qty = $item['qty']; // количество товара, которое заказали

    $total = $order->get_line_total( $item, true, true ); // стоимость всех товаров, которые заказали, но без учета доставки

    $product_info[] = "<hr><strong>Информация о товаре</strong><br>

    Название товара: $name<br>

    Артикул: $sku<br>

    Описание: $description<br>

    Сумма заказа (без учета доставки): $total;";

  }

    $product_base_infо = implode('<br>', $product_info);

    $subject = "Заказ с сайта № $order_id";

  // Формируем URL в переменной $queryUrl для отправки сообщений в лиды Битрикс24, где

  // указываем [ваше_название], [идентификатор_пользователя] и [код_вебхука]

    $queryUrl = 'https://silk-way.bitrix24.ru/rest/3099/1ckun97d9kofyy4i/crm.deal.add.json';
	$contact_id = array_shift($contact_id2['result']['CONTACT']);
	if (!$contact_id)
	{
		$queryUrl3 ='https://silk-way.bitrix24.ru/rest/3099/onflphagbwce6joc/crm.contact.add.json';
		$queryData1 = http_build_query(
	  array(

      'fields' => array(

      "NAME" => $order_billing_first_name,
      "OPENED" => "Y",
      "ASSIGNED_BY_ID" => 1,
      "TYPE_ID" => "CLIENT",
      "SOURCE_ID" => "SELF",
      "PHONE" => [ array(
	  "VALUE"=> "+7".$clean_number,
   	  "VALUE_TYPE" => "MOBILE" )] ,
	  "EMAIL" =>  [array(
		  "VALUE" => $order_billing_email
	  )]
	  ),
	  ),

    //'params' => array(«REGISTER_SONET_EVENT» => «Y»)

  );

	$curl3 = curl_init();

    curl_setopt_array($curl3, array(

    CURLOPT_SSL_VERIFYPEER => 0,

    CURLOPT_POST => 1,

    CURLOPT_HEADER => 0,

    CURLOPT_RETURNTRANSFER => 1,

    CURLOPT_URL => $queryUrl3,

    CURLOPT_POSTFIELDS => $queryData1,

  ));

  $result3 = curl_exec($curl3);

   $temp_id = json_decode($result3, true);
		$contact_id = array_shift($temp_id);
	curl_close($curl3);
}

  // Формируем параметры для создания сделки в переменной $queryData

  $queryData = http_build_query(
	  array(

      'fields' => array(

      'TITLE' => $subject,

	  'CATEGORY_ID' => '17',

	  'ASSIGNED_BY_ID' => '1',

	  'COMMENTS' => "$order_payment_method_title $product_base_infо $order_billing_info $order_client_info",

	  'UF_CRM_1640132167' => $coupon_dratils,

      'OPPORTUNITY' => $order_total,

	  'CURRENCY_ID' => $order_currency,

	  'CONTACT_ID'	=> $contact_id,

	  ),

    //'params' => array(«REGISTER_SONET_EVENT» => «Y»)

  ));

  // Обращаемся к Битрикс24 при помощи функции curl_exec

  $curl = curl_init();

  curl_setopt_array($curl, array(

    CURLOPT_SSL_VERIFYPEER => 0,

    CURLOPT_POST => 1,

    CURLOPT_HEADER => 0,

    CURLOPT_RETURNTRANSFER => 1,

    CURLOPT_URL => $queryUrl,

    CURLOPT_POSTFIELDS => $queryData,

  ));

  $result = curl_exec($curl);


  curl_close($curl);

  $result = json_decode($result, 1);

  if (array_key_exists('error', $result)) echo "Ошибка при сохранении заказа. Пожалуйста, обратитесь к нашим менеджерам: ".$result['error_description']."<br>";

}

function footercopyrightfilter_callback( $menu_html ) {
    $site_link = 'https://sales-generator.ru';

    if( strpos($menu_html, 'href="' . $site_link . '"') !== false) {
        $menu_html = str_replace('href="' . $site_link . '"', 'class="sales_generator_link" href="' . $site_link . '" target=_blank', $menu_html);
    }

    return $menu_html;
}
add_filter('footercopyrightfilter', 'footercopyrightfilter_callback');


function hooks_list( $hook_name = '' ){
    global $wp_filter;
    $wp_hooks = $wp_filter;

    // для версии 4.4 - переделаем в массив
    if( is_object( reset( $wp_hooks ) ) ){
        foreach( $wp_hooks as & $object ) $object = $object->callbacks;
        unset( $object );
    }

    if( $hook_name ){
        $hooks[ $hook_name ] = @ $wp_hooks[ $hook_name ];

        if( ! is_array($hooks[$hook_name]) ){
            trigger_error( "Nothing found for '$hook_name' hook", E_USER_WARNING );
            return;
        }
    }
    else {
        $hooks = $wp_hooks;
        ksort( $wp_hooks );
    }

    $out = '';
    foreach( $hooks as $name => $funcs_data ){
        ksort( $funcs_data );
        $out .= "\nхук\t<b>$name</b>\n";
        foreach( $funcs_data as $priority => $functions ){
            $out .= "$priority";
            foreach( array_keys($functions) as $func_name ) $out .= "\t$func_name\n";
        }
    }

    echo '<'.'pre>'. $out .'</pre'.'>';
}

function prefix_filter_canonical_example( $canonical ) {
    $base = array(
        '/category/blog/article/',
        '/category/blog/',
        '/oblast-korrektsii/bedra/',
        '/oblast-korrektsii/bra/',
        '/oblast-korrektsii/osanka/',
        '/oblast-korrektsii/taliya/',
        '/oblast-korrektsii/yagoditsy/',
        '/oblast-korrektsii/zhivot/',
        '/product-category/antitsellyulitnoye-belye/',
        '/product-category/modeliruyushcheye-belye/',
        '/product-category/po-funktsionalu/bolshikh-razmerov/',
        '/product-category/po-funktsionalu/dly-pokhudeniya/',
        '/product-category/po-funktsionalu/ortopedicheskiy-effekt/',
        '/product-category/po-funktsionalu/pod-platye/',
        '/product-category/po-funktsionalu/posle-rodov/',
        '/product-category/po-funktsionalu/s-turmalinom/',
        '/product-category/po-funktsionalu/',
        '/product-category/po-naznacheniyu/bodi/',
        '/product-category/po-naznacheniyu/gratsii/',
        '/product-category/po-naznacheniyu/kombidress/',
        '/product-category/po-naznacheniyu/nizhneye-belye/',
        '/product-category/po-naznacheniyu/',
        '/product-category/korrektiruyushcheye-belye/',
        '/shop/',
        '/stepen-korrektsii/srednyaya/'
    );
    foreach ($base as $item):
        if (strpos($_SERVER['REQUEST_URI'], $item) !== false):
            if (strpos($_SERVER['REQUEST_URI'], '/page/') !== false):
                $canonical = 'https://silk-way.ru'. $item;
            else:
                $canonical = false;
            endif;
            break;
        endif;
    endforeach;
	if ($_SERVER['REQUEST_URI'] == '/'):
       $canonical = 'https://silk-way.ru';
    endif;
    return $canonical;
}
add_filter( 'wpseo_canonical', 'prefix_filter_canonical_example', 20 );

function remove_widget_title( $widget_title ) {
    if ( substr ( $widget_title, 0, 1 ) == '!' )
        return;
    else
        return ( $widget_title );
}
add_filter( 'widget_title', 'remove_widget_title' );

// Minimal allowed tags for wp_kses
function minimal_allowed_tags() {
    return array(
        'b' => array(
            'style' => array(),
        ),
        'i' => array(
            'style' => array(),
        ),
        'strong' => array(
            'style' => array(),
        ),
        'span' => array(
            'style' => array(),
        ),
        'a' => array(
            'href' => array(),
            'alt' => array(),
            'class' => array(),
            'id' => array(),
            'style' => array(),
        ),
        'br' => array(
            'class' => array(),
            'style' => array(),
        ),
    );
}

// External allowed tags for wp_kses
function external_allowed_tags() {
    return array(
        'h1' => array(
            'class' => array(),
            'id' => array(),
            'style' => array(),
        ),
        'h2' => array(
            'class' => array(),
            'id' => array(),
            'style' => array(),
        ),
        'h3' => array(
            'class' => array(),
            'id' => array(),
            'style' => array(),
        ),
        'h4' => array(
            'class' => array(),
            'id' => array(),
            'style' => array(),
        ),
        'h5' => array(
            'class' => array(),
            'id' => array(),
            'style' => array(),
        ),
        'h6' => array(
            'class' => array(),
            'id' => array(),
            'style' => array(),
        ),
        'div' => array(
            'class' => array(),
            'id' => array(),
            'style' => array(),
        ),
        'ul' => array(
            'class' => array(),
            'id' => array(),
            'style' => array(),
        ),
        'li' => array(
            'class' => array(),
            'id' => array(),
            'style' => array(),
        ),
        'b' => array(
            'style' => array(),
        ),
        'i' => array(
            'style' => array(),
        ),
        'strong' => array(
            'style' => array(),
        ),
        'span' => array(
            'style' => array(),
        ),
        'a' => array(
            'href' => array(),
            'alt' => array(),
            'class' => array(),
            'id' => array(),
            'style' => array(),
        ),
        'br' => array(
            'class' => array(),
            'style' => array(),
        ),
    );
}

//----------ускорение
function remove_dns_prefetch( $hints, $relation_type ) {
   if ( 'dns-prefetch' === $relation_type ) {
      return array_diff( wp_dependencies_unique_hosts(), $hints );
   }
   return $hints;
}
add_filter( 'wp_resource_hints', 'remove_dns_prefetch', 10, 2 );

function footer_enqueue_scripts(){
	remove_action('wp_head','wp_print_scripts');
	//remove_action('wp_head','wp_print_head_scripts',9);
	//remove_action('wp_head','wp_enqueue_scripts',1);
	add_action('wp_footer','wp_print_scripts',5);
    //add_action('wp_footer','wp_enqueue_scripts',5);
	//add_action('wp_footer','wp_print_head_scripts',5);
}
//add_action('after_setup_theme','footer_enqueue_scripts');

function remove_cssjs_ver( $src ) {
if( strpos( $src, '?ver=' ) )
$src = remove_query_arg( 'ver', $src );
return $src;
}
add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );
add_filter( 'script_loader_src', 'remove_cssjs_ver', 10, 2 );

remove_action( 'wp_head', 'rsd_link' );

function disable_embed(){
   wp_dequeue_script( 'silkway' );
}
add_action( 'wp_footer', 'disable_embed' );

function wpdocs_dequeue_dashicon() {
if (current_user_can( 'update_core' )) {
return;
}
wp_deregister_style('dashicons');
}
add_action( 'wp_enqueue_scripts', 'wpdocs_dequeue_dashicon' );

//------------карусель в каталоге
function woocommerce_archive_gallery() {
 
global $product;
$post_ids = $product->get_id();
 
$attachment_ids = $product->get_gallery_attachment_ids();
  
  echo '<div class="mainimg swiper feature-slider-';
  echo $post_ids;
  echo '"><div class="swiper-wrapper">';
  
  echo '<div class="swiper-slide">';
  echo get_the_post_thumbnail( $post->ID, 'shop_single', $attributes );
  echo '</div>';
  
 
  
foreach( $attachment_ids as $attachment_id ) {
  echo '<div class="swiper-slide">';
  echo wp_get_attachment_image( $attachment_id, 'shop_catalog' );
  echo '</div>';  
}
  echo '</div><div class="swiper-pagination"></div></div>';
}

remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 ); 
add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_archive_gallery', 8 );

//поиск только по заголовкам записей
/*function title_filter( $where, &$wp_query ){
    global $wpdb;
    if ( $search_term = $wp_query->get( 'search_prod_title' ) ) {
        $where .= ' AND ' . $wpdb->posts . '.post_title LIKE \'%' . esc_sql( $wpdb->esc_like( $search_term ) ) . '%\'';
    }
    return $where;
}*/
//поиск только по заголовкам записей

//поиск только по товарам
function searchfilter($query) {
    if ($query->is_search && !is_admin() ) {
        $query->set('post_type',array('product'));
    }
return $query;
}
add_filter('pre_get_posts','searchfilter');
//поиск только по товарам

function some_field_update(){
    $my_posts = new WP_Query;
    $myposts = $my_posts->query( array(
        'post_type' => 'product',
        'posts_per_page' => 10000,
    ) );
    foreach( $myposts as $pst ){
        if ($pst) {
			$cat_id = yoast_get_primary_term_id( 'product_cat', $pst->ID );
			$product = wc_get_product( $pst->ID );
            $stock_status = $product->get_stock_status();
			if ($stock_status == 'instock') {
				if ($cat_id == '126') {
					update_post_meta($pst->ID, 'prod_sort', '1');
				}
			    if ($cat_id == '128') {
					update_post_meta($pst->ID, 'prod_sort', '2');
				}
				if ($cat_id == '127') {
					update_post_meta($pst->ID, 'prod_sort', '3');
				}
				if ($cat_id == '125') {
					update_post_meta($pst->ID, 'prod_sort', '4');
				}
				if ($cat_id == '207') {
					update_post_meta($pst->ID, 'prod_sort', '5');
				}
				if ($cat_id == '200') {
					update_post_meta($pst->ID, 'prod_sort', '6');
				}
				if ($cat_id == '168') {
					update_post_meta($pst->ID, 'prod_sort', '11');
				}
				if ($cat_id == '166') {
					update_post_meta($pst->ID, 'prod_sort', '22');
				}
				if ($cat_id == '167') {
					update_post_meta($pst->ID, 'prod_sort', '33');
				}
				if ($cat_id == '124') {
					update_post_meta($pst->ID, 'prod_sort', '44');
				}
				if ($cat_id == '141') {
					update_post_meta($pst->ID, 'prod_sort', '55');
				}
			} else {
				update_post_meta($pst->ID, 'prod_sort', '99');
			}	
		}
    }
}
add_action('init', 'some_field_update');

//сортировка по наличию
add_filter( 'woocommerce_get_catalog_ordering_args', 'truemisha_sort_by_stock', 25 );
function truemisha_sort_by_stock( $args ) {
	$args[ 'orderby' ] = 'meta_value_num';
	$args[ 'meta_key' ] = 'prod_sort';
	//$args[ 'orderby' ] = 'menu_order';
	$args[ 'order' ] = 'ASC';
	return $args; 
}
//сортировка по наличию