<?php
require_once __DIR__ . '/inc/def_config.php';
require_once __DIR__ . '/inc/def_functions.php';

global $sp_lang;
// 現在の URL を取得
$current_url = $_SERVER[ 'REQUEST_URI' ];
// 最初のパスセグメントを取得
$first_path_segment = explode( '/', ltrim( $current_url, '/' ) )[ 0 ];
// 最初のパスセグメントが 'sp' の場合は、現在の言語は日本語
// それ以外の場合は、最初のパスセグメントを現在の言語として扱う
$sp_lang = ( $first_path_segment === 'sp' ) ? 'ni' : $first_path_segment;

//記事抜粋表示
function my_excerpt_more( $post ) {
	return '<a href="' . get_permalink( $post->ID ) . '">' . '続きを読む >' . '</a>';
}
add_filter( 'excerpt_more', 'my_excerpt_more' );

//投稿画面にアイキャッチ画像表示
add_theme_support( 'post-thumbnails' );

//検索結果表示時に未入力など結果が無い場合index.phpを使用するのを防ぐ
function search_template_redirect() {
	global $wp_query;
	$wp_query->is_search = true;
	$wp_query->is_home = false;
	if ( file_exists( TEMPLATEPATH . '/search.php' ) ) {
		include( TEMPLATEPATH . '/search.php' );
	}
	exit;
}
if ( isset( $_GET[ 's' ] ) && $_GET[ 's' ] == false ) {
	add_action( 'template_redirect', 'search_template_redirect' );
}

function reorder_admin_menu( $menu_order ) { // 管理画面メニュー：表示順変更
	if ( !$menu_order ) return true;
	return array(
		'index.php', // ダッシュボード
		'edit.php?post_type=cancel', // カスタム投稿
		'edit.php?post_type=enjoy', // カスタム投稿
		'separator1', // 区切り線１
		'edit.php?post_type=mw-wp-form', // カスタム投稿
		'separator2', // 区切り線
		'upload.php', // メディア
		'separator3', // 区切り線１
		'edit.php', // 投稿
		'edit.php?post_type=page', //固定ページ
		'plugins.php', // プラグイン
		'tools.php', // ツール
		'themes.php', // 外観
		'edit-comments.php', // コメント
		'options-general.php', // 設定
		'users.php', // ユーザー
		'profile.php', // ユーザー
	);
}
add_filter( 'custom_menu_order', 'reorder_admin_menu' );
add_filter( 'menu_order', 'reorder_admin_menu' );

function remove_menus() { // 管理画面メニュー非表示設定
	$user = wp_get_current_user();
	if ( !current_user_can( 'administrator' ) ) {
		/*if ( $user->display_name != "HaraHiroki" ) {*/
		remove_menu_page( 'index.php' ); // ダッシュボード
		remove_menu_page( 'edit-comments.php' ); // コメント
		remove_menu_page( 'themes.php' ); // 外観
		remove_menu_page( 'plugins.php' ); // プラグイン
		remove_menu_page( 'tools.php' ); // ツール
		remove_menu_page( 'options-general.php' ); // 設定
		remove_menu_page( 'edit.php?post_type=acf-field-group' );
		remove_menu_page( 'wp-mail-smtp' );
		remove_menu_page( 'cptui_main_menu.php' );
		remove_menu_page( 'plugins.php' );
		remove_menu_page( 'options-general.php' );
		remove_menu_page( 'tools.php' );
		remove_menu_page( 'wp-mail-smtp' );
		remove_menu_page( 'cptui_main_menu' );
	}
}
add_action( 'admin_menu', 'remove_menus' );

//WordPress の投稿スラッグを自動的に生成する
function auto_post_slug( $slug, $post_ID, $post_status, $post_type ) {
	if ( preg_match( '/(%[0-9a-f]{2})+/', $slug ) ) {
		$slug = utf8_uri_encode( $post_type ) . '-' . $post_ID;
	}
	return $slug;
}
add_filter( 'wp_unique_post_slug', 'auto_post_slug', 10, 4 );

function my_custom_post_type_permalinks_rule() {
	//add_rewrite_rule( '([^/]+)/sp/enjoy/?$', 'index.php?post_type=enjoy', 'top' );
	//add_rewrite_rule( 'career_([^/]+)/?$', 'index.php?pagename=career/$matches[1]', 'top' );
	add_rewrite_rule( '^sp/enjoy/([^/]*)/?$', 'index.php?post_type=enjoy&name=$matches[1]', 'top' );
	add_rewrite_rule( '^([^/]*)/sp/enjoy/([^/]*)/?$', 'index.php?post_type=enjoy&name=$matches[2]', 'top' );
	add_rewrite_rule( '^([^/]*)/sp/enjoy/?$', 'index.php?post_type=enjoy', 'top' );

	add_rewrite_rule( '^([^/]*)/sp/?$', 'index.php?pagename=sp', 'top' );
}
add_action( 'init', 'my_custom_post_type_permalinks_rule' );

