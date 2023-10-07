var d=document;
var w=window;

let isMobile = window.innerWidth < 768;
d.addEventListener('resize', () => {
	isMobile = window.innerWidth < 768;
});
jQuery( document ).ready(function() {
	console.log( "ready!" );
	jQuery('#footer-widgets > section.footer-links > div > div:nth-child(5) > a:nth-child(5)').after("<iframe style='margin-top: 5px' src=\"https://yandex.ru/sprav/widget/rating-badge/1759329539\" width=\"150\" height=\"50\" frameborder=\"0\"></iframe>");
});

jQuery(document).ready(function() {
	jQuery('img').removeClass('skip-lazy');
	jQuery('img').addClass('lazyload');
	jQuery('img').attr('alt', 'silkway');
	jQuery('.marquiz__bg').first().addClass('marq');
	jQuery('[data-href="#marqpop"]').on('click', function (event){
		jQuery('#marq_btn')[0].click();
	});
	jQuery('#billing_phone').mask('8(999) 999-99-99');
});

d.addEventListener('DOMContentLoaded',function(){
	jQuery(window).on('scroll',function(){
		headerMenuScroll();
	});
	headerTopbar();
	headerGrayMenuSelectCity();
	mobileMenu();
	headerCart();
	headerMenu();
	//indexHeaderSlider();

	indexFirstDisplay();

	indexFamousPeopleSlider();
	indexProductAdvertising();
	indexStockSlider();
	indexStockCounter();
	indexReviewsSlider();
	indexFAQ();
	indexSertificatesSlider();
	footerContacts();
	leftCatalogMenu();
	relatedProductsSlider();
	indexOurTeamSlider();
	targetMetrix();
	indexTags();
	mobileFilters();

	// Add goal to elements
	clickOnSocialButtonInHeader();
	addGoalToConsult();
	clickOnFeedbackForm();
	clickOnContactsInFooter();
	addGoalToCallbackBtn();
	clickOnCallButtonInFooter();
	//initSertificatePopup();
	initGetConsultationForm();
	//initFittingPopup();
});

let topBarShownBefore = false;
let fittingPopupShownBefore = false;
function headerTopbar() {
	jQuery(window).on('scroll',function(){
		if(!topBarShownBefore) {
			topBarShownBefore = true;
			ym(61113070,'reachGoal','pokaz-top-bar');
			console.log('pokaz-top-bar');
		}
	});
	jQuery(document).on('click', '.header-topbar', function (){
		ym(61113070,'reachGoal','click-top-bar');
		fittingPopupShownBefore = true;
		showFittingPopup();
	});
	jQuery('.headerTopbar-close').on('click', function (event){
		event.stopPropagation();
		jQuery('.header-topbar').remove();
		document.cookie = 'hideTopBar=true';
	});
}


function headerMenuScroll(){
	if(jQuery(window).scrollTop() > 0){
		jQuery('header').addClass('scroll');
	} else {
		jQuery('header').removeClass('scroll');
	}
}

function headerGrayMenuSelectCity(){
	var selectCity=d.querySelector('.header-top .select-city select');
	var cityPhone=d.querySelector('.header-middle .header-phone');
	cityPhone.setAttribute('href','tel:'+selectCity.value);
	cityPhone.querySelector('span').innerText=selectCity.value;
	insertOrganizationAddress(selectCity.value);

	selectCity.addEventListener('change',function(){
		cityPhone.setAttribute('href','tel:'+selectCity.value);
		cityPhone.querySelector('span').innerText=selectCity.value;
		insertOrganizationAddress(selectCity.value);
	});
}

