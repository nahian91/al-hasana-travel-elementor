<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class AHEW_Destination extends \Elementor\Widget_Base {

    public function get_name() {
        return 'ahew-destination';
    }

    public function get_title() {
        return __( 'Destination', 'al-hasana-elementor-widget' );
    }

    public function get_icon() {
        return 'eicon-map-pin'; // Elementor default icon
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
            <!-- Popular-destination Section Start -->
       <section class="popular-destination-section section-padding">
        <div class="container">
            <div class="row g-4">
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp wow" data-wow-delay=".2s">
                    <div class="destination-card-items mt-0">
                        <div class="destination-image">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/destination/01.jpg" alt="img">
                            <div class="heart-icon">
                                <i class="fa-regular fa-heart"></i>
                            </div>
                        </div>
                        <div class="destination-content">
                            <ul class="meta">
                                <li>
                                    <i class="fa-thin fa-location-dot"></i>
                                    Indonesia
                                </li>
                                <li class="rating">
                                    <div class="star">
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                    <p>4.7</p>
                                </li>
                            </ul>
                            <h5>
                                <a href="destination-details.html">
                                    Brooklyn Beach Resort Tour
                                </a>
                            </h5>
                            <ul class="info">
                                <li>
                                    <i class="fa-regular fa-clock"></i>
                                     10 Days
                                </li>
                                <li>
                                    <i class="fa-thin fa-users"></i>
                                     50+
                                </li>
                            </ul>
                            <div class="price">
                                <h6>$59.00<span>/Per day</span></h6>
                                <a href="destination-details.html" class="theme-btn style-2">Book Now<i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp wow" data-wow-delay=".4s">
                    <div class="destination-card-items mt-0">
                        <div class="destination-image">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/destination/02.jpg" alt="img">
                            <div class="heart-icon">
                                <i class="fa-regular fa-heart"></i>
                            </div>
                        </div>
                        <div class="destination-content">
                            <ul class="meta">
                                <li>
                                    <i class="fa-thin fa-location-dot"></i>
                                    Indonesia
                                </li>
                                <li class="rating">
                                    <div class="star">
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                    <p>4.7</p>
                                </li>
                            </ul>
                            <h5>
                                <a href="destination-details.html">
                                    Pak Chumphon Town Tour 
                                </a>
                            </h5>
                            <ul class="info">
                                <li>
                                    <i class="fa-regular fa-clock"></i>
                                     10 Days
                                </li>
                                <li>
                                    <i class="fa-thin fa-users"></i>
                                     50+
                                </li>
                            </ul>
                            <div class="price">
                                <h6>$59.00<span>/Per day</span></h6>
                                <a href="destination-details.html" class="theme-btn style-2">Book Now<i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp wow" data-wow-delay=".6s">
                    <div class="destination-card-items mt-0">
                        <div class="destination-image">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/destination/03.jpg" alt="img">
                            <div class="heart-icon">
                                <i class="fa-regular fa-heart"></i>
                            </div>
                        </div>
                        <div class="destination-content">
                            <ul class="meta">
                                <li>
                                    <i class="fa-thin fa-location-dot"></i>
                                    Indonesia
                                </li>
                                <li class="rating">
                                    <div class="star">
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                    <p>4.7</p>
                                </li>
                            </ul>
                            <h5>
                                <a href="destination-details.html">
                                    Java & Bali One Life Adventure 
                                </a>
                            </h5>
                            <ul class="info">
                                <li>
                                    <i class="fa-regular fa-clock"></i>
                                     10 Days
                                </li>
                                <li>
                                    <i class="fa-thin fa-users"></i>
                                     50+
                                </li>
                            </ul>
                            <div class="price">
                                <h6>$59.00<span>/Per day</span></h6>
                                <a href="destination-details.html" class="theme-btn style-2">Book Now<i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp wow" data-wow-delay=".8s">
                    <div class="destination-card-items mt-0">
                        <div class="destination-image">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/destination/04.jpg" alt="img">
                            <div class="heart-icon">
                                <i class="fa-regular fa-heart"></i>
                            </div>
                        </div>
                        <div class="destination-content">
                            <ul class="meta">
                                <li>
                                    <i class="fa-thin fa-location-dot"></i>
                                    Indonesia
                                </li>
                                <li class="rating">
                                    <div class="star">
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                    <p>4.7</p>
                                </li>
                            </ul>
                            <h5>
                                <a href="destination-details.html">
                                    Places To Travel In November
                                </a>
                            </h5>
                            <ul class="info">
                                <li>
                                    <i class="fa-regular fa-clock"></i>
                                     10 Days
                                </li>
                                <li>
                                    <i class="fa-thin fa-users"></i>
                                     50+
                                </li>
                            </ul>
                            <div class="price">
                                <h6>$59.00<span>/Per day</span></h6>
                                <a href="destination-details.html" class="theme-btn style-2">Book Now<i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp wow" data-wow-delay=".2s">
                    <div class="destination-card-items mt-0">
                        <div class="destination-image">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/destination/05.jpg" alt="img">
                            <div class="heart-icon">
                                <i class="fa-regular fa-heart"></i>
                            </div>
                        </div>
                        <div class="destination-content">
                            <ul class="meta">
                                <li>
                                    <i class="fa-thin fa-location-dot"></i>
                                    Indonesia
                                </li>
                                <li class="rating">
                                    <div class="star">
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                    <p>4.7</p>
                                </li>
                            </ul>
                            <h5>
                                <a href="destination-details.html">
                                    Brooklyn Beach Resort Tour
                                </a>
                            </h5>
                            <ul class="info">
                                <li>
                                    <i class="fa-regular fa-clock"></i>
                                     10 Days
                                </li>
                                <li>
                                    <i class="fa-thin fa-users"></i>
                                     50+
                                </li>
                            </ul>
                            <div class="price">
                                <h6>$59.00<span>/Per day</span></h6>
                                <a href="destination-details.html" class="theme-btn style-2">Book Now<i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp wow" data-wow-delay=".4s">
                    <div class="destination-card-items mt-0">
                        <div class="destination-image">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/destination/06.jpg" alt="img">
                            <div class="heart-icon">
                                <i class="fa-regular fa-heart"></i>
                            </div>
                        </div>
                        <div class="destination-content">
                            <ul class="meta">
                                <li>
                                    <i class="fa-thin fa-location-dot"></i>
                                    Indonesia
                                </li>
                                <li class="rating">
                                    <div class="star">
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                    <p>4.7</p>
                                </li>
                            </ul>
                            <h5>
                                <a href="destination-details.html">
                                    Pak Chumphon Town Tour 
                                </a>
                            </h5>
                            <ul class="info">
                                <li>
                                    <i class="fa-regular fa-clock"></i>
                                     10 Days
                                </li>
                                <li>
                                    <i class="fa-thin fa-users"></i>
                                     50+
                                </li>
                            </ul>
                            <div class="price">
                                <h6>$59.00<span>/Per day</span></h6>
                                <a href="destination-details.html" class="theme-btn style-2">Book Now<i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp wow" data-wow-delay=".6s">
                    <div class="destination-card-items mt-0">
                        <div class="destination-image">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/destination/07.jpg" alt="img">
                            <div class="heart-icon">
                                <i class="fa-regular fa-heart"></i>
                            </div>
                        </div>
                        <div class="destination-content">
                            <ul class="meta">
                                <li>
                                    <i class="fa-thin fa-location-dot"></i>
                                    Indonesia
                                </li>
                                <li class="rating">
                                    <div class="star">
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                    <p>4.7</p>
                                </li>
                            </ul>
                            <h5>
                                <a href="destination-details.html">
                                    Brooklyn Beach Resort Tour
                                </a>
                            </h5>
                            <ul class="info">
                                <li>
                                    <i class="fa-regular fa-clock"></i>
                                     10 Days
                                </li>
                                <li>
                                    <i class="fa-thin fa-users"></i>
                                     50+
                                </li>
                            </ul>
                            <div class="price">
                                <h6>$59.00<span>/Per day</span></h6>
                                <a href="destination-details.html" class="theme-btn style-2">Book Now<i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp wow" data-wow-delay=".8s">
                    <div class="destination-card-items mt-0">
                        <div class="destination-image">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/destination/08.jpg" alt="img">
                            <div class="heart-icon">
                                <i class="fa-regular fa-heart"></i>
                            </div>
                        </div>
                        <div class="destination-content">
                            <ul class="meta">
                                <li>
                                    <i class="fa-thin fa-location-dot"></i>
                                    Indonesia
                                </li>
                                <li class="rating">
                                    <div class="star">
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                    <p>4.7</p>
                                </li>
                            </ul>
                            <h5>
                                <a href="destination-details.html">
                                    Java & Bali One Life Adventure
                                </a>
                            </h5>
                            <ul class="info">
                                <li>
                                    <i class="fa-regular fa-clock"></i>
                                     10 Days
                                </li>
                                <li>
                                    <i class="fa-thin fa-users"></i>
                                     50+
                                </li>
                            </ul>
                            <div class="price">
                                <h6>$59.00<span>/Per day</span></h6>
                                <a href="destination-details.html" class="theme-btn style-2">Book Now<i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-nav-wrap text-center">
                <ul>
                    <li><a class="page-numbers" href="#"><i class="fal fa-long-arrow-left"></i></a></li>
                    <li><a class="page-numbers" href="#">01</a></li>
                    <li><a class="page-numbers" href="#">02</a></li>
                    <li><a class="page-numbers" href="#">03</a></li>
                    <li><a class="page-numbers" href="#"><i class="fal fa-long-arrow-right"></i></a></li>
                </ul>
            </div>
        </div>
       </section>
        <?php 
    }
}
