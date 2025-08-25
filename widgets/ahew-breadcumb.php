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
            'content_section',
            [
                'label' => __( 'Content', 'al-hasana-elementor-widget' ),
                'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'title',
            [
                'label'   => __( 'Title', 'al-hasana-elementor-widget' ),
                'type'    => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Hello World from Widget 1', 'al-hasana-elementor-widget' ),
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
            <!-- breadcrumb-wrappe-Section Start -->
        <section class="breadcrumb-wrapper fix bg-cover" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/breadcrumb/breadcrumb.jpg);">
            <div class="container">
                <div class="row">
                    <div class="page-heading">
                        <h2>Contact Us</h2>
                        <ul class="breadcrumb-list">
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li><i class="fa-solid fa-chevrons-right"></i></li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <?php 
    }
}
