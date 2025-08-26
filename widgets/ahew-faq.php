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
          <section class="faq-section section-padding pt-0 fix">
        <div class="left-shape float-bob-y">
            <img src="assets/img/tree-shape-2.png" alt="img">
        </div>
        <div class="container">
            <div class="faq-wrapper">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="faq-content">
                            <div class="section-title">
                                <span class="sub-title wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                                    Choose Your Place
                                </span>
                                <h2 class="wow fadeInUp wow" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                    Frequently Asked Questions
                                </h2>
                            </div>
                            <p class="mt-3 mt-mb-0 wow fadeInUp wow" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                                We're not just another agency – we're your digital growth partners. With years of
                                industry experience and a passion for innovation, our team isdedicated to delivering
                                measurable results propel your business forward.
                            </p>
                            <ul class="faq-list wow fadeInUp wow" data-wow-delay=".7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                                <li>
                                    <img src="assets/img/icon/15.svg" alt="img">
                                    Top quality service
                                </li>
                                <li>
                                    <img src="assets/img/icon/15.svg" alt="img">
                                    Most Adventure Tour Ever
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="faq-items">
                            <div class="faq-accordion">
                                <div class="accordion" id="accordion">
                                    <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true" aria-controls="faq1">
                                                How do I book a tour with your agency?
                                            </button>
                                        </h5>
                                        <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Nullam faucibus eleifend mi eu varius. Integer vel tincidunt massa, quis
                                                semper odio.Mauris et mollis quam. Nullam fringilla erat id ante
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                                                What payment methods do you accept?
                                            </button>
                                        </h5>
                                        <div id="faq2" class="accordion-collapse show" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Nullam faucibus eleifend mi eu varius. Integer vel tincidunt massa, quis
                                                semper odio.Mauris et mollis quam. Nullam fringilla erat id ante
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                                                Can I customize my travel itinerary?
                                            </button>
                                        </h5>
                                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Nullam faucibus eleifend mi eu varius. Integer vel tincidunt massa, quis
                                                semper odio.Mauris et mollis quam. Nullam fringilla erat id ante
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                                                What is your cancellation policy?
                                            </button>
                                        </h5>
                                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Nullam faucibus eleifend mi eu varius. Integer vel tincidunt massa, quis
                                                semper odio.Mauris et mollis quam. Nullam fringilla erat id ante
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
