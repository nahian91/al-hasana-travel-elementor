<?php
/**
 * Plugin Name:       Al Hasana Elementor Widget
 * Description:       A collection of custom Elementor widgets for Al Hasana projects.
 * Version:           1.0.0
 * Author:            Al Hasana
 * Author URI:        https://alhasana.com/
 * Text Domain:       alhasana-elementor-widget
 * Domain Path:       /languages
 *
 * Requires Plugins:  elementor
 * Elementor tested up to: 3.25.0
 * Elementor Pro tested up to: 3.25.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Prevent direct access.
}

/**
 * Define plugin constants.
 */
define( 'AHEW_VERSION', '1.0.0' );
define( 'AHEW_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'AHEW_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

/**
 * Load plugin text domain.
 */
function ahew_load_textdomain() {
    load_plugin_textdomain( 'alhasana-elementor-widget', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
}
add_action( 'plugins_loaded', 'ahew_load_textdomain' );

/**
 * Check if Elementor is installed and active.
 */
function ahew_is_elementor_active() {
    return did_action( 'elementor/loaded' );
}

/**
 * Admin notice if Elementor is not active.
 */
function ahew_admin_notice_missing_elementor() {
    if ( ahew_is_elementor_active() ) {
        return;
    }
    ?>
    <div class="notice notice-error is-dismissible">
        <p>
            <?php esc_html_e( 'Al Hasana Elementor Widget requires Elementor to be installed and active.', 'alhasana-elementor-widget' ); ?>
        </p>
    </div>
    <?php
}
add_action( 'admin_notices', 'ahew_admin_notice_missing_elementor' );

/**
 * Register custom Elementor category
 */
function ahew_register_category( $elements_manager ) {
    $elements_manager->add_category(
        'ahew-category',
        [
            'title' => __( 'Al Hasana Widgets', 'alhasana-elementor-widget' ),
            'icon'  => 'fa fa-plug',
        ]
    );
}
add_action( 'elementor/elements/categories_registered', 'ahew_register_category' );

/**
 * Register widgets
 */
function ahew_register_widgets( $widgets_manager ) {
    if ( ! ahew_is_elementor_active() ) {
        return;
    }

    // Include widget class files
    require_once AHEW_PLUGIN_DIR . 'widgets/ahew-breadcumb.php';
    require_once AHEW_PLUGIN_DIR . 'widgets/ahew-faq.php';
    require_once AHEW_PLUGIN_DIR . 'widgets/ahew-features.php';
    require_once AHEW_PLUGIN_DIR . 'widgets/ahew-counter.php';
    require_once AHEW_PLUGIN_DIR . 'widgets/ahew-team.php';
    require_once AHEW_PLUGIN_DIR . 'widgets/ahew-contact-info.php';
    require_once AHEW_PLUGIN_DIR . 'widgets/ahew-blog-grid.php';
    require_once AHEW_PLUGIN_DIR . 'widgets/ahew-cta.php';
    require_once AHEW_PLUGIN_DIR . 'widgets/ahew-testimonials.php';
    require_once AHEW_PLUGIN_DIR . 'widgets/ahew-hero.php';
    require_once AHEW_PLUGIN_DIR . 'widgets/ahew-about.php';
    require_once AHEW_PLUGIN_DIR . 'widgets/ahew-category.php';
    require_once AHEW_PLUGIN_DIR . 'widgets/ahew-activities.php';
    require_once AHEW_PLUGIN_DIR . 'widgets/ahew-destination.php';
    require_once AHEW_PLUGIN_DIR . 'widgets/ahew-tour.php';
    require_once AHEW_PLUGIN_DIR . 'widgets/ahew-cta-two.php';
    require_once AHEW_PLUGIN_DIR . 'widgets/ahew-airlines.php';
    require_once AHEW_PLUGIN_DIR . 'widgets/ahew-packages.php';

    // Register widgets
    $widgets_manager->register( new \AHEW_Team() );
    $widgets_manager->register( new \AHEW_FAQ() );
    $widgets_manager->register( new \AHEW_Features() );
    $widgets_manager->register( new \AHEW_Counter() );
    $widgets_manager->register( new \AHEW_Breadcumb() );
    $widgets_manager->register( new \AHEW_Contact_Info() );
    $widgets_manager->register( new \AHEW_Blog_Grid() );
    $widgets_manager->register( new \AHEW_Cta() );
    $widgets_manager->register( new \AHEW_Cta_Two() );
    $widgets_manager->register( new \AHEW_Testimonials() );
    $widgets_manager->register( new \AHEW_Hero() );
    $widgets_manager->register( new \AHEW_About() );
    $widgets_manager->register( new \AHEW_Category() );
    $widgets_manager->register( new \AHEW_Activities() );
    $widgets_manager->register( new \AHEW_Destination() );
    $widgets_manager->register( new \AHEW_Tour() );
    $widgets_manager->register( new \AHEW_Airlines() );
    $widgets_manager->register( new \AHEW_Tour_Category() );
}
add_action( 'elementor/widgets/register', 'ahew_register_widgets' );
