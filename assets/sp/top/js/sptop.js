$(function(){
	scrollLoad();	// スクロールでコンテンツを表示
	pageScroll();	// ページスクローラー
});

$(window).on('load',function() {
	// ENJOYスライダー
	if($('.sp_top8_slide').length){
		spTopEnjoy();
	}
	// レビュースライダー
	if($('.sp_top9_column_slide').length){
		spTopReview();
	}
});

$(window).on('load scroll resize',function() {
	// スクロールでコンテンツを表示
	scrollLoadContents();

	// インジケーターカレント表示
	pageNavigationView();
	
  FixedAnime(); //スクロール途中からヘッダーの高さを変化させる関数を呼ぶ
});
// =========================

var headerH = $('#header').outerHeight(true); //headerの高さを取得
//スクロール途中からヘッダーの高さを変化させるための設定を関数でまとめる
function FixedAnime() {
  //ヘッダーの高さを取得
  var scroll = $(window).scrollTop();
  if (scroll >= headerH) {
    //ヘッダーの高さを超えたら
    $('#header').addClass('HeightMin'); //#headerについているHeightMinというクラス名を付与
  } else {
    $('#header').removeClass('HeightMin'); //HeightMinというクラス名を除去
  }
}

// スクロールでコンテンツを表示
function scrollLoad(){
	$('.animebox').addClass('animeset');
}
function scrollLoadContents() {
	let selectors = $('.animebox');
	let scroll = $(window).scrollTop();
	selectors.each(function() {
		let position = $(this).offset().top - ($(window).height())*0.75;
		if (position < scroll) {
			$(this).addClass('animeon').removeClass('animeset');
		}
	});
}

// インジケーターカレント表示
function pageNavigationView(){
	var scrolltoppoint = $(window).scrollTop();
	var windowheight = $(window).height();
	var docheight = $(document).height();
	var doclast = docheight - windowheight;
	$('section').each(function (i) {
		var targetpoint = $(this).offset().top;
		var linkid = $(this).attr('id');
		if (scrolltoppoint > targetpoint - windowheight + (windowheight * 0.5)) {
			$('.pagenation_link').removeClass('navon');
			var navlink = $('.pagenation_link[href *= ' + linkid +']');
			$(navlink).addClass("navon");
		}
		if (doclast <= scrolltoppoint) {
			$('.pagenation_link').removeClass('navon');
			$('.pagenation_link[href*="#footer"]').addClass('navon');
		}
	});
}


// ページスクローラー
function pageScroll() {
	$('a.spscroll,.spscroll a,#g-navi li a').click(function(){
		var tagnameHref = $(this).attr('href');
		var tagnameTop = $(tagnameHref).offset().top;
		$('html,body').animate({scrollTop: tagnameTop},1000);
		return false;
	});
}

// =========================

// ENJOYスライダー
function spTopEnjoy(){
	var slideMax = 5;
	if(slideMax > $('.sp_top8_slide li').length){
		slideMax = $('.sp_top8_slide li').length;
	}
	$('.sp_top8_slide').slick({
		autoplay: true,
		autoplaySpeed: 1000,
		speed: 1000,
		slidesToShow: slideMax,
		infinite: true,
		arrows: false,
		dots: false,
		swipe: true,
		responsive: [{
			breakpoint: 768,
			settings: {
				slidesToShow: 2,
				arrows: true,
				dots: true,
				centerMode: false,
				variableWidth: true,
			}
		}]
	});
}

// レビュースライダー
function spTopReview(){
	$('.sp_top9_column_slide').slick({
		autoplay: true,
		autoplaySpeed: 3000,
		speed: 1000,
		slidesToShow: 1,
		variableWidth: true,
		infinite: true,
		arrows: false,
		dots: false,
		swipe: true,
		centerMode: true,
		responsive: [{
			breakpoint: 768,
			settings: {
				arrows: true,
				dots: true,
				centerMode: false
			}
		}]
	});
}