function insertOrganizationAddress( currentOption ) {
	var selectCity=d.querySelector('.header-top .select-city select');
	const option_select = selectCity.querySelector('option[value="' + currentOption + '"]');
	const schemeWrapper = document.getElementById('schemeOrg');

	if(schemeWrapper) {
		const moscowContacts = '<span itemprop="name">Silk-way</span>\n' +
			'  Контакты:\n' +
			'  <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">\n' +
			'    Адрес:\n' +
			'    <span itemprop="streetAddress">Шарикоподшипниковская 13 строение 1, 2 этаж, офис 13</span>\n' +
			'    <span itemprop="postalCode">115088</span>\n' +
			'    <span itemprop="addressLocality">Москва</span>,\n' +
			'  </div>\n' +
			'  Официальное название компании: <span itemprop="legalName">Общество с ограниченной ответственностью «ПРОФЛАЙН»</span>,\n' +
			'  Реквизиты компании: <span itemprop="taxID">ИНН 7723458035</span>,\n' +
			'  Регистрационный номер компании: <span itemprop="vatID">ОГРН 1167746638487</span>,\n' +
			'  Телефон:<span itemprop="telephone">+7 (985) 114-15-69</span>,\n' +
			'  Электронная почта: <span itemprop="email">office@silk-way.ru</span>,\n' +
			'  Компания в ВК: <span itemprop="contactPoint">https://vk.com/silkwaystore</span>,\n' +
			'  Компания в телеграм: <span itemprop="contactPoint">https://t.me/silkwayru</span>';

		const piterContacts = '<span itemprop="name">Silk-way</span>\n' +
			'  Контакты:\n' +
			'  <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">\n' +
			'    Адрес:\n' +
			'    <span itemprop="streetAddress">м. Достоевская/Владимирская, Загородный проспект дом 2, 2 этаж, офис 15</span>\n' +
			'    <span itemprop="postalCode">191002</span>\n' +
			'    <span itemprop="addressLocality">Санкт-Петербург</span>,\n' +
			'  </div>\n' +
			'  Официальное название компании: <span itemprop="legalName">Общество с ограниченной ответственностью «ПРОФЛАЙН»</span>,\n' +
			'  Реквизиты компании: <span itemprop="taxID">ИНН 7723458035</span>,\n' +
			'  Регистрационный номер компании: <span itemprop="vatID">ОГРН 1167746638487</span>,\n' +
			'  Телефон:<span itemprop="telephone">+7 (921) 650-66-20</span>,\n' +
			'  Электронная почта: <span itemprop="email">office@silk-way.ru</span>,\n' +
			'  Компания в ВК: <span itemprop="contactPoint">https://vk.com/silkwaystore</span>,\n' +
			'  Компания в телеграм: <span itemprop="contactPoint">https://t.me/silkwayru</span>';

		if(option_select.textContent.toLowerCase() === 'москва') {
			schemeWrapper.innerHTML = moscowContacts;
		} else {
			schemeWrapper.innerHTML = piterContacts;
		}
	}


}

function mobileMenu(){
	d.querySelector('.header-middle .menu-toggler, .header-middle .menu-toggler-new').addEventListener('click', function () {
		jQuery(this).toggleClass('open');
		jQuery('.header-middle .menus-block').toggleClass('open');
	});

	d.querySelector('.header-middle .menus-block i.close-menu').addEventListener('click', function () {
		jQuery('.header-middle .menu-toggler').removeClass('open');
		jQuery('.header-middle .menu-toggler-new').removeClass('open');
		jQuery('.header-middle .menus-block').removeClass('open');
	});
	jQuery('.header-middle .menus-block .header-menu-white>ul>li.menu-item-has-children').each(function () {
		jQuery('>a', jQuery(this)).after('<div class="sub-menu-toggler">&#xf054;</div>');
	});
	jQuery('.header-middle .menus-block .header-menu-white>ul>li.menu-item-has-children>a, .header-middle .menus-block .header-menu-white>ul>li.menu-item-has-children>.sub-menu-toggler').on('click', function (e) {
		e.preventDefault();
		jQuery(this).parent().toggleClass('open');
	});

	var selectCity=d.querySelector('.header-middle .menus-block .mobile-menu-adress select');
	var cityPhone=d.querySelector('#mobile-header-tel');
	cityPhone.setAttribute('href','tel:'+selectCity.value);
	cityPhone.innerText=selectCity.value;
	selectCity.addEventListener('change',function(){
		cityPhone.setAttribute('href','tel:'+selectCity.value);
		cityPhone.innerText=selectCity.value;
	});
}

/*function mobileMenu_cat(){
	d.querySelector('.m-cat-menu-wrap.m-cat-menu-toggler').addEventListener('click', function () {
		jQuery(this).toggleClass('open');
		jQuery('.header-middle .menus-block').toggleClass('open');
	});
	d.querySelector('.header-middle .menus-block i.close-menu').addEventListener('click', function () {
		jQuery('.m-cat-menu-wrap.m-cat-menu-toggler').removeClass('open');
		jQuery('.header-middle .menus-block').removeClass('open');
	});
	jQuery('.header-middle .menus-block .header-menu-white>ul>li.menu-item-has-children').each(function () {
		jQuery('>a', jQuery(this)).after('<div class="sub-menu-toggler">&#xf054;</div>');
	});
	jQuery('.header-middle .menus-block .header-menu-white>ul>li.menu-item-has-children>a, .header-middle .menus-block .header-menu-white>ul>li.menu-item-has-children>.sub-menu-toggler').on('click', function (e) {
		e.preventDefault();
		jQuery(this).parent().toggleClass('open');
	});

	var selectCity=d.querySelector('.header-middle .menus-block .mobile-menu-adress select');
	var cityPhone=d.querySelector('#mobile-header-tel');
	cityPhone.setAttribute('href','tel:'+selectCity.value);
	cityPhone.innerText=selectCity.value;
	selectCity.addEventListener('change',function(){
		cityPhone.setAttribute('href','tel:'+selectCity.value);
		cityPhone.innerText=selectCity.value;
	});
}*/

