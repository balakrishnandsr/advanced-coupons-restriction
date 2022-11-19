<?php
/**
 * Main class for Advanced Coupons
 *
 * @author      Balakrishnan
 * @since       1.0.0
 * @version     1.0.0
 *
 * @package     advanced-coupons-restriction/includes/
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

if ( ! class_exists( 'WC_Advanced_Coupons' ) ) {

    /**
     *  Main Advanced Coupons Restriction Class.
     *
     * @return object of WC_Advanced_Coupons having all functionality of Advanced Coupons restriction
     */
    class WC_Advanced_Coupons
    {

        /**
         * Text Domain
         *
         * @var $text_domain
         */
        public static $text_domain = 'advanced-coupons-restriction';

        /**
         * Text Domain
         *
         * @var $text_domain
         */
        public $plugin_data = array();

        /**
         * Variable to hold instance of Advanced Coupons
         *
         * @var $instance
         */
        private static $instance = null;

        /**
         * Get single instance of Advanced Coupons.
         *
         * @return WC_Advanced_Coupons Singleton object of WC_Advanced_Coupons
         */
        public static function get_instance()
        {

            // Check if instance is already exists.
            if (is_null(self::$instance)) {
                self::$instance = new self();
            }

            return self::$instance;
        }

        /**
         * Cloning is forbidden.
         *
         * @since 1.0.0
         */
        private function __clone()
        {
            wc_doing_it_wrong(__FUNCTION__, __('Cheatin&#8217; huh?', 'advanced-coupons-restriction'), '1.0.0');
        }

        /**
         * Unserializing instances of this class is forbidden.
         *
         * @since 1.0.0
         */
        public function __wakeup()
        {
            wc_doing_it_wrong(__FUNCTION__, __('Cheatin&#8217; huh?', 'advanced-coupons-restriction'), '1.0.0');
        }

        /**
         * Constructor
         */
        private function __construct()
        {
            $this->includes();
        }

        /**
         * Includes
         * @return void
         */
        public function includes(){

        }
    }
}
