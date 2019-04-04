jQuery(document).ready(function($)
{
	var URL = window.location.protocol + "//" + window.location.host + window.location.pathname + window.location.search
	$('.nav-item > a[href="'+URL+'"]').parent().addClass('active');
})