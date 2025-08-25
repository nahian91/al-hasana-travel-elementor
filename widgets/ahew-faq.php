<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class AHEW_FAQ extends \Elementor\Widget_Base {

    public function get_name() {
        return 'ahew-faq';
    }

    public function get_title() {
        return __( 'FAQ', 'al-hasana-elementor-widget' );
    }

    public function get_icon() {
        return 'eicon-help-o'; // Elementor default icon
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
            <!-- faq-Section Start -->
        <section class="faq-section section-padding pb-0 fix">
            <div class="container">
                <div class="faq-wrapper">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="faq-items">
                                <div class="faq-accordion">
                                    <div class="accordion" id="accordion2">
                                        <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".1s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true" aria-controls="faq1">
                                                    How to Install WordPress theme on cPanel?
                                                </button>
                                            </h5>
                                            <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    Nullam faucibus eleifend mi eu varius. Integer vel tincidunt massa, quis semper odio.Mauris et mollis quam. Nullam fringilla erat id ante
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".3s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                                                    Do you have Custom Hosting Service?
                                                </button>
                                            </h5>
                                            <div id="faq2" class="accordion-collapse show" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    Nullam faucibus eleifend mi eu varius. Integer vel tincidunt massa, quis semper odio.Mauris et mollis quam. Nullam fringilla erat id ante
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".5s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                                                    Better Security And Faster Server?
                                                </button>
                                            </h5>
                                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    Nullam faucibus eleifend mi eu varius. Integer vel tincidunt massa, quis semper odio.Mauris et mollis quam. Nullam fringilla erat id ante
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".6s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                                                    Deployment Within Few Minutes
                                                </button>
                                            </h5>
                                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    Nullam faucibus eleifend mi eu varius. Integer vel tincidunt massa, quis semper odio.Mauris et mollis quam. Nullam fringilla erat id ante
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="faq-items">
                                <div class="faq-accordion">
                                    <div class="accordion" id="accordion3">
                                        <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".1s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="true" aria-controls="faq5">
                                                    How to Install WordPress theme on cPanel?
                                                </button>
                                            </h5>
                                            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    Nullam faucibus eleifend mi eu varius. Integer vel tincidunt massa, quis semper odio.Mauris et mollis quam. Nullam fringilla erat id ante
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".3s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq6" aria-expanded="false" aria-controls="faq6">
                                                    Do you have Custom Hosting Service?
                                                </button>
                                            </h5>
                                            <div id="faq6" class="accordion-collapse show" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    Nullam faucibus eleifend mi eu varius. Integer vel tincidunt massa, quis semper odio.Mauris et mollis quam. Nullam fringilla erat id ante
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".5s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq7" aria-expanded="false" aria-controls="faq7">
                                                    Better Security And Faster Server?
                                                </button>
                                            </h5>
                                            <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    Nullam faucibus eleifend mi eu varius. Integer vel tincidunt massa, quis semper odio.Mauris et mollis quam. Nullam fringilla erat id ante
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".6s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq8" aria-expanded="false" aria-controls="faq8">
                                                    Deployment Within Few Minutes
                                                </button>
                                            </h5>
                                            <div id="faq8" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    Nullam faucibus eleifend mi eu varius. Integer vel tincidunt massa, quis semper odio.Mauris et mollis quam. Nullam fringilla erat id ante
                                                </div>
                                            </div>
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