function headerCart(){
	d.querySelector('.header-cart .quick-icon').addEventListener('click',function(event){
		if(document.body.clientWidth > 1201) {
			event.preventDefault();
			jQuery('.header-cart .products-list').addClass('open');
		}
	});
	if(d.querySelector('.header-cart .products-list .close')){
		d.querySelector('.header-cart .products-list .close').addEventListener('click',function(){
			//d.querySelector('section.header-cart .products-list').classList.remove('open');
			jQuery('.header-cart .products-list').removeClass('open');
		});
	}
}

function headerMenu(){
	w.addEventListener('scroll',function(){
		if(pageYOffset>90){
			//d.querySelector('section.header-logo').classList.add('min')
			//d.querySelector('section.header-menu').classList.add('min')
			//d.querySelector('section.header-cart').classList.add('min')
			jQuery('section.header-logo').addClass('min')
			jQuery('section.header-menu').addClass('min')
			jQuery('section.header-cart').addClass('min')
		} else {
			//d.querySelector('section.header-logo').classList.remove('min')
			//d.querySelector('section.header-menu').classList.remove('min')
			//d.querySelector('section.header-cart').classList.remove('min')
			jQuery('section.header-logo').removeClass('min')
			jQuery('section.header-menu').removeClass('min')
			jQuery('section.header-cart').removeClass('min')
		}
	});
	d.querySelectorAll('section.index-header-slider .header-slider-container .swiper-container .swiper-wrapper .swiper-slide .text button.link-test').forEach(function(el){
		el.addEventListener('click',function(){
			w.scrollTo({
				top: d.querySelector('section.index-marquiz-test').offsetTop-70,
				behavior: 'smooth'
			});
		});
	});
}

/*function indexHeaderSlider(){
	if(d.querySelector('section.index-header-slider')){
		var headerSlider = new Swiper('section.index-header-slider .header-slider-container .swiper-container', {
			loop: true,
			lazy: true,
			navigation: {
				prevEl: 'section.index-header-slider .header-slider-container .prev',
				nextEl: 'section.index-header-slider .header-slider-container .next'
			}
		});
	}
}*/

function indexFirstDisplay() {
	const fd_wrapper = document.querySelector('.index-first-display-wrapper');
	const fd_item_form_phone = document.getElementById('index-first-display__item-form-phone');
	const fd_form = document.getElementById('index-first-display__item-form');
	const fd_site_name = document.querySelector('.index-first-display__item-form-site-name');

	if(fd_wrapper) {
		ym(61113070,'reachGoal','pokaz-perviy-ekran');
	}

	if(fd_item_form_phone) {
		Inputmask('+7 (999) 999-99-99', {
			clearMaskOnLostFocus: true,
			clearIncomplete: true
		}).mask(fd_item_form_phone);
	}

	if(fd_form) {
		fd_form.addEventListener('submit', (e) => {


			e.preventDefault();

			var data = {
				action: 'form_send',
				form: 'firstDisplay',
				phone: fd_item_form_phone.value,
				site: fd_site_name.value,
			};

			console.log(data);

			jQuery.post(
				// ajaxurl,
				'wp-content/themes/silkway/inc/ajax.php',
				data,
				function (response) {
					if(response.status == 'success'){

						ym(61113070,'reachGoal','otpravka-perviy-ekran');

						fd_item_form_phone.value = '';

						jQuery.fancybox.close()
						jQuery.fancybox.open({
							'src': '#success-popup',
							'touch': false
						})
						setTimeout(function (){
							jQuery.fancybox.close()
						}, 4000)
					} else {
						console.log(response);
					}
				},
				'json'
			);
		})
	}

}

function indexFamousPeopleSlider(){
	if(d.querySelector('section.index-famous-people')){
		var famousSlider = new Swiper('section.index-famous-people .famous-slider .swiper-container', {
			loop: true,
			slidesPerView: 'auto',
			spaceBetween: 30,
			lazy: true,
			centeredSlides: true,
			navigation: {
				prevEl: 'section.index-famous-people .famous-slider .prev',
				nextEl: 'section.index-famous-people .famous-slider .next'
			}
		});
	}
}

