<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class AHEW_About extends \Elementor\Widget_Base {

    public function get_name() {
        return 'ahew-about';
    }

    public function get_title() {
        return __( 'About', 'al-hasana-elementor-widget' );
    }

    public function get_icon() {
        return 'eicon-info-circle-o'; // Elementor default icon
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
            <!-- About-Section Start -->
    <section class="about-section section-padding fix">
        <div class="container">
            <div class="about-wrapper-2">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="about-image">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/about/03.jpg" alt="img">
                            <div class="shape-image float-bob-y">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/about/04.png" alt="img">
                            </div>
                            <div class="group-image float-bob-x">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/about/group.png" alt="img">
                            </div>
                            <div class="about-image-2">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/about/05.jpg" alt="img">
                                <div class="plane-shape">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/img/about/plane-shape2.png" alt="img">
                                </div>
                                <div class="circle-image">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/img/about/circle.png" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-title">
                                <span class="sub-title wow fadeInUp">
                                    Get About Us
                                </span>
                                <h2 class="wow fadeInUp wow" data-wow-delay=".3s">
                                    We're Strived Only For The
                                    Best In The World
                                </h2>
                            </div>
                            <p class="wow fadeInUp wow" data-wow-delay=".5s">
                                There are many variations of passages of available, but the majority have suffered
                                alteration in some form, by injected humour words which don't look even slightly
                                believable injected humour words which
                            </p>
                            <div class="about-items wow fadeInUp wow" data-wow-delay=".3s">
                                <div class="about-icon-items">
                                    <div class="icon">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/img/check.png" alt="img">
                                    </div>
                                    <div class="content">
                                        <h5>
                                            Easy Booking <br> System
                                        </h5>
                                    </div>
                                </div>
                                <div class="text">
                                    <p>
                                        Our hotel also prides itself on <br> offering exceptional services.
                                    </p>
                                </div>
                            </div>
                            <div class="about-items wow fadeInUp wow" data-wow-delay=".5s">
                                <div class="about-icon-items">
                                    <div class="icon">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/img/check.png" alt="img">
                                    </div>
                                    <div class="content">
                                        <h5>
                                            Easy Booking <br> System
                                        </h5>
                                    </div>
                                </div>
                                <div class="text">
                                    <p>
                                        Our hotel also prides itself on <br> offering exceptional services.
                                    </p>
                                </div>
                            </div>
                            <a href="tour-details.html" class="theme-btn wow fadeInUp wow" data-wow-delay=".7s">Discover
                                More<i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <?php 
    }
}