function send_smtp_email( $phpmailer ) {
	$phpmailer->isSMTP();
	$phpmailer->Host = "sv8233.xserver.jp";
	$phpmailer->SMTPAuth = true;
	$phpmailer->Port = 465;
	$phpmailer->SMTPSecure = "ssl";
	$phpmailer->Username = "contact-form@kamuylumina.jp"; /*メールアドレス*/
	$phpmailer->Password = "Bp98yXYL";
	$phpmailer->From = "contact-form@kamuylumina.jp";
	$phpmailer->FromName = "Kamuy Lumina";
}
add_action( "phpmailer_init", "send_smtp_email" );

//MW WP Form
function my_mwform_error_message( $error, $key, $rule ) {
	if ( $key === 'select' && $rule === 'noempty' ) {
		return '選択してください。';
	}
	return $error;
}
add_filter( 'mwform_error_message_mw-wp-form-140', 'my_mwform_error_message', 10, 3 );
add_filter( 'mwform_error_message_mw-wp-form-171', 'my_mwform_error_message', 10, 3 );
add_filter( 'mwform_error_message_mw-wp-form-175', 'my_mwform_error_message', 10, 3 );
add_filter( 'mwform_error_message_mw-wp-form-183', 'my_mwform_error_message', 10, 3 );
add_filter( 'mwform_error_message_mw-wp-form-186', 'my_mwform_error_message', 10, 3 );

function my_mwform_validation_rule( $Validation, $data ) {
	$message = '必須項目です。';
	if ( empty( $data[ 'join_year' ] ) ) {
		$Validation->set_rule( 'join_year', 'noempty', array( 'message' => $message ) );
	} elseif ( empty( $data[ 'join_month' ] ) ) {
		$Validation->set_rule( 'join_month', 'noempty', array( 'message' => $message ) );
	} elseif ( empty( $data[ 'join_day' ] ) ) {
		$Validation->set_rule( 'join_day', 'noempty', array( 'message' => $message ) );
	}
	return $Validation;
}
add_filter( 'mwform_validation_mw-wp-form-140', 'my_mwform_validation_rule', 10, 3 );
add_filter( 'mwform_validation_mw-wp-form-171', 'my_mwform_validation_rule', 10, 3 );
add_filter( 'mwform_validation_mw-wp-form-175', 'my_mwform_validation_rule', 10, 3 );
add_filter( 'mwform_validation_mw-wp-form-183', 'my_mwform_validation_rule', 10, 3 );
add_filter( 'mwform_validation_mw-wp-form-186', 'my_mwform_validation_rule', 10, 3 );


