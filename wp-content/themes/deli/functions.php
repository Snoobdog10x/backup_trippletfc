<?php
/**
 * Deli engine room
 *
 * @package deli
 */

/**
 * Set the theme version number as a global variable
 */
$theme				= wp_get_theme( 'deli' );
$deli_version		= $theme['Version'];

$theme				= wp_get_theme( 'storefront' );
$storefront_version	= $theme['Version'];

/**
 * Load the individual classes required by this theme
 */
require_once( 'inc/class-deli.php' );
require_once( 'inc/class-deli-customizer.php' );
require_once( 'inc/class-deli-template.php' );
require_once( 'inc/class-deli-integrations.php' );
require_once( 'inc/plugged.php' );

/**
 * Do not add custom code / snippets here.
 * While Child Themes are generally recommended for customisations, in this case it is not
 * wise. Modifying this file means that your changes will be lost when an automatic update
 * of this theme is performed. Instead, add your customisations to a plugin such as
 * https://github.com/woothemes/theme-customisations
 */
add_filter( 'bulk_actions-edit-shop_order', 'custom_shop_order_bulk_actions', 999 );
function custom_shop_order_bulk_actions( $actions ) {
    //Remove on hold and processing status from bulk actions
    unset( $actions['mark_on-hold'], $actions['mark_processing'], $actions['mark_completed']);
    return $actions;
}

add_filter( 'woocommerce_before_order_object_save', 'prevent_order_status_change', 10, 2 );

function prevent_order_status_change( $order, $data_store ) {
    // Below define the disallowed user roles
    $disallowed_user_roles = array( 'shop_manager');

    $changes = $order->get_changes();

    if( ! empty($changes) && isset($changes['status']) ) {
        $old_status    = str_replace( 'wc-', '', get_post_status($order->get_id()) );
        $new_status    = $changes['status'];
        $user          = wp_get_current_user();

        // Avoid status change from "processing" to "on-hold"
        if ( 'cancelled' === $old_status && 'completed' === $new_status||'completed' === $old_status && 'cancelled' === $new_status) {
			$message = sprintf( __("You can not change order from %s to %s.", "woocommerce" ), $old_status, $new_status );
			echo '<script language="javascript">';
			echo 'alert("$message")';
			echo '</script>';
            throw new Exception($message);
            return false;
        }
    }
    return $order;
}
add_action( 'init', 'remove_sf_actions' );
function remove_sf_actions() {
	remove_action( 'storefront_header', 'storefront_product_search', 40 );
}