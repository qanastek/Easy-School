jQuery(document).ready(function($)
{
	/*Full URL*/
	var URL = window.location.protocol + "//" + window.location.host + window.location.pathname + window.location.search
	
	/*Navbar*/
	$('.nav-item > a[href="'+URL+'"]').parent().addClass('active');

	/*Sidebar for "actualité"*/
	$('.item_menu[href="'+URL+'"]').addClass('item_active_menu');

	/*Lazy Load*/
	window.addEventListener("load", function(event) {
	    let images = document.querySelectorAll(".lazy");
		lazyload(images);
	});

	/*Image ratio 1:1 articles gallery*/
	let widthImage = $('.img_post_ratio').width();

	$('.img_post_ratio').css({
		height: widthImage
	});

	/*Image ratio 1:1 articles presentation*/
	let widthImageMain = $('.image_ratio_full_size').width();

	$('.image_ratio_full_size').css({
		height: widthImageMain
	});
	
})