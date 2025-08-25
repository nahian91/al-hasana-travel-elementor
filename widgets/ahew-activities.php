<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class AHEW_Activities extends \Elementor\Widget_Base {

    public function get_name() {
        return 'ahew-activities';
    }

    public function get_title() {
        return __( 'Activities', 'al-hasana-elementor-widget' );
    }

    public function get_icon() {
        return 'eicon-bullet-list'; // Elementor default icon
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
             <!-- Activities Section Start -->
        <section class="activities-section fix section-padding">
            <div class="container">
                <div class="row g-4">
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="activities-items">
                            <div class="activities-image">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/activities/01.jpg" alt="img">
                                <div class="post">
                                    (5 Trips)
                                </div>
                            </div>
                            <div class="activities-content">
                                <h4>
                                    <a href="activities-details.html">California</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="activities-items">
                            <div class="activities-image">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/activities/02.jpg" alt="img">
                                <div class="post">
                                    (3 Trips)
                                </div>
                            </div>
                            <div class="activities-content">
                                <h4>
                                    <a href="activities-details.html">All Inclusive </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="activities-items">
                            <div class="activities-image">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/activities/03.jpg" alt="img">
                                <div class="post">
                                    (2 Trips)
                                </div>
                            </div>
                            <div class="activities-content">
                                <h4>
                                    <a href="activities-details.html">Thailand</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="activities-items">
                            <div class="activities-image">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/activities/04.jpg" alt="img">
                                <div class="post">
                                    (4 Trips)
                                </div>
                            </div>
                            <div class="activities-content">
                                <h4>
                                    <a href="activities-details.html">India</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="activities-items">
                            <div class="activities-image">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/activities/05.jpg" alt="img">
                                <div class="post">
                                    (6 Trips)
                                </div>
                            </div>
                            <div class="activities-content">
                                <h4>
                                    <a href="activities-details.html">Sugarland</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="activities-items">
                            <div class="activities-image">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/activities/06.jpg" alt="img">
                                <div class="post">
                                    (3 Trips)
                                </div>
                            </div>
                            <div class="activities-content">
                                <h4>
                                    <a href="activities-details.html">Sugarland</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="activities-items">
                            <div class="activities-image">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/activities/07.jpg" alt="img">
                                <div class="post">
                                    (5 Trips)
                                </div>
                            </div>
                            <div class="activities-content">
                                <h4>
                                    <a href="activities-details.html">India</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="activities-items">
                            <div class="activities-image">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/activities/08.jpg" alt="img">
                                <div class="post">
                                    (6 Trips)
                                </div>
                            </div>
                            <div class="activities-content">
                                <h4>
                                    <a href="activities-details.html">Sugarland</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="activities-items">
                            <div class="activities-image">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/activities/09.jpg" alt="img">
                                <div class="post">
                                    (2 Trips)
                                </div>
                            </div>
                            <div class="activities-content">
                                <h4>
                                    <a href="activities-details.html">Sugarland</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </section>
        <?php 
    }
}