function indexProductAdvertising(){
	if(d.querySelector('section.index-product-advertising')){
		var advertisingSliders=[];
		d.querySelectorAll('section.index-product-advertising .tabs-content-container .tab-content').forEach(function(el,i){
			advertisingSliders[i] = new Swiper(el.querySelector('.swiper-container'), {
				loop: true,
				slidesPerView: 4,
				spaceBetween: 20,
				lazy: true,
				navigation: {
					prevEl: el.querySelector('.prev'),
					nextEl: el.querySelector('.next')
				},
				centeredSlides: true,
				slidesPerView: 'auto',
				effect: 'coverflow',
				coverflowEffect: {
					rotate: 0,
					stretch: 0,
					depth: 0,
					modifier: 1,
					slideShadows : false,
				},
				breakpoints: {
					1200: {
						effect: 'coverflow',
						coverflowEffect: {
							rotate: 10,
							stretch: 0,
							depth: 50,
							modifier: 1,
							slideShadows : true,
						}
					}
				}
			});
			if(i>0){
				//el.classList.remove('active');
				jQuery(el).removeClass('active');
			}
		});
		d.querySelectorAll('section.index-product-advertising .tabs-switches-container .tab').forEach(function(elTab){
			elTab.addEventListener('click',function(elTabClick){
				d.querySelectorAll('section.index-product-advertising .tabs-switches-container .tab').forEach(function(el,i){
					//el.classList.remove('active');
					jQuery(el).removeClass('active');
				});
				elTabClick.currentTarget.classList.add('active');
				d.querySelectorAll('section.index-product-advertising .tabs-content-container .tab-content').forEach(function(el,i){
					//el.classList.remove('active');
					jQuery(el).removeClass('active');
				});
				jQuery('section.index-product-advertising .tabs-content-container .tab-content[tabnum="'+elTabClick.currentTarget.getAttribute('tabnum')+'"]').addClass('active');
			});
		});
	}
}

function indexStockSlider(){
	if(d.querySelector('section.index-stock')){
		var stockSlider = new Swiper('section.index-stock .stock-slider .swiper-container', {
			loop: true,
			slidesPerView: 4,
			spaceBetween: 20,
			lazy: true,
			navigation: {
				prevEl: 'section.index-stock .stock-slider .prev',
				nextEl: 'section.index-stock .stock-slider .next'
			},
			centeredSlides: true,
			slidesPerView: 'auto',
			effect: 'coverflow',
			coverflowEffect: {
				rotate: 0,
				stretch: 0,
				depth: 0,
				modifier: 1,
				slideShadows : false,
			},
			breakpoints: {
				1200: {
					effect: 'coverflow',
					coverflowEffect: {
						rotate: 10,
						stretch: 0,
						depth: 50,
						modifier: 1,
						slideShadows : true,
					}
				}
			}
		});
	}
}

function indexStockCounter(){
	if(d.querySelector('.index-stock-counter')){
		stockTimer();
		function stockTimer(){
			var nowDate=new Date();
			var timeParts=d.querySelector('.index-stock-counter .counter').getAttribute('date').split(',');
			var stockDate=new Date(timeParts[0],timeParts[1]-1,timeParts[2],timeParts[3],timeParts[4]);
			var remainedDays=d.querySelectorAll('section.index-stock-counter .counter .unit span.num')[0];
			var remainedHours=d.querySelectorAll('section.index-stock-counter .counter .unit span.num')[1];
			var remainedMins=d.querySelectorAll('section.index-stock-counter .counter .unit span.num')[2];
			var result = (stockDate - nowDate)+1000;
			if (result < 0) {
				remainedDays.innerText='0';
				remainedHours.innerText='0';
				remainedMins.innerText='0';
				return;
			}
			var minutes = Math.floor((result/1000/60)%60);
			var hours = Math.floor((result/1000/60/60)%24);
			var days = Math.floor(result/1000/60/60/24);
			if (minutes < 10) minutes = '0' + minutes;
			if (hours < 10) hours = '0' + hours;
			remainedDays.innerText=days;
			remainedHours.innerText=hours;
			remainedMins.innerText=minutes;
			setTimeout(stockTimer, 60000);
		}
	}
}

function indexReviewsSlider(){
	if(d.querySelector('section.index-reviews')){
		var reviewsSlider = new Swiper('section.index-reviews .reviews-slider .swiper-container', {
			loop: true,
			slidesPerView: 'auto',
			spaceBetween: 30,
			lazy: true,
			centeredSlides: true,
			navigation: {
				prevEl: 'section.index-reviews .reviews-slider .prev',
				nextEl: 'section.index-reviews .reviews-slider .next'
			}
		});
	}
}

function indexFAQ(){
	if(d.querySelector('section.index-faq')){
		d.querySelectorAll('section.index-faq .items-container .item').forEach(function(el){
			el.querySelector('.faq-spoiler').addEventListener('click',function(){
				//el.querySelector('.text').classList.toggle('active');
				jQuery(el.querySelector('.text')).toggleClass('active');
			});
		});
	}
}

