<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class AHEW_Breadcumb extends \Elementor\Widget_Base {

    public function get_name() {
        return 'ahew-breadcumb';
    }

    public function get_title() {
        return __( 'Breadcumb', 'al-hasana-elementor-widget' );
    }

    public function get_icon() {
        return 'eicon-navigation-horizontal'; // Elementor default icon
    }

    public function get_categories() {
        return [ 'ahew-category' ];
    }

    protected function register_controls() {
        $this->start_controls_section(
            'ahew_breadcumb_content_section',
            [
                'label' => __( 'Content', 'al-hasana-elementor-widget' ),
                'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        // Text control
        $this->add_control(
            'ahew_breadcumb_title',
            [
                'label'   => __( 'Title', 'al-hasana-elementor-widget' ),
                'type'    => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Hello World from Breadcumb', 'al-hasana-elementor-widget' ),
            ]
        );

        // Image control
        $this->add_control(
            'ahew_breadcumb_image',
            [
                'label'   => __( 'Upload Image', 'al-hasana-elementor-widget' ),
                'type'    => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        $ahew_breadcumb_title = $settings['ahew_breadcumb_title'];
        $ahew_breadcumb_image = $settings['ahew_breadcumb_image']['url'];
        ?>
            <!-- breadcrumb-wrappe-Section Start -->
        <section class="breadcrumb-wrapper fix bg-cover" style="background-image: url(<?php echo $ahew_breadcumb_image;?>">
            <div class="container">
                <div class="row">
                    <div class="page-heading">
                        <h2><?php echo $ahew_breadcumb_title;?></h2>
                    </div>
                </div>
            </div>
        </section>
        <?php 
    }
}
