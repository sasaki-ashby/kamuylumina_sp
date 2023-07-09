<?php
/*head部分への出力をきれいにする*/
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head' );
remove_action( 'wp_head', 'wp_shortlink_wp_head' );
remove_action( 'wp_head', 'rest_output_link_wp_head' );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
remove_action( 'wp_head', 'wp_oembed_add_host_js' );
/*head部分への出力をきれいにする*/
//remove_action( 'wp_head', 'rel_canonical' );
add_action( 'wp_enqueue_scripts', function () {
	wp_deregister_style( 'wp-block-library' );
} );
//自動保存を無効に
function disable_autosave() {
	wp_deregister_script( 'autosave' );
}
add_action( 'wp_print_scripts', 'disable_autosave' );
//クイックドラフトを無効に
function disable_quickpress() {
	remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
}
add_action( 'wp_dashboard_setup', 'disable_quickpress' );
//p br が壊れるのを禁止
// オートフォーマット関連の無効化
add_action( 'init', function () {
	remove_filter( 'the_title', 'wptexturize' );
	remove_filter( 'the_content', 'wptexturize' );
	remove_filter( 'the_excerpt', 'wptexturize' );
	remove_filter( 'the_title', 'wpautop' );
	remove_filter( 'the_content', 'wpautop' );
	remove_filter( 'the_excerpt', 'wpautop' );
	remove_filter( 'the_editor_content', 'wp_richedit_pre' );
} );
add_filter( 'tiny_mce_before_init', function ( $init ) {
	$init[ 'wpautop' ] = false;
	$init[ 'apply_source_formatting' ] = true;
	return $init;
} );

/*画像自動生成停止*/
function remove_image_sizes( $sizes ) {
	unset( $sizes[ 'thumbnail' ] );
	unset( $sizes[ 'medium' ] );
	unset( $sizes[ 'large' ] );
	unset( $sizes[ 'medium_large' ] );
	unset( $sizes[ '1536x1536' ] );
	unset( $sizes[ '2048x2048' ] );
	return $sizes;
}
// SVGのアップロード
function add_file_types_to_uploads( $file_types ) {
	$new_filetypes = array();
	$new_filetypes[ 'svg' ] = 'image/svg+xml';
	$file_types = array_merge( $file_types, $new_filetypes );
	return $file_types;
}
add_action( 'upload_mimes', 'add_file_types_to_uploads' );
/* メディアページをインデックスしない */
function my_add_noindex_attachment() {
	if ( is_attachment() ) {
		echo '<meta name="robots" content="noindex,follow" />';
	}
}
add_action( 'wp_head', 'my_add_noindex_attachment' );

/* 出力するコードを相対パスに*/
function delete_domain_from_attachment_url( $url ) {
  if ( preg_match( '/^http(s)?:\/\/[^\/\s]+(.*)$/', $url, $match ) ) {
    $url = $match[ 2 ];
  }
  return $url;
}
add_filter( 'wp_get_attachment_url', 'delete_domain_from_attachment_url' );

// バージョン情報非表示
function remove_footer_version() {
	remove_filter( 'update_footer', 'core_update_footer' );
}
add_action( 'admin_menu', 'remove_footer_version' );

// 管理バーの表示オプションとヘルプメニューを非表示にする
function my_admin_head() {
	echo '<style type="text/css">#contextual-help-link-wrap,#screen-options-link-wrap{display:none;}</style>';
}
//add_action( 'admin_head', 'my_admin_head' );

// 管理画面 wordpressロゴ、リンク削除
function remove_admin_bar_menu( $wp_admin_bar ) {
	$wp_admin_bar->remove_menu( 'wp-logo' );
}
add_action( 'admin_bar_menu', 'remove_admin_bar_menu', 70 );

//　ご利用ありがとうございます非表示
add_filter('admin_footer_text', 'custom_admin_footer');
function custom_admin_footer() {}


?>