function indexSertificatesSlider(){
	if(d.querySelector('section.index-sertificates')){
		var sertificatesSlider = new Swiper('section.index-sertificates .sertificates-slider .swiper-container', {
			loop: true,
			slidesPerView: 'auto',
			spaceBetween: 75,
			lazy: true,
			centeredSlides: true,
			navigation: {
				prevEl: 'section.index-sertificates .sertificates-slider .prev',
				nextEl: 'section.index-sertificates .sertificates-slider .next'
			}
		});
		jQuery('[data-fancybox="gallery"]').fancybox();
	}
}

function footerContacts(){
	d.querySelectorAll('section.footer-contacts .tabs-switches-container .tab').forEach(function(el){
		el.addEventListener('click',function(){
			d.querySelectorAll('section.footer-contacts .tabs-switches-container .tab').forEach(function(elTab){
				//elTab.classList.remove('active');
				jQuery(elTab).removeClass('active');
			});
			//el.classList.add('active');
			jQuery(el).addClass('active');
			d.querySelectorAll('section.footer-contacts .tabs-content-container .tab-content').forEach(function(elTab){
				//elTab.classList.remove('active');
				jQuery(elTab).removeClass('active');
			});
			//d.querySelector('section.footer-contacts .tabs-content-container .tab-content[tabnum="'+el.getAttribute('tabnum')+'"]').classList.add('active');
			jQuery('section.footer-contacts .tabs-content-container .tab-content[tabnum="'+el.getAttribute('tabnum')+'"]').addClass('active');
		});
	});
}

function leftCatalogMenu(){
	if(d.querySelector('aside.left .widget_nav_menu')){
		d.querySelectorAll('aside.left .widget_nav_menu>div>ul>li').forEach(function(elA){
			var thisA=elA.querySelector('a');
			thisA.addEventListener('click',function(){
				//elA.classList.toggle('close');
				jQuery(elA).toggleClass('close');
			});
		});
	}
}

function relatedProductsSlider(){
	if(d.querySelector('aside.center .product .related.products')){
		var stockSlider = new Swiper('aside.center .product .related.products .related-products-slider-container .swiper-container', {
			loop: true,
			slidesPerView: 'auto',
			spaceBetween: 20,
			lazy: true,
			centeredSlides: true,
			navigation: {
				prevEl: 'aside.center .product .related.products .prev',
				nextEl: 'aside.center .product .related.products .next'
			}
		});
	}
}

function indexOurTeamSlider(){
	if(d.querySelector('section.index-our-team')){
		var reviewsSlider = new Swiper('section.index-our-team .our-team-slider .swiper-container', {
			loop: true,
			slidesPerView: 'auto',
			spaceBetween: 75,
			lazy: true,
			centeredSlides: true,
			navigation: {
				prevEl: 'section.index-our-team .our-team-slider .prev',
				nextEl: 'section.index-our-team .our-team-slider .next'
			}
		});
	}
}

function targetMetrix(){

	jQuery('#gform_submit_button_1').on('click',function(){
		ym(61113070, 'reachGoal', 'call-back');
	});
	jQuery('#gform_submit_button_3').on('click',function(){
		ym(61113070, 'reachGoal', 'consult');
	});
	jQuery('#gform_submit_button_2').on('click',function(){
		ym(61113070, 'reachGoal', 'stock');
	});
	jQuery('form#netpay_payment_form input.button.alt').on('click',function(){
		ym(61113070, 'reachGoal', 'oplata');
	});
	jQuery('.single_add_to_cart_button.button.alt').on('click',function(){
		ym(61113070, 'reachGoal', 'add');
	});
	jQuery('#gform_submit_button_4').on('click',function(){
		ym(61113070, 'reachGoal', 'credit');
	});
	jQuery('#gform_submit_button_6').on('click',function(){
		ym(61113070, 'reachGoal', 'show-room');
	});
	jQuery('section.woocommerce-category div.product-item').on('click',function(){
		ym(61113070, 'reachGoal', 'goffer');
	});
	if(jQuery('.certificate-popup').length != 0) {

		if(isMobile) {
			ym(61113070,'reachGoal','pokaz-vidjet-popap-mob');
		} else {
			ym(61113070,'reachGoal','pokaz-vidjet-popap');
		}

		jQuery('.certificate-popup').on('click',function(){
			if(isMobile) {
				ym(61113070,'reachGoal','klick-vidjet-popap-mob');
			} else {
				ym(61113070,'reachGoal','klick-vidjet-popap');
			}
		});
	}

	const choose_widget = document.querySelector('.choose-widget');
	if( choose_widget ) {

		choose_widget.addEventListener('click',() => {
			ym(61113070,'reachGoal','click-widjet');
		});

		setTimeout(() => {
			choose_widget.click();
		}, 10000);
	}



	jQuery('.callback-trigger').on('click',function(){
		ym(61113070,'reachGoal','zakazat-zvonok');
	});
	jQuery('.header-middle .header-phone').on('click',function(){
		ym(61113070,'reachGoal','click-tel-shapka')
	});
	jQuery('.email-trigger').on('click',function(){
		ym(61113070,'reachGoal','click-pochta-shapka')
	});
	jQuery('.header-social_tg').on('click',function(){
		ym(61113070,'reachGoal','click-tg-shapka')
	});
	jQuery('.header-social_wa').on('click',function(){
		ym(61113070,'reachGoal','click-wa-shapka')
	});
}

