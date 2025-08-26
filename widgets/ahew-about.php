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
    <section class="about-section section-padding  fix bg-cover" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/about/about-bg.jpg);" id="about">
        <div class="right-shape float-bob-x">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/about/right-shape.png" alt="img">
        </div>
        <div class="container">
            <div class="about-wrapper">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="about-image">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/about/01.png" alt="img" class="wow img-custom-anim-left" style="visibility: visible; animation-name: img-anim-left;">
                            <div class="border-image">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/about/border.png" alt="">
                            </div>
                            <div class="vdeo-item">
                                <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I" class="video-btn video-popup">
                                    <i class="fa-duotone fa-play"></i>
                                </a>
                                <h5>WACTH VIDEO </h5>
                            </div>
                            <div class="about-image-2">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/about/02.png" alt="img" class="wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.3s; animation-name: img-anim-top;">
                                <div class="plane-shape float-bob-y">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/img/about/plane-shape.png" alt="">
                                </div>
                                <div class="about-tour">
                                    <div class="icon">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/img/icon/10.svg" alt="img">
                                    </div>
                                    <div class="content">
                                        <h4>Luxury Tour</h4>
                                        <span>25 years of Experience</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-title">
                                <span class="sub-title wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Let’s Go Together</span>
                                <h2 class="wow fadeInUp wow" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                    Great opportunity for <br>
                                    adventure &amp; travels
                                </h2>
                            </div>
                            <div class="about-area mt-4 mt-md-0">
                                <div class="line-image">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/img/about/Line-image.png" alt="img">
                                </div>
                                <div class="about-items wow fadeInUp wow" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/img/icon/05.svg" alt="img">
                                    </div>
                                    <div class="content">
                                        <h5>
                                            Exclusive Trip
                                        </h5>
                                        <p>
                                            There are many variations of passages <br> of available, but the majority
                                        </p>
                                    </div>
                                </div>
                                <div class="about-items wow fadeInUp wow" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/img/icon/06.svg" alt="img">
                                    </div>
                                    <div class="content">
                                        <h5>
                                            Safety first always
                                        </h5>
                                        <p>
                                            There are many variations of passages <br> of available, but the majority
                                        </p>
                                    </div>
                                </div>
                                <div class="about-items wow fadeInUp wow" data-wow-delay=".7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/img/icon/07.svg" alt="img">
                                    </div>
                                    <div class="content">
                                        <h5>
                                            Professional Guide
                                        </h5>
                                        <p>
                                            There are many variations of passages <br> of available, but the majority
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <?php 
    }
}
