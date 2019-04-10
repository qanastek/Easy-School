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

	/*Padding for card*/
	let heightText = $('.right-bottom').height();
	
	$('.article_text').css({
		paddingBottom: heightText
	});

	/*var widthViewport = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);

	if (widthViewport > 900)
	{
		let nav = parseInt($('.navbar').height()) + parseInt($('.navbar').css("padding-top")) + parseInt($('.navbar').css("padding-bottom"));

		$(".mainRow").css({
			paddingTop: 0 + 'px'
		});

		$("body").css({
			paddingTop: nav * 1.4 + 'px'
		});
	}

	console.log(nav);*/
})