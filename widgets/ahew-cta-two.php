<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class AHEW_Cta_Two extends \Elementor\Widget_Base {

    public function get_name() {
        return 'ahew-cta-two';
    }

    public function get_title() {
        return __( 'CTA Two', 'al-hasana-elementor-widget' );
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
            <section class="cta-section section-padding fix">
        <div class="container">
            <div class="row g-4">
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp wow" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div class="cta-box-items">
                        <div class="cta-content">
                            <h3>
                                BATUR <br>
                                MOUNTAIN
                            </h3>
                            <div class="shape">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/megh.png" alt="img">
                            </div>
                            <a href="tour-details.html" class="theme-btn">Book Now</a>
                        </div>
                        <div class="cta-image">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/bag.png" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp wow" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                    <div class="cta-box-items style-2">
                        <div class="cta-content">
                            <h3>
                                Adventure <br>
                                awaits
                            </h3>
                            <a href="tour-details.html" class="theme-btn">Book Now</a>
                        </div>
                        <div class="cta-image">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/cta-plane.png" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp wow" data-wow-delay=".7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                    <div class="cta-box-items style-2 bg-color">
                        <div class="cta-content">
                            <h3>
                                Amazing <br>
                                holiday
                            </h3>
                            <a href="tour-details.html" class="theme-btn">Book Now</a>
                        </div>
                        <div class="cta-image">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/cta-bag.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <?php 
    }
}
