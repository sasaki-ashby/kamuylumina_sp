$(function () {
	$('.mw_wp_form .lead.error').css("display","none");
	$('.mw_wp_form_error .lead.error').css("display","block");
	
	if ($('.error')[0]) {
		$('.mw_wp_form').addClass('mw_wp_form_error');
		var errorEl = $('.mw_wp_form').eq(0);
		var position = errorEl.parent().offset().top - 100;
		$('body,html').delay(200).animate({
			scrollTop: position
		}, 600, 'swing');
	}
});
