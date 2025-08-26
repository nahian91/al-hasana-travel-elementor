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
              <section class="counter-section theme-bg fix">
        <div class="container">
            <div class="counter-wrapper">
                <div class="counter-items wow fadeInUp wow" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <div class="counter-content">
                        <h2><span class="count">26</span>+</h2>
                        <p>Years Experiences</p>
                    </div>
                </div>
                <div class="counter-items wow fadeInUp wow" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                    <div class="counter-content">
                        <h2><span class="count">3</span>.6+</h2>
                        <p>Yearly Customers</p>
                    </div>
                </div>
                <div class="counter-items wow fadeInUp wow" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                    <div class="counter-content">
                        <h2><span class="count">46</span>+</h2>
                        <p>Visitors daily</p>
                    </div>
                </div>
                <div class="counter-items style-2 wow fadeInUp wow" data-wow-delay=".8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">
                    <div class="counter-content">
                        <h2><span class="count">56</span>+</h2>
                        <p>Awards &amp; honors</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <?php 
    }
}