function indexTags(){
	var indexTagsList=[];
	jQuery('section.index-tags .tags-category .tags-container').each(function(i,el){
		indexTagsList[i] =  new Swiper(jQuery('.swiper-container',jQuery(this)), {
			loop: false,
			//slidesPerView: 5,
			spaceBetween: 10,
			navigation: {
				prevEl: jQuery('.prev',jQuery(this)),
				nextEl: jQuery('.next',jQuery(this)),
			},
			breakpoints: {
				1200: {
					slidesPerView: 5,
				},
				1000: {
					slidesPerView: 4,
				},
				800: {
					slidesPerView: 3,
				},
				600: {
					slidesPerView: 2,
				},
				400: {
					slidesPerView: 1,
				},
			}
		});
	});
	jQuery('section.index-tags .tags-category .tags-container .view-all').on('click',function(){
		var thisParentContainer=jQuery(this).parents('.tags-container');
		jQuery('a.tag',thisParentContainer).each(function(i,el){
			jQuery('.all-tags',thisParentContainer).append(el);
		});
		jQuery('.swiper-container',thisParentContainer).remove();
		jQuery('.prev',thisParentContainer).remove();
		jQuery('.next',thisParentContainer).remove();
		jQuery(this).remove();
	});
}

function mobileFilters(){
	jQuery('aside.left .WpfWoofiltersWidget').prepend('<div class="open-filters">Фильтры</div>');
	jQuery('aside.left .WpfWoofiltersWidget').on('click','.open-filters',function(){
		jQuery('aside.left .WpfWoofiltersWidget .wpfMainWrapper').toggleClass('open');
	});
}

function clickOnSocialButtonInHeader() {
	const telegram_btn = d.querySelector('.socicon-telegram');
	const whatsapp_btn = d.querySelector('.socicon-whatsapp');
	const phone_btn = d.querySelector('.header-gray-menu .phone');

	if(ym) {
		if(telegram_btn) {
			telegram_btn.addEventListener('click', () => {
				ym(61113070, 'reachGoal', 'click-tg-shapka');
			});
		}

		if(whatsapp_btn) {
			whatsapp_btn.addEventListener('click', () => {
				ym(61113070, 'reachGoal', 'click-wa-shapka');
			});
		}

		if(phone_btn) {
		phone_btn.addEventListener('click', () => {
			ym(61113070,'reachGoal','click-tel-shapka');
		});
		}
	}

}

function addGoalToConsult() {
	const consultation_btn = d.querySelector('.send-consultation-request');
	const consultation_form = d.getElementById('gform_3');

	if(ym) {
		if(consultation_btn) {
			consultation_btn.addEventListener('click', () => {
				ym(61113070, 'reachGoal', 'click-konsult-glav');
			});
		}

		if(consultation_form) {
			consultation_form.addEventListener('submit', () => {
				// Ловим событие возвращения ответа - "Спасибо"
				const interval_conf_mess = setInterval(function () {
					// Блок с сообщением появляется после отправки формы
					const conf_message = d.getElementById('gform_confirmation_message_3');

					if (conf_message) {
						clearInterval(interval_conf_mess);
						// console.log('consultation_form validation and successfully send');
						ym(61113070, 'reachGoal', 'otpravka-consult-glav');
					}
				}, 500);
			});
		}
	}
}

