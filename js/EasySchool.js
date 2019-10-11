jQuery(document).ready(function($)
{
	/*Full URL*/
	var URL = window.location.protocol + "//" + window.location.host + window.location.pathname + window.location.search
	
	/*Navbar active color*/
	$('.navBarStyle1 > .navbar-nav > .nav-item > a[href="'+URL+'"]').parent().addClass('active');

	/*Sidebar for "actualité"*/
	$('.item_menu[href="'+URL+'"]').addClass('item_active_menu');

	/*Lazy Load*/
	window.addEventListener("load", function(event) {
	    let images = document.querySelectorAll(".lazy");
		lazyload(images);
	});

	/*Image ratio 1:1 images gallery*/
	let widthImage = $('.blocks-gallery-item > figure > img').width();

	$('.blocks-gallery-item > figure > img').css({
		height: widthImage
	});

	/*Padding for card*/
	let heightText = $('.right-bottom').height();
	
	$('.article_text').css({
		paddingBottom: heightText
	});

	let heightVP = $( window ).height();
	let widthVP = $( window ).width(); 

	if (heightVP > widthVP)
	{
		/*Actualité.php*/
		$('.titleActu').css(
			{
				"marginLeft" : '-2.5%',
	    		"marginRight" : '-2.5%'
			}
		);

		$('.itemActu').css(
			{
				"paddingLeft" : '2%',
	    		"paddingRight" : '2%'
			}
		);

		/*Index.php*/
		$('.contentPart').css(
			{
				"paddingLeft" : '0%',
	    		"paddingRight" : '0%'
			}
		);

		$('.titleContent').css(
			{
				"marginLeft" : '3%',
	    		"marginRight" : '3%'
			}
		);

		$('.itemContent').css(
			{
				"marginLeft" : '3%',
	    		"marginRight" : '3%'
			}
		);

		$('.itemContent').removeClass('mr-3');
	}

	$('.wp-block-table').addClass('table');

	// Text avant lien fichier
	$('.wp-block-file a').first().css({
		'color': '#757575',
	});
})