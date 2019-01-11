/**
* 2007-2018 PrestaShop
*
* Joommasters Theme
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2018 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/
 jQuery(document).ready(function($) {
	$('.jms-megamenu').jmsMegaMenu({    			
		event: jmmm_event,
		duration: jmmm_duration
	});
});
$(window).load(function(){
	if($('.slider').length > 0)
	$('.slider').fractionSlider({	
		'slideTransition' : jmsslider_trans,
		'slideEndAnimation' : jmsslider_end_animate,
		'transitionIn' : jmsslider_trans_in,
		'transitionOut' : jmsslider_trans_out,
		'fullWidth' : jmsslider_full_width,
		'delay' : jmsslider_delay,
		'timeout' : jmsslider_duration,
		'speedIn' : jmsslider_speed_in,
		'speedOut' : jmsslider_speed_out,
		'easeIn' : jmsslider_ease_in,
		'easeOut' : jmsslider_ease_out,
		'controls' : jmsslider_navigation,
		'pager' : jmsslider_pagination,
		'autoChange' : jmsslider_autoplay,
		'pauseOnHover' : jmsslider_pausehover,
		'backgroundAnimation' : jmsslider_bg_animate,
		'backgroundEase' : jmsslider_bg_ease,
		'responsive' : jmsslider_responsive,
		'dimensions' : jmsslider_dimensions,
		'fullscreen' : true
	});
});

jQuery(document).ready(function($) {
	var header = $(".jms-row.header");
	var productCarousel = $(".product_carousel");
	var featuredProduct = $(".featured_product");

	$(window).scroll(function () {
    	if ($(window).scrollTop() > 300){
			header.addClass("fixed");
    	} else {
			header.removeClass("fixed");
    	}
    });

    $(".product_carousel .product-miniature").hover(function(){
	    productCarousel.css("z-index", "3");
		}, function(){
        productCarousel.css("z-index", "1");
	});
	$(".featured_product .addon-box:first-child").hover(function(){
	    $(this).css("z-index", "3");
		}, function(){
        $(this).css("z-index", "1");
	});
});