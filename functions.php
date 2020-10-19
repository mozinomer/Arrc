<?php 

function wpb_custom_new_menu() {
  register_nav_menus(
    array(
      'my-custom-menu' => __( 'Header Menu' ),
    )
  );
}
add_action( 'init', 'wpb_custom_new_menu' );

add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {
  if( function_exists('acf_add_options_page') ) {
    $option_page = acf_add_options_page(array(
      'page_title'    => __('Theme General Settings'),
      'menu_title'    => __('Theme Settings'),
      'menu_slug'     => 'theme-general-settings',
      'capability'    => 'edit_posts',
      'redirect'      => false
    ));
  }
}
// Add Shortcode
function BannerHome() 
{
  get_template_part( 'banenr_home', 'page' );
}
add_shortcode( 'BannerHome', 'BannerHome' );
function ClientHappy() 
{
  get_template_part( 'clientHappy', 'page' );
}
add_shortcode( 'ClientHappy', 'ClientHappy' );
function biomulation() 
{
  get_template_part( 'biomulation', 'page' );
}
add_shortcode( 'biomulation', 'biomulation' );
function bio_slider() 
{
  get_template_part( 'bio-slider', 'page' );
}
add_shortcode( 'bio-slider', 'bio_slider' );