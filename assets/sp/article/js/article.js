$(function () {
	$('.articleNav-list span').on('click', function () {
		var c = $(this).data('spot');
		$('ul.spot-list > li').css("display", "none");
		$('ul.spot-list > li.' + c).css("display", "block");
		return false;
	});
});
