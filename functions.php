<?php 

function wpb_custom_new_menu() {
  register_nav_menus(
    array(
      'my-custom-menu' => __( 'Header Menu' ),
    )
  );
}
add_action( 'init', 'wpb_custom_new_menu' );