function clickOnFeedbackForm() {
	const phone = d.querySelectorAll('.tab-content .phone');
	const email = d.querySelectorAll('.tab-content .email');
	let i = 0;
	const feilds_length = phone.length;
	const feedback_form = d.getElementById('gform_1');

	if(ym) {
		if(feilds_length) {
			for (i; i < feilds_length; i++) {
				phone[i].addEventListener('click', () => {
					ym(61113070, 'reachGoal', 'click-tel-forma');
				});

				email[i].addEventListener('click', () => {
					ym(61113070, 'reachGoal', 'click-mail-forma');
				});
			}
		}

		if(feedback_form) {
			feedback_form.addEventListener('submit', () => {

				// Ловим событие возвращения ответа - "Спасибо"
				const interval_conf_mess = setInterval(function () {
					// Блок с сообщением появляется после отправки формы
					const conf_message = d.getElementById('gform_confirmation_message_1');

					if (conf_message) {
						clearInterval(interval_conf_mess);
						// console.log('consultation_form validation and successfully send');
						ym(61113070, 'reachGoal', 'otpravka-zadat-vopr');
					}
				}, 500);
			});
		}
	}
}

function clickOnContactsInFooter() {
	const footer_phone = d.querySelector('.links-container a[href^="tel:"]');
	const footer_email = d.querySelector('.links-container a[href^="mailto:"]');


	if(ym) {

		footer_phone.addEventListener('click', () => {
			ym(61113070,'reachGoal','click-tel-footer');
		});

		footer_email.addEventListener('click', () => {
			ym(61113070,'reachGoal','click-futer');
		});
	}
}

function addGoalToCallbackBtn() {

	const feedback_btn = setInterval(function() {
		const callback_widget = d.querySelector('.pclk-icon-phone');
		const callback_form = d.querySelector('.pclk-backcall-form');

		if(callback_widget) {
			clearInterval(feedback_btn);

			if(ym) {
				callback_widget.addEventListener('click', () => {
					ym(61113070,'reachGoal','click-vidjet');
				});

				callback_form.addEventListener('submit', () => {
					// console.log('callback_form');
					ym(61113070,'reachGoal','otpravka-vidjet');
				});
			}
		}


	}, 500);

}

function clickOnCallButtonInFooter() {
	const call_btn = document.querySelector('.call-to-support-department');

	if(call_btn) {
		call_btn.addEventListener('click', () => {
			if(ym) {
				ym(61113070,'reachGoal','click-pozvonit-mob');
			}

			const consultation_btn = d.querySelector('.send-consultation-request');
			if(consultation_btn) {
				consultation_btn.click();
			}
		})
	}
}

function initGetConsultationForm() {
	const getConsultationForm = document.querySelector('.getConsultation-form');
	if(getConsultationForm) {
		const getConsultationFormPhone = getConsultationForm.querySelector('.phone-number');
		if (getConsultationFormPhone) {
			Inputmask('+7 (999) 999-99-99', {
				clearMaskOnLostFocus: true,
				clearIncomplete: true
			}).mask(getConsultationFormPhone);
		}

		const getConsultationFormSubmit = getConsultationForm.querySelector('button[type="submit"]');
		const getConsultationPolicy = getConsultationForm.querySelector('#getConsultation-policy');
		if (getConsultationPolicy) {
			getConsultationPolicy.addEventListener('change', (event) => {
				getConsultationFormSubmit.disabled = !getConsultationPolicy.checked;
			})
		}

		getConsultationForm.addEventListener('submit', (event) => {
			event.preventDefault();
			getConsultationFormSubmit.disabled = true;
			var data = {
				action: 'form_send',
				form: 'getConsultation',
				phone: getConsultationFormPhone.value
			};
			console.log(data);
			jQuery.post(
				// ajaxurl,
				'/wp-content/themes/silkway/inc/ajax.php',
				data,
				function (response) {
					if(response.status == 'success'){
						ym(61113070,'reachGoal','otpravka-konsult-gs')
						ym(61113070,'reachGoal','otpravka-consult-glav')
						jQuery.fancybox.close()
						jQuery.fancybox.open({
							'src': '#success-popup',
							'touch': false
						})
						setTimeout(function (){
							jQuery.fancybox.close()
						}, 4000)
					} else {
						console.log(response);
					}
				},
				'json'
			);
		});
	}
}

