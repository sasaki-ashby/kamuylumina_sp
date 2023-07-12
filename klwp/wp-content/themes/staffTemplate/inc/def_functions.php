<?php

function get_src( $filename, $relative = false ) {
	$src = get_template_directory_uri() . $filename;
	if ( $relative ) {
		$home_url = parse_url( home_url() );
		$src = str_replace( $home_url[ 'scheme' ] . '://' . $home_url[ 'host' ], '', $src );
		if ( $relative === "wwwroot" ) {
			$src = home_url() . $filename;
		}
	}
	return esc_attr( $src );
}

function add_header_cssjs_def() {
	wp_deregister_script( 'jquery' );
	wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), '3.6.0', false );
}
add_action( 'wp_enqueue_scripts', 'add_header_cssjs_def' );
add_action( 'admin_enqueue_scripts', 'add_header_cssjs_def' );

function add_header_cssjs_add() {
	global $g_posttype_slug;


}
add_action( 'wp_enqueue_scripts', 'add_header_cssjs_add' );

function my_setup_wp() {
	/*投稿系の情報を取得*/
	global $g_posttype_slug, $g_taxonomy_slug, $g_term_slug;
	if ( is_home() ) {
		$g_posttype_slug = "home";
	} else {
		switch ( get_post_type( get_the_ID() ) ) {
			case 'post':
				/*投稿*/
				$g_posttype_slug = "news";
				$g_taxonomy_slug = "";
				$g_term_slug = get_the_category()[ 0 ]->slug;
				break;
			case 'page':
				/*固定ページ*/
				$cat = get_the_category();
				if ( count( $cat ) === 0 ) {
					$g_posttype_slug = get_post_field( 'post_name', get_the_ID() );
				} else {
					$g_posttype_slug = $cat[ 0 ]->slug;
				}
				$g_taxonomy_slug = "";
				$g_term_slug = get_post( get_the_ID() )->post_name;
				break;
			default:
				$g_posttype_slug = get_post_type_object( get_post_type() )->name;
				if ( $g_posttype_slug == NULL ) {
					$g_posttype_slug = get_query_var( 'post_type' );
				}
				//var_dump($g_posttype_slug);

				$g_taxonomy_slug = get_query_var( 'taxonomy' );
				if ( $g_taxonomy_slug == NULL ) {
					$g_taxonomy_slug = "";
				}

				$g_term_slug = get_query_var( 'term' );
				if ( $g_term_slug == NULL ) {
					$g_term_slug = "";
				}

				break;
		}
	}
}
add_action( 'wp', 'my_setup_wp' );

function basic_auth( $auth_list, $realm = "Restricted Area", $failed_text = "認証に失敗しました" ) {
	if ( isset( $_SERVER[ 'PHP_AUTH_USER' ] )and isset( $auth_list[ $_SERVER[ 'PHP_AUTH_USER' ] ] ) ) {
		if ( $auth_list[ $_SERVER[ 'PHP_AUTH_USER' ] ] == $_SERVER[ 'PHP_AUTH_PW' ] ) {
			return $_SERVER[ 'PHP_AUTH_USER' ];
		}
	}
	header( 'WWW-Authenticate: Basic realm="' . $realm . '"' );
	header( 'HTTP/1.0 401 Unauthorized' );
	header( 'Content-type: text/html; charset=' . mb_internal_encoding() );

	die( $failed_text );
}

?>
