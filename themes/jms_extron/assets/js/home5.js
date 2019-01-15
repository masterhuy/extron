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