function initSertificatePopup() {
	const sertificatePopup = document.getElementById('sertificate-popup');
	if (sertificatePopup) {
		const sertificateForm = sertificatePopup.querySelector('.popup-form');
		if(sertificateForm) {

			let limit = 24 * 3600 * 1000 * 3; // 24 часа * 3 дня * 1000 милисекунд
			let localStoragePopup = localStorage.getItem('localStoragePopupSertificate');

            console.log('limit - ', limit);
            console.log('date + localstorage - ', +new Date() - localStoragePopup);
            console.log('+date - ', +new Date());

			if(+new Date() - localStoragePopup > limit) {
				localStorage.removeItem('localStoragePopupSertificate');
			}

			setTimeout(() => {
				if (!(localStorage.getItem('localStoragePopupSertificate'))) {
					jQuery.fancybox.open({
						'src': '#sertificate-popup',
						'touch': false
					})
					localStorage.setItem('localStoragePopupSertificate', +new Date());
					ym(61113070, 'reachGoal', 'pokaz-popap')
				}
			}, 55000);

			const sertificateFormPhone = sertificateForm.querySelector('.phone-number');
			/*if (sertificateFormPhone) {
				Inputmask('+7 (999) 999-99-99', {
					clearMaskOnLostFocus: true,
					clearIncomplete: true
				}).mask(sertificateFormPhone);
			}*/

			const sertificatePolicy = sertificateForm.querySelector('#sertificate-policy');
			const sertificateFormSubmit = sertificateForm.querySelector('button[type="submit"]');
			if (sertificatePolicy) {
				sertificatePolicy.addEventListener('change', (event) => {
					sertificateFormSubmit.disabled = !sertificatePolicy.checked;
				})
			}

			sertificateForm.addEventListener('submit', (event) => {
				event.preventDefault();
				sertificateFormSubmit.disabled = true;
				var data = {
					action: 'form_send',
					form: 'sertificate',
					phone: sertificateFormPhone.value
				};
				jQuery.post(
					// ajaxurl,
					'/wp-content/themes/silkway/inc/ajax.php',
					data,
					function (response) {
						console.log(response);
						if(response.status == 'success'){
							ym(61113070,'reachGoal','otpravka-popap');
							jQuery.fancybox.close()
							jQuery.fancybox.open({
								'src': '#success-popup',
								'touch': false
							})
							setTimeout(function (){
								jQuery.fancybox.close()
							}, 4000)
						} else {
							console.log(response);
						}
					},
					'json'
				);
			});
		}
	}
}

function showFittingPopup() {
	jQuery.fancybox.open({
		'src': '#fitting-popup',
		'touch': false
	})
	localStorage.setItem('localStoragePopupFitting', +new Date());
	ym(61113070, 'reachGoal', 'pokaz-popap-gayd');
}

function initFittingPopup() {
	const fittingPopup = document.getElementById('fitting-popup');
	if (fittingPopup) {

		const fittingForm = fittingPopup.querySelector('.popup-form');
		if(fittingForm) {

			let limit = 24 * 3600 * 1000 * 3; // 24 часа * 3
			let localStoragePopup = localStorage.getItem('localStoragePopupFitting');

			if(+new Date() - localStoragePopup > limit) {
				localStorage.removeItem('localStoragePopupFitting');
			}

			// Временно отключен автозапуск
			// setTimeout(() => {
			// 	if (!(localStorage.getItem('localStoragePopupFitting')) && !fittingPopupShownBefore) {
			// 		showFittingPopup();
			// 	}
			// }, 10000);

			const fittingFormPhone = fittingForm.querySelector('.phone-number');
			/*if (fittingFormPhone) {
				Inputmask('+7 (999) 999-99-99', {
					clearMaskOnLostFocus: true,
					clearIncomplete: true
				}).mask(fittingFormPhone);
			}*/

			const fittingPolicy = fittingForm.querySelector('#fitting-policy');
			const fittingFormSubmit = fittingForm.querySelector('button[type="submit"]');
			if (fittingPolicy) {
				fittingPolicy.addEventListener('change', (event) => {
					fittingFormSubmit.disabled = !fittingPolicy.checked;
				})
			}

			fittingForm.addEventListener('submit', (event) => {
				event.preventDefault();
				fittingFormSubmit.disabled = true;
				var data = {
					action: 'form_send',
					form: 'fitting',
					phone: fittingFormPhone.value
				};
				jQuery.post(
					// ajaxurl,
					'/wp-content/themes/silkway/inc/ajax.php',
					data,
					function (response) {
						console.log(response);
						if(response.status == 'success'){
							ym(61113070,'reachGoal','otpravka-popap-gayd');
							jQuery.fancybox.close();
							jQuery.fancybox.open({
								'src': '#success-popup',
								'touch': false
							});
							jQuery.ajax({
								url: 'https://silk-way.ru/wp-content/uploads/2022/07/Гайд-по-корсету.pdf',
								method: 'GET',
								xhrFields: {
									responseType: 'blob'
								},
								success: function (data) {
									var a = document.createElement('a');
									var url = window.URL.createObjectURL(data);
									a.href = url;
									a.download = 'Гайд-по-корсету.pdf';
									document.body.append(a);
									a.click();
									a.remove();
									window.URL.revokeObjectURL(url);
								}
							});
							setTimeout(function (){
								jQuery.fancybox.close()
							}, 4000)
						} else {
							console.log(response);
						}
					},
					'json'
				);
			});

		}

	}

}

setTimeout(initFittingPopup, 2000);
setTimeout(initSertificatePopup, 2000);