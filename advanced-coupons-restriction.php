<?php
/**
 * Plugin Name: Advanced Coupons Restriction
 * Plugin URI:
 * Description: Advanced Coupons for WooCommerce adds extra coupon features.
 * Version: 1.0.0
 * Author:
 * Author URI:
 * Requires at least: 5.2
 * Tested up to: 6.1
 * WC requires at least: 4.0
 * WC tested up to: 7.0
 *
 * Text Domain: advanced-coupons-restriction
 * Domain Path: /i18n/languages/
 *
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

defined( 'ABSPATH' ) or exit;

/**
 * Include class having function to execute during activation & deactivation of plugin
 */
require_once 'includes/class-wc-ac-activate-deactivate.php';

/**
 * On activation
 */
register_activation_hook( __FILE__, array( 'WC_AC_Activate_Deactivate', 'advanced_coupon_activate' ) );

/**
 * On deactivation
 */
register_deactivation_hook( __FILE__, array( 'WC_AC_Activate_Deactivate', 'advanced_coupon_deactivate' ) );

if ( is_woocommerce_active() ) {

    if ( ! defined( 'WC_AC_PLUGIN_FILE' ) ) {
        define( 'WC_AC_PLUGIN_FILE', __FILE__ );
    }
    if ( ! defined( 'WC_AC_PLUGIN_DIRNAME' ) ) {
        define( 'WC_AC_PLUGIN_DIRNAME', dirname( plugin_basename( __FILE__ ) ) );
    }

    include_once 'includes/class-wc-advanced-coupons.php';

    $GLOBALS['woocommerce_advanced_coupon'] = WC_Advanced_Coupons::get_instance();

}
