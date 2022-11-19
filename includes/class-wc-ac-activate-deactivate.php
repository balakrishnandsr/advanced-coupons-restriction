<?php
/**
 * Advanced Coupons Initialize
 *
 * @author      Balakrishnan
 * @since       1.0.0
 * @version     1.0.0
 * @package     advanced-coupons-restriction/includes/
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

if ( ! class_exists( 'WC_AC_Activate_Deactivate' ) ) {

    /**
     * Class for handling actions to be performed during activation and deactivation
     */
    class WC_AC_Activate_Deactivate {

        /**
         *Advanced Coupon Activate.
         * @return void
         */
        public static function advanced_coupon_activate() {

           //Silence is golden.

        }


        /**
         * Advanced Coupon Deactivate.
         * @return void
         */
        public static function advanced_coupon_deactivate() {

            //Silence is golden.

        }

    }

}
