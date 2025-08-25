<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class AHEW_Features extends \Elementor\Widget_Base {

    public function get_name() {
        return 'ahew-features';
    }

    public function get_title() {
        return __( 'Features', 'al-hasana-elementor-widget' );
    }

    public function get_icon() {
        return 'eicon-star'; // Elementor default icon
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
             <!-- Travel-Feature-Section Start -->
    <section class="travel-feature-section section-padding fix section-bg">
        <div class="shape-1">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/plane-shape1.png" alt="img">
        </div>
        <div class="shape-2">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/plane-shape2.png" alt="img">
        </div>
        <div class="container">
            <div class="feature-wrapper">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="feature-content">
                            <div class="section-title">
                                <span class="sub-title wow fadeInUp">
                                    Are you ready to travel?
                                </span>
                                <h2 class="wow fadeInUp wow" data-wow-delay=".2s">
                                    World Leading Online Tour Booking Platform
                                </h2>
                            </div>
                            <p class="wow fadeInUp wow" data-wow-delay=".3s">
                                There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form, by injected humour, or randomised words which don't
                                look even slightly believable.
                            </p>
                            <div class="feature-area">
                                <div class="line-shape">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/img/line-shape.png" alt="img">
                                </div>
                                <div class="feature-items wow fadeInUp wow" data-wow-delay=".5s">
                                    <div class="feature-icon-item">
                                        <div class="icon">
                                            <img src="<?php echo get_template_directory_uri();?>/assets/img/icon/08.svg" alt="img">
                                        </div>
                                        <div class="content">
                                            <h5>
                                                Most Adventure <Br>
                                                Tour Ever
                                            </h5>
                                        </div>
                                    </div>
                                    <ul class="circle-icon">
                                        <li>
                                            <i class="fa-solid fa-badge-check"></i>
                                        </li>
                                        <li>
                                            There are many variations of <br>
                                            passages of available,
                                        </li>
                                    </ul>
                                </div>
                                <div class="feature-items wow fadeInUp wow" data-wow-delay=".7s">
                                    <div class="feature-icon-item">
                                        <div class="icon">
                                            <img src="<?php echo get_template_directory_uri();?>/assets/img/icon/09.svg" alt="img">
                                        </div>
                                        <div class="content">
                                            <h5>
                                                Real Tour Starts <br>
                                                from Here
                                            </h5>
                                        </div>
                                    </div>
                                    <ul class="circle-icon">
                                        <li>
                                            <i class="fa-solid fa-badge-check"></i>
                                        </li>
                                        <li>
                                            There are many variations of <br>
                                            passages of available,
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="contact.html" class="theme-btn wow fadeInUp wow" data-wow-delay=".9s">Contact US<i
                                    class="fa-sharp fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="feature-image wow fadeInUp wow" data-wow-delay=".3s">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/man-image.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <?php 
    }
}
