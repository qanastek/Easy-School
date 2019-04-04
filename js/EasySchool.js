jQuery(document).ready(function($)
{
	/*Full URL*/
	var URL = window.location.protocol + "//" + window.location.host + window.location.pathname + window.location.search
	
	/*Navbar*/
	$('.nav-item > a[href="'+URL+'"]').parent().addClass('active');

	/*Sidebar for "présentation"*/
	$('.item_menu[href="'+URL+'"]').addClass('item_active_menu');
})