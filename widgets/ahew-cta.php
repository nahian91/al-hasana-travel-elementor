<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class AHEW_Cta extends \Elementor\Widget_Base {

    public function get_name() {
        return 'ahew-cta';
    }

    public function get_title() {
        return __( 'CTA', 'al-hasana-elementor-widget' );
    }

    public function get_icon() {
        return 'eicon-call-to-action'; // Elementor default icon
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
<section class="cta-bg-section fix bg-cover" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/cta-bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="cta-wrapper">
                    <div class="section-title text-center">
                        <span class="sub-title text-white wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            Watch Our Story
                        </span>
                        <h2 class="text-white wow fadeInUp wow" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                            We Provide the Best Tour <br>
                            Facilities
                        </h2>
                    </div>
                    <div class="cta-btn wow fadeInUp wow" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                        <a href="tour-details.html" class="theme-btn">Find Out More<i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                        <div class="watch-btn">
                            <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I" data-delay=".7s" class="video-btn video-popup">
                                <i class="fa-duotone fa-play"></i></a>
                            <h6>
                                Watch Video
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <?php 
    }
}
