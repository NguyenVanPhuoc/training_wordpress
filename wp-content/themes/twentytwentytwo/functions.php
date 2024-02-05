<?php
/**
 * Twenty Twenty-Two functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Two
 * @since Twenty Twenty-Two 1.0
 */


if ( ! function_exists( 'twentytwentytwo_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function twentytwentytwo_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );
	}

endif;

add_action( 'after_setup_theme', 'twentytwentytwo_support' );

if ( ! function_exists( 'twentytwentytwo_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function twentytwentytwo_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'twentytwentytwo-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'twentytwentytwo-style' );
	}

endif;

add_action( 'wp_enqueue_scripts', 'twentytwentytwo_styles' );

// Add menu item to admin management page
function add_custom_menu_item() {
    add_menu_page(
        'Phuoc-Vlog',
        'Phuoc Vlog',
        'manage_options',
        'slug-vlog',
        'render_trang_custom_with_filter', 
        'dashicons-admin-page',
        6
    );
}
add_action('admin_menu', 'add_custom_menu_item');

function get_all_posts() {
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => -1,
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            echo '<h2>' . get_the_title() . '</h2>';
            echo '<div class="post-content">' . get_the_content() . '</div>';
        }
        wp_reset_postdata();
    } else {
        echo 'Không có bài viết nào được tìm thấy.';
    }
}

// Wrapper function to render custom page content with filter
function render_trang_custom_with_filter() {
    $title = 'Hook action';
    $title = apply_filters('custom_title', $title);
    render_trang_custom($title); // Call the render_page_custom function with the $title changed
	get_all_posts();
}

// Function to render the content of a custom page
function render_trang_custom($title) {
    echo '<div class="wrap">';
    echo '<h2>Xin chào CO2 thân yêu :)</h2>';
    echo '<p>Mình là <strong>Phước đẹp trai</strong> đây!</p>';
    echo '<p>Đây là bài tập của mình về '.$title.'</p>';
    echo '</div>';
}

function used_filter_custom_title($title) {
    $title = 'Hook filter';
    return $title;
}
// Register filters
add_filter('custom_title', 'used_filter_custom_title', 10, 1);

// Function to change text
function change_media_text($translated_text, $text) {

    if ($text === 'Media') {
        $translated_text = 'Âm nhạc CO2';
    }
    return $translated_text;
}
add_filter('gettext', 'change_media_text', 20, 2);

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';
