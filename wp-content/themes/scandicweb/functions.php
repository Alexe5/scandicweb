<?php

add_theme_support( 'title-tag' );

add_theme_support('menus');

add_theme_support('post-thumbnails');

function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';

    return $mimes;
}

add_filter('upload_mimes', 'cc_mime_types');

add_action( 'wp_enqueue_scripts', function() {
    wp_dequeue_style( 'classic-theme-styles' );

    wp_deregister_style( 'wp-block-library' );

    wp_dequeue_style( 'global-styles' );
} );

add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css', [], null );

    wp_deregister_script( 'jquery' );

    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', [], null, true );

    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', [], null, true );
}, 1 );

function disable_emojis() {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' ); 
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' ); 
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
    add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
    add_filter( 'wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2 );
}

add_action( 'init', 'disable_emojis' );

function disable_emojis_tinymce( $plugins ) {
    if ( is_array( $plugins ) ) {
    return array_diff( $plugins, array( 'wpemoji' ) );
    } else {
    return array();
    }
}

function disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
    if ( 'dns-prefetch' == $relation_type ) {
        $emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );
        $urls = array_diff( $urls, array( $emoji_svg_url ) );
    }

    return $urls;
}

define( 'DISALLOW_FILE_EDIT', true );

add_shortcode('currency_rate', function($atts) {
    $atts = shortcode_atts([
		'from' => 'usd',
		'to'  => 'eur'
	], $atts);

    return '
        <div class="currency-rate">
            <span class="currency-rate__from">' . $atts['from'] . '</span>
            /
            <span class="currency-rate__to">' . $atts['to'] . '</span>
            -
            <span class="currency-rate__res"></span>
        </div>
    ';
});