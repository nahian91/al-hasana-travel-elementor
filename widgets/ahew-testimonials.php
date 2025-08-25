<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class AHEW_Testimonials extends \Elementor\Widget_Base {

    public function get_name() {
        return 'ahew-testimonials';
    }

    public function get_title() {
        return __( 'Testimonials', 'al-hasana-elementor-widget' );
    }

    public function get_icon() {
        return 'eicon-testimonial-carousel'; // Elementor default icon
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
            <!-- Testimonial-Section Start -->
    <section class="testimonial-section section-padding fix bg-cover"
        style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/testimonial/testimonial-bg.jpg);">
        <div class="container">
            <div class="testimonial-wrapper-3">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6 wow fadeInUp wow" data-wow-delay=".3s">
                        <div class="testimonial-image">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/testimonial/03.png" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonial-content">
                            <div class="section-title">
                                <span class="sub-title wow fadeInUp">
                                    Testimonial
                                </span>
                                <h2 class="wow fadeInUp wow" data-wow-delay=".2s">
                                    Travelers Love Our locals
                                </h2>
                            </div>
                            <div class="swiper testimonial-slider3">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="testimonial-card-items">
                                            <div class="client-info-items">
                                                <div class="client-info">
                                                    <div class="client-image">
                                                        <img src="<?php echo get_template_directory_uri();?>/assets/img/testimonial/client-4.png" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <h4>
                                                            Kathryn Murphy
                                                        </h4>
                                                        <p>
                                                            Web Designer
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="37"
                                                        viewBox="0 0 50 37" fill="none">
                                                        <path d="M0 0V37L18.75 18.5V0H0ZM31.25 0V37L50 18.5V0H31.25Z"
                                                            fill="#1CA8CB" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <p>
                                                There are many variations of passages of the Lorem Ipsum available, but
                                                the majority have suffered alteration in some form, by injected humour,
                                                or randomised words which don't look even slightly believable.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial-card-items">
                                            <div class="client-info-items">
                                                <div class="client-info">
                                                    <div class="client-image">
                                                        <img src="<?php echo get_template_directory_uri();?>/assets/img/testimonial/client-4.png" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <h4>
                                                            Kathryn Murphy
                                                        </h4>
                                                        <p>
                                                            Web Designer
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="37"
                                                        viewBox="0 0 50 37" fill="none">
                                                        <path d="M0 0V37L18.75 18.5V0H0ZM31.25 0V37L50 18.5V0H31.25Z"
                                                            fill="#1CA8CB" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <p>
                                                There are many variations of passages of the Lorem Ipsum available, but
                                                the majority have suffered alteration in some form, by injected humour,
                                                or randomised words which don't look even slightly believable.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial-card-items">
                                            <div class="client-info-items">
                                                <div class="client-info">
                                                    <div class="client-image">
                                                        <img src="<?php echo get_template_directory_uri();?>/assets/img/testimonial/client-4.png" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <h4>
                                                            Kathryn Murphy
                                                        </h4>
                                                        <p>
                                                            Web Designer
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="37"
                                                        viewBox="0 0 50 37" fill="none">
                                                        <path d="M0 0V37L18.75 18.5V0H0ZM31.25 0V37L50 18.5V0H31.25Z"
                                                            fill="#1CA8CB" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <p>
                                                There are many variations of passages of the Lorem Ipsum available, but
                                                the majority have suffered alteration in some form, by injected humour,
                                                or randomised words which don't look even slightly believable.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="array-button">
                                <button class="array-prev">
                                    <i class="fa-regular fa-arrow-up"></i>
                                </button>
                                <button class="array-next">
                                    <i class="fa-regular fa-arrow-down"></i>
                                </button>
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
