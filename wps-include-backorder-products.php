<?php
/**
 * Plugin Name: WPS Include Backorder Products
 * Plugin URI: https://github.com/geotsiokos/wps-include-backorder-products.git
 * Description: Include products that are onbackorder when using the <a href="https://woocommerce.com/products/woocommerce-product-search/">WooCommerce Product Search</a>
 * Version: 1.0.0
 * Author: gtsiokos
 * Author URI: http://www.netpad.gr
 * Donate-Link: http://www.netpad.gr
 * License: GPLv3
 */

if ( !defined( 'ABSPATH' ) ) {
	exit;
}
class Wps_Include_Backorder_Products {

	public static function init() {
		add_filter( 'woocommerce_product_search_engine_stage_parameters', array( __CLASS__, 'woocommerce_product_search_engine_stage_parameters' ), 10, 2 );
	}

	public static function woocommerce_product_search_engine_stage_parameters( $args, $stage ) {
		error_log( 'arguments' );
		error_log( print_r( $args, true ) );
		$args['stock'] = 'instock,onbackorder';
		return $args;
	}
} Wps_Include_Backorder_Products::init();