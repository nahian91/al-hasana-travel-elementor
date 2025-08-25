<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class AHEW_Counter extends \Elementor\Widget_Base {

    public function get_name() {
        return 'ahew-counter';
    }

    public function get_title() {
        return __( 'Counter', 'al-hasana-elementor-widget' );
    }

    public function get_icon() {
        return 'eicon-counter'; // Elementor default icon
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
                <!-- Counter-Section Start -->
    <section class="counter-section theme-bg fix section-bg-3">
        <div class="container">
            <div class="counter-wrapper-3">
                <div class="counter-items wow fadeInUp wow" data-wow-delay=".2s">
                    <div class="icon">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/icon/35.svg" alt="img">
                    </div>
                    <div class="counter-content">
                        <h2><span class="count">100,000</span>+</h2>
                        <p>Our Explorers</p>
                    </div>
                </div>
                <div class="counter-items wow fadeInUp wow" data-wow-delay=".4s">
                    <div class="icon">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/icon/36.svg" alt="img">
                    </div>
                    <div class="counter-content">
                        <h2><span class="count">5,000</span>+</h2>
                        <p>Destinations</p>
                    </div>
                </div>
                <div class="counter-items wow fadeInUp wow" data-wow-delay=".6s">
                    <div class="icon">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/icon/37.svg" alt="img">
                    </div>
                    <div class="counter-content">
                        <h2><span class="count">10,000</span>+</h2>
                        <p>More Trips</p>
                    </div>
                </div>
                <div class="counter-items style-2 wow fadeInUp wow" data-wow-delay=".8s">
                    <div class="icon">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/icon/38.svg" alt="img">
                    </div>
                    <div class="counter-content">
                        <h2><span class="count">2,000</span>+</h2>
                        <p>Luxary Hotel</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <?php 
    }
}
