<?php
/*
Plugin Name: Mentor Icon Pack for Codestar Framework
Plugin URI: https://codecanyon.net/user/twinkletheme
Description: This is a Icon Pack for Codestar Framework.
Version: 1.0.0
Author: TwinkleTheme
Author URI: https://codecanyon.net/user/twinkletheme
Text Domain: mentor-icon-pack
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define( 'MENTOR_ICON_PACK_VERSION', '1.0.0' );
define( 'MENTOR_ICON_PACK_ROOT', __FILE__ );
define( 'MENTOR_ICON_PACK_PATH', plugin_dir_path( MENTOR_ICON_PACK_ROOT ) );
define( 'MENTOR_ICON_PACK_URL', plugin_dir_url( MENTOR_ICON_PACK_ROOT ) );
define( 'MENTOR_ICON_PACK_ASSETS', trailingslashit( MENTOR_ICON_PACK_URL . 'assets/' ) );
define( 'MENTOR_ICON_PACK_PLUGIN_BASE', plugin_basename( MENTOR_ICON_PACK_ROOT ) );

class MentorIconPack {

    public function __construct() {
        add_action( 'plugins_loaded', [$this, 'load_textdomain'] );
        add_action( 'plugins_loaded', [$this, 'init'] );
        add_action( 'wp_enqueue_scripts', array( $this, 'load_front_assets' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'load_admin_assets' ) );
    }

    public function load_textdomain() {
        load_plugin_textdomain( 'mentor-icon-pack', FALSE, MENTOR_ICON_PACK_URL . '/languages/' );
    }

    function init() {
        $this->include_files();

        if ( !class_exists( 'CSF_Setup' ) ) {
            add_action( 'admin_notices', array( $this, 'csf_activation_notice' ) );
            return;
        }
    }

    function load_front_assets() {
        wp_enqueue_style( 'dripicon', MENTOR_ICON_PACK_ASSETS . 'vendor/dripicon/css/dripicon.css', array(), '2.0.0', 'all' );
        wp_enqueue_style( 'eicon', MENTOR_ICON_PACK_ASSETS . 'vendor/eicon/css/elementor-icons.min.css', array(), '5.6.2', 'all' );
        wp_enqueue_style( 'elegant-icon', MENTOR_ICON_PACK_ASSETS . 'vendor/elegant-icon/css/elegant-icon.css', array(), '1.0.0', 'all' );
        wp_enqueue_style( 'font-awesome', MENTOR_ICON_PACK_ASSETS . 'vendor/font-awesome/css/fontawesome.min.css', array(), '4.7.0', 'all' );
        wp_enqueue_style( 'gonzoicon', MENTOR_ICON_PACK_ASSETS . 'vendor/gonzoicon/css/gonzoicon.css', array(), '2.0.0', 'all' );
        wp_enqueue_style( 'icofont', MENTOR_ICON_PACK_ASSETS . 'vendor/icofont/css/icofont.min.css', array(), '1.0.1', 'all' );
        wp_enqueue_style( 'iconmonstr', MENTOR_ICON_PACK_ASSETS . 'vendor/iconmonstr/css/iconmonstr-font.min.css', array(), '1.3.0', 'all' );
        wp_enqueue_style( 'line-awesome', MENTOR_ICON_PACK_ASSETS . 'vendor/line-awesome/css/line-awesome.min.css', array(), '1.3.0', 'all' );
        wp_enqueue_style( 'linearicon', MENTOR_ICON_PACK_ASSETS . 'vendor/linearicon/css/linearicon.css', array(), '1.0.0', 'all' );
        wp_enqueue_style( 'lineicons', MENTOR_ICON_PACK_ASSETS . 'vendor/lineicons/css/lineicons.css', array(), '3.0.0', 'all' );
        wp_enqueue_style( 'material-design-icon', MENTOR_ICON_PACK_ASSETS . 'vendor/material-design-icon/css/materialdesignicon.min.css', array(), '3.0.1', 'all' );
        wp_enqueue_style( 'rivolicon', MENTOR_ICON_PACK_ASSETS . 'vendor/rivolicon/css/rivolicon.css', array(), '1.1.0', 'all' );
        wp_enqueue_style( 'stroke-7', MENTOR_ICON_PACK_ASSETS . 'vendor/stroke-7/css/pe-icon-7-stroke.css', array(), '1.2.0', 'all' );
        wp_enqueue_style( 'themify-icons', MENTOR_ICON_PACK_ASSETS . 'vendor/themify-icons/css/themify-icons.css', array(), '1.2.0', 'all' );
    }

    function load_admin_assets() {
        wp_enqueue_style( 'dripicon', MENTOR_ICON_PACK_ASSETS . 'vendor/dripicon/css/dripicon.css', array(), '2.0.0', 'all' );
        wp_enqueue_style( 'eicon', MENTOR_ICON_PACK_ASSETS . 'vendor/eicon/css/elementor-icons.min.css', array(), '5.6.2', 'all' );
        wp_enqueue_style( 'elegant-icon', MENTOR_ICON_PACK_ASSETS . 'vendor/elegant-icon/css/elegant-icon.css', array(), '1.0.0', 'all' );
        wp_enqueue_style( 'font-awesome', MENTOR_ICON_PACK_ASSETS . 'vendor/font-awesome/css/fontawesome.min.css', array(), '4.7.0', 'all' );
        wp_enqueue_style( 'gonzoicon', MENTOR_ICON_PACK_ASSETS . 'vendor/gonzoicon/css/gonzoicon.css', array(), '2.0.0', 'all' );
        wp_enqueue_style( 'icofont', MENTOR_ICON_PACK_ASSETS . 'vendor/icofont/css/icofont.min.css', array(), '1.0.1', 'all' );
        wp_enqueue_style( 'iconmonstr', MENTOR_ICON_PACK_ASSETS . 'vendor/iconmonstr/css/iconmonstr-font.min.css', array(), '1.3.0', 'all' );
        wp_enqueue_style( 'line-awesome', MENTOR_ICON_PACK_ASSETS . 'vendor/line-awesome/css/line-awesome.min.css', array(), '1.3.0', 'all' );
        wp_enqueue_style( 'linearicon', MENTOR_ICON_PACK_ASSETS . 'vendor/linearicon/css/linearicon.css', array(), '1.0.0', 'all' );
        wp_enqueue_style( 'lineicons', MENTOR_ICON_PACK_ASSETS . 'vendor/lineicons/css/lineicons.css', array(), '3.0.0', 'all' );
        wp_enqueue_style( 'material-design-icon', MENTOR_ICON_PACK_ASSETS . 'vendor/material-design-icon/css/materialdesignicon.min.css', array(), '3.0.1', 'all' );
        wp_enqueue_style( 'rivolicon', MENTOR_ICON_PACK_ASSETS . 'vendor/rivolicon/css/rivolicon.css', array(), '1.1.0', 'all' );
        wp_enqueue_style( 'stroke-7', MENTOR_ICON_PACK_ASSETS . 'vendor/stroke-7/css/pe-icon-7-stroke.css', array(), '1.2.0', 'all' );
        wp_enqueue_style( 'themify-icons', MENTOR_ICON_PACK_ASSETS . 'vendor/themify-icons/css/themify-icons.css', array(), '1.2.0', 'all' );
    }

    public function include_files() {
        include_once MENTOR_ICON_PACK_PATH . ( 'includes/dripicon.php' );
        include_once MENTOR_ICON_PACK_PATH . ( 'includes/eicon.php' );
        include_once MENTOR_ICON_PACK_PATH . ( 'includes/elegant.php' );
        include_once MENTOR_ICON_PACK_PATH . ( 'includes/font-awesome.php' );
        include_once MENTOR_ICON_PACK_PATH . ( 'includes/gonzoicon.php' );
        include_once MENTOR_ICON_PACK_PATH . ( 'includes/icofont.php' );
        include_once MENTOR_ICON_PACK_PATH . ( 'includes/iconmonstr.php' );
        include_once MENTOR_ICON_PACK_PATH . ( 'includes/line-awesome.php' );
        include_once MENTOR_ICON_PACK_PATH . ( 'includes/linearicon.php' );
        include_once MENTOR_ICON_PACK_PATH . ( 'includes/lineicons.php' );
        include_once MENTOR_ICON_PACK_PATH . ( 'includes/material-design.php' );
        include_once MENTOR_ICON_PACK_PATH . ( 'includes/rivolicon.php' );
        include_once MENTOR_ICON_PACK_PATH . ( 'includes/stroke-7.php' );
        include_once MENTOR_ICON_PACK_PATH . ( 'includes/themify.php' );
    }

    public function csf_activation_notice() {
        $plugin_data = get_plugin_data( __FILE__ );
        echo '
        <div class="updated">
          <p>' . sprintf( __( '<strong>%s</strong> requires <strong><a href="https://codestarframework.com/" target="_blank">Codestar Framework</a></strong> plugin to be installed and activated on your site.', 'vc_extend' ), esc_html( $plugin_data['Name'] ) ) . '</p>
        </div>';
    }
}

new MentorIconPack();