function add_header_cssjs() {
	global $g_posttype_slug, $g_taxonomy_slug, $g_term_slug, $renewcssflg;
	global $sp_lang;

	if ( is_404() || is_page_template( 'page-sitemap.php' ) ) {} elseif ( is_home() ) {

	} elseif ( is_post_type_archive( 'enjoy' ) ) {
		wp_enqueue_style( 'css-sp-archive-style', get_src( '/assets/sp/article/css/style.css', 'wwwroot' ), array(), null, 'all' );
		wp_enqueue_style( 'css-sp-article_detail-related_article', get_src( '/assets/sp/article_detail/css/related_article.css', 'wwwroot' ), array(), null, 'all' );
	} elseif ( is_singular( 'enjoy' ) ) {
		wp_enqueue_style( 'css-sp-article_detail-style', get_src( '/assets/sp/article_detail/css/style.css', 'wwwroot' ), array(), null, 'all' );
	} elseif ( is_page_template( 'page-sp_index.php' ) ) {
			wp_enqueue_style( 'css-sp-top-style', get_src( '/assets/sp/top/css/style.css', 'wwwroot' ), array(), null, 'all' );
			wp_enqueue_style( 'css-sp-top-slider', get_src( '/assets/sp/top/css/slider.css', 'wwwroot' ), array(), null, 'all' );
			wp_enqueue_style( 'css-sp-top-top_header', get_src( '/assets/sp/top/css/top_header.css', 'wwwroot' ), array(), null, 'all' );
			wp_enqueue_style( 'css-sp-top-slick', get_src( '/assets/sp/top/slick/slick.css', 'wwwroot' ), array(), null, 'all' );
			wp_enqueue_style( 'css-sp-top-sptop', get_src( '/assets/sp/top/css/sptop.css', 'wwwroot' ), array(), null, 'all' );
			if ( $sp_lang == "en" ) {
				//wp_enqueue_style( 'css-sp-top-en_addstyle', get_src( '/assets/sp/top/css/en_addstyle2.css', 'wwwroot' ), array(), null, 'all' );
			}
		}
		/*
		if ( get_field( "code-head" ) ) {
			echo get_field( "code-head" )[ 'add_css' ];
			echo get_field( "code-head" )[ 'add_js' ];
		}*/
}
add_action( 'wp_enqueue_scripts', 'add_header_cssjs' );
//wp_footerに追加
function add_footer_cssjs() {
	global $g_posttype_slug, $g_taxonomy_slug, $g_term_slug;

	wp_enqueue_script( 'js_jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), null, true );
	if ( is_page_template( 'page-sp_index.php' ) ) {
		wp_enqueue_script( 'js-sp-common-global', get_src( '/assets/sp/common/js/global.js', 'wwwroot' ), array(), null, true );
	}

	if ( is_post_type_archive( 'enjoy' ) ) {
		wp_enqueue_script( 'js-sp-enjoy-hamburger_header', get_src( '/assets/sp/common/js/hamburger_header.js', 'wwwroot' ), array(), null, 'all' );
		wp_enqueue_script( 'js-sp-enjoy-article', get_src( '/assets/sp/article/js/article.js', 'wwwroot' ), array(), null, 'all' );
	}

	if ( is_page_template( 'page-sp_index.php' ) ) {

		wp_enqueue_script( 'js-sp-top-insta', get_src( '/assets/sp/top/js/insta.js', 'wwwroot' ), array(), null, true );
		/*		wp_enqueue_script( 'js-sp-top-scroll', get_src( '/assets/sp/top/js/scroll.js', 'wwwroot' ), array(), null, true );
				wp_enqueue_script( 'js-sp-top-top', get_src( '/assets/sp/top/js/top.js', 'wwwroot' ), array(), null, true );*/
		wp_enqueue_script( 'js-sp-top-slick', get_src( '/assets/sp/top/slick/slick.js', 'wwwroot' ), array(), null, true );
		wp_enqueue_script( 'js-sp-top-sptop', get_src( '/assets/sp/top/js/sptop.js', 'wwwroot' ), array(), null, true );
	}
}
add_action( 'wp_footer', 'add_footer_cssjs' );
//wp_footerにjs追加

function tdk_title() {
	global $g_posttype_slug, $g_taxonomy_slug, $g_term_slug;
	global $common_lang_text;
	$title = $common_lang_text[ "カムイルミナ スペシャルサイト" ];

	if ( is_page_template( 'page-sp_index.php' ) ) {

	} elseif ( is_page() ) {

	} else {
		$posttitle = $common_lang_text[ get_post_type_object( get_post_type() )->label ];
		if ( is_single() ) {
			$posttitle = get_the_title() . ' | ' . $posttitle;
		}
		$title = $posttitle . ' | ' . $title;
	}
	return $title;
}

function url_domain_del( $url ) {
	$home_url = home_url(); //ホームのURLを取得する
	$data = str_replace( $home_url, "", $url ); //いらないホームのURLを削除する
	return $data; //出力する
}

function lang_link( $url, $lang, $current_lang ) {
	$parsed_url = $url; // 直接パースされたURLを使用
	if ( $lang !== 'ni' ) {
		// 日本語以外の言語の場合、現在の言語コードを削除する
		$parsed_url = preg_replace( "#^/{$current_lang}(?=/|$)#", '', $parsed_url );
	}
	// 新しい言語のリンクを生成する
	$new_url = ( $lang !== 'ni' ? "/$lang" : '' ) . $parsed_url;
	return $new_url;
}

function lang_link2( $current_url, $target_lang, $current_lang ) {
	if ( $current_lang === 'ni' ) {
		// 現在の言語が日本語の場合、新しい言語パスを最初に追加する
		$new_url = ( $target_lang !== 'ni' ) ? '/' . $target_lang . $current_url : $current_url;
	} else {
		// 現在の言語が日本語以外の場合、言語パスを新しいものに置き換える
		$new_url = ( $target_lang !== 'ni' ) ? preg_replace( '#^/[a-z]+#', '/' . $target_lang, $current_url ) : preg_replace( '#^/[a-z]+#', '', $current_url );
	}
	return $new_url;
}
?>