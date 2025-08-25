<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class AHEW_Team extends \Elementor\Widget_Base {

    public function get_name() {
        return 'ahew-team';
    }

    public function get_title() {
        return __( 'Team', 'al-hasana-elementor-widget' );
    }

    public function get_icon() {
        return 'eicon-person'; // Elementor default icon
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
             <!-- Team Section Start -->
    <section class="team-section fix section-padding">
        <div class="container">
            <div class="section-title text-center">
                <span class="sub-title wow fadeInUp">
                    Meet with Guide
                </span>
                <h2 class="wow fadeInUp wow" data-wow-delay=".2s">Tour Guide</h2>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp wow" data-wow-delay=".2s">
                    <div class="team-card-item">
                        <div class="team-image">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/team/01.jpg" alt="img">
                        </div>
                        <div class="team-content">
                            <h4><a href="team-details.html">Darlene Robertson</a></h4>
                            <p>Tourist Guide</p>
                            <div class="social-profile">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                                <span class="plus-btn"><i class="fas fa-share-alt"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp wow" data-wow-delay=".4s">
                    <div class="team-card-item">
                        <div class="team-image">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/team/02.jpg" alt="img">
                        </div>
                        <div class="team-content">
                            <h4><a href="team-details.html">Leslie Alexander</a></h4>
                            <p>Tourist Guide</p>
                            <div class="social-profile">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                                <span class="plus-btn"><i class="fas fa-share-alt"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp wow" data-wow-delay=".6s">
                    <div class="team-card-item">
                        <div class="team-image">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/team/03.jpg" alt="img">
                        </div>
                        <div class="team-content">
                            <h4><a href="team-details.html">Ralph Edwards</a></h4>
                            <p>Tourist Guide</p>
                            <div class="social-profile">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                                <span class="plus-btn"><i class="fas fa-share-alt"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp wow" data-wow-delay=".8s">
                    <div class="team-card-item">
                        <div class="team-image">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/team/04.jpg" alt="img">
                        </div>
                        <div class="team-content">
                            <h4><a href="team-details.html">Kathryn Murphy</a></h4>
                            <p>Tourist Guide</p>
                            <div class="social-profile">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                                <span class="plus-btn"><i class="fas fa-share-alt"></i></span>
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
