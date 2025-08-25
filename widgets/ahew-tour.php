<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class AHEW_Tour extends \Elementor\Widget_Base {

    public function get_name() {
        return 'ahew-tour';
    }

    public function get_title() {
        return __( 'Tour', 'al-hasana-elementor-widget' );
    }

    public function get_icon() {
        return 'eicon-kit-details'; // Elementor default icon
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
                 <section class="tour-section section-padding fix">
            <div class="container custom-container">
                <div class="tour-destination-wrapper">
                    <div class="row g-4">
                        <div class="col-xl-8">
                            <div class="row g-4">
                                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp wow" data-wow-delay=".3s">
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
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <p>4.7</p>
                                                </li>
                                            </ul>
                                            <h5>
                                                <a href="tour-details.html">
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
                                                <a href="tour-details.html" class="theme-btn style-2">Book Now<i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp wow" data-wow-delay=".5s">
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
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <p>4.7</p>
                                                </li>
                                            </ul>
                                            <h5>
                                                <a href="tour-details.html">
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
                                                <a href="tour-details.html" class="theme-btn style-2">Book Now<i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp wow" data-wow-delay=".7s">
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
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <p>4.7</p>
                                                </li>
                                            </ul>
                                            <h5>
                                                <a href="tour-details.html">
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
                                                <a href="tour-details.html" class="theme-btn style-2">Book Now<i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp wow" data-wow-delay=".3s">
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
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <p>4.7</p>
                                                </li>
                                            </ul>
                                            <h5>
                                                <a href="tour-details.html">
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
                                                <a href="tour-details.html" class="theme-btn style-2">Book Now<i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp wow" data-wow-delay=".5s">
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
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <p>4.7</p>
                                                </li>
                                            </ul>
                                            <h5>
                                                <a href="tour-details.html">
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
                                                <a href="tour-details.html" class="theme-btn style-2">Book Now<i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp wow" data-wow-delay=".7s">
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
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <p>4.7</p>
                                                </li>
                                            </ul>
                                            <h5>
                                                <a href="tour-details.html">
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
                                                <a href="tour-details.html" class="theme-btn style-2">Book Now<i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp wow" data-wow-delay=".3s">
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
                                                        <i class="fa-solid fa-star"></i>
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
                                                <a href="tour-details.html" class="theme-btn style-2">Book Now<i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp wow" data-wow-delay=".5s">
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
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <p>4.7</p>
                                                </li>
                                            </ul>
                                            <h5>
                                                <a href="tour-details.html">
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
                                                <a href="tour-details.html" class="theme-btn style-2">Book Now<i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp wow" data-wow-delay=".7s">
                                    <div class="destination-card-items mt-0">
                                        <div class="destination-image">
                                            <img src="<?php echo get_template_directory_uri();?>/assets/img/destination/tour1.jpg" alt="img">
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
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <p>4.7</p>
                                                </li>
                                            </ul>
                                            <h5>
                                                <a href="tour-details.html">
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
                                                <a href="tour-details.html" class="theme-btn style-2">Book Now<i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp wow" data-wow-delay=".3s">
                                    <div class="destination-card-items mt-0">
                                        <div class="destination-image">
                                            <img src="<?php echo get_template_directory_uri();?>/assets/img/destination/tour2.jpg" alt="img">
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
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <p>4.7</p>
                                                </li>
                                            </ul>
                                            <h5>
                                                <a href="tour-details.html">
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
                                                <a href="tour-details.html" class="theme-btn style-2">Book Now<i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp wow" data-wow-delay=".5s">
                                    <div class="destination-card-items mt-0">
                                        <div class="destination-image">
                                            <img src="<?php echo get_template_directory_uri();?>/assets/img/destination/tour3.jpg" alt="img">
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
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <p>4.7</p>
                                                </li>
                                            </ul>
                                            <h5>
                                                <a href="tour-details.html">
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
                                                <a href="tour-details.html" class="theme-btn style-2">Book Now<i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp wow" data-wow-delay=".3s">
                                    <div class="destination-card-items mt-0">
                                        <div class="destination-image">
                                            <img src="<?php echo get_template_directory_uri();?>/assets/img/destination/tour4.jpg" alt="img">
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
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <p>4.7</p>
                                                </li>
                                            </ul>
                                            <h5>
                                                <a href="tour-details.html">
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
                                                <a href="tour-details.html" class="theme-btn style-2">Book Now<i class="fa-sharp fa-regular fa-arrow-right"></i></a>
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
                        <div class="col-xl-4">
                            <div class="main-sidebar mt-0">
                                <div class="single-sidebar-widget">
                                    <div class="wid-title">
                                        <h3>Destination Category</h3>
                                    </div>
                                    <div class="categories-list">
                                        <label class="checkbox-single d-flex justify-content-between align-items-center">
                                            <span class="d-flex gap-xl-3 gap-2 align-items-center">
                                                <span class="checkbox-area d-center">
                                                    <input type="checkbox">
                                                    <span class="checkmark d-center"></span>
                                                </span>
                                                <span class="text-color">
                                                    Canada
                                                </span>
                                            </span>
                                            <span class="text-color">04</span>
                                        </label>
                                        <label class="checkbox-single d-flex justify-content-between align-items-center">
                                            <span class="d-flex gap-xl-3 gap-2 align-items-center">
                                                <span class="checkbox-area d-center">
                                                    <input type="checkbox">
                                                    <span class="checkmark d-center"></span>
                                                </span>
                                                <span class="text-color">
                                                    Europe
                                                </span>
                                            </span>
                                            <span class="text-color">03</span>
                                        </label>
                                        <label class="checkbox-single d-flex justify-content-between align-items-center">
                                            <span class="d-flex gap-xl-3 gap-2 align-items-center">
                                                <span class="checkbox-area d-center">
                                                    <input type="checkbox">
                                                    <span class="checkmark d-center"></span>
                                                </span>
                                                <span class="text-color">
                                                    France
                                                </span>
                                            </span>
                                            <span class="text-color">05</span>
                                        </label>
                                        <label class="checkbox-single d-flex justify-content-between align-items-center">
                                            <span class="d-flex gap-xl-3 gap-2 align-items-center">
                                                <span class="checkbox-area d-center">
                                                    <input type="checkbox" checked="checked">
                                                    <span class="checkmark d-center"></span>
                                                </span>
                                                <span class="text-color">
                                                    Indonesia
                                                </span>
                                            </span>
                                            <span class="text-color">06</span>
                                        </label>
                                        <label class="checkbox-single d-flex justify-content-between align-items-center">
                                            <span class="d-flex gap-xl-3 gap-2 align-items-center">
                                                <span class="checkbox-area d-center">
                                                    <input type="checkbox">
                                                    <span class="checkmark d-center"></span>
                                                </span>
                                                <span class="text-color">
                                                    Nepal
                                                </span>
                                            </span>
                                            <span class="text-color">05</span>
                                        </label>
                                        <label class="checkbox-single d-flex justify-content-between align-items-center">
                                            <span class="d-flex gap-xl-3 gap-2 align-items-center">
                                                <span class="checkbox-area d-center">
                                                    <input type="checkbox">
                                                    <span class="checkmark d-center"></span>
                                                </span>
                                                <span class="text-color">
                                                    Maldives
                                                </span>
                                            </span>
                                            <span class="text-color">04</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="single-sidebar-widget">
                                    <div class="wid-title style-2">
                                        <h3>Destination</h3>
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div class="price-range-wrapper">
                                        <div class="slider-container">
                                            <!-- Range sliders -->
                                            <input type="range" id="min-slider" class="slider" min="130" max="500"
                                                value="130">
                                            <input type="range" id="max-slider" class="slider" min="130" max="500"
                                                value="250">
                                        </div>
                                        <div class="price-text pt-4 d-flex gap-3">
                                            <label for="amount">Price:</label>
                                            <input type="text" id="amount" readonly style="border:0;">
                                        </div>
                                    </div>
                                </div>
                                <div class="single-sidebar-widget">
                                    <div class="wid-title">
                                        <h3>Activities</h3>
                                    </div>
                                    <div class="categories-list">
                                        <label class="checkbox-single d-flex justify-content-between align-items-center">
                                            <span class="d-flex gap-xl-3 gap-2 align-items-center">
                                                <span class="checkbox-area d-center">
                                                    <input type="checkbox">
                                                    <span class="checkmark d-center"></span>
                                                </span>
                                                <span class="text-color">
                                                    Canada
                                                </span>
                                            </span>
                                            <span class="text-color">04</span>
                                        </label>
                                        <label class="checkbox-single d-flex justify-content-between align-items-center">
                                            <span class="d-flex gap-xl-3 gap-2 align-items-center">
                                                <span class="checkbox-area d-center">
                                                    <input type="checkbox">
                                                    <span class="checkmark d-center"></span>
                                                </span>
                                                <span class="text-color">
                                                    Europe
                                                </span>
                                            </span>
                                            <span class="text-color">03</span>
                                        </label>
                                        <label class="checkbox-single d-flex justify-content-between align-items-center">
                                            <span class="d-flex gap-xl-3 gap-2 align-items-center">
                                                <span class="checkbox-area d-center">
                                                    <input type="checkbox">
                                                    <span class="checkmark d-center"></span>
                                                </span>
                                                <span class="text-color">
                                                    France
                                                </span>
                                            </span>
                                            <span class="text-color">05</span>
                                        </label>
                                        <label class="checkbox-single d-flex justify-content-between align-items-center">
                                            <span class="d-flex gap-xl-3 gap-2 align-items-center">
                                                <span class="checkbox-area d-center">
                                                    <input type="checkbox" checked="checked">
                                                    <span class="checkmark d-center"></span>
                                                </span>
                                                <span class="text-color">
                                                    Indonesia
                                                </span>
                                            </span>
                                            <span class="text-color">06</span>
                                        </label>
                                        <label class="checkbox-single d-flex justify-content-between align-items-center">
                                            <span class="d-flex gap-xl-3 gap-2 align-items-center">
                                                <span class="checkbox-area d-center">
                                                    <input type="checkbox">
                                                    <span class="checkmark d-center"></span>
                                                </span>
                                                <span class="text-color">
                                                    Nepal
                                                </span>
                                            </span>
                                            <span class="text-color">05</span>
                                        </label>
                                        <label class="checkbox-single d-flex justify-content-between align-items-center">
                                            <span class="d-flex gap-xl-3 gap-2 align-items-center">
                                                <span class="checkbox-area d-center">
                                                    <input type="checkbox">
                                                    <span class="checkmark d-center"></span>
                                                </span>
                                                <span class="text-color">
                                                    Maldives
                                                </span>
                                            </span>
                                            <span class="text-color">04</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="single-sidebar-widget">
                                    <div class="wid-title style-2">
                                        <h3>Tour Types</h3>
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div class="categories-list">
                                        <label class="checkbox-single d-flex justify-content-between align-items-center">
                                            <span class="d-flex gap-xl-3 gap-2 align-items-center">
                                                <span class="checkbox-area d-center">
                                                    <input type="checkbox">
                                                    <span class="checkmark d-center"></span>
                                                </span>
                                                <span class="text-color">
                                                    Premium
                                                </span>
                                            </span>
                                            <span class="text-color">04</span>
                                        </label>
                                        <label class="checkbox-single d-flex justify-content-between align-items-center">
                                            <span class="d-flex gap-xl-3 gap-2 align-items-center">
                                                <span class="checkbox-area d-center">
                                                    <input type="checkbox">
                                                    <span class="checkmark d-center"></span>
                                                </span>
                                                <span class="text-color">
                                                    Luxury 
                                                </span>
                                            </span>
                                            <span class="text-color">03</span>
                                        </label>
                                        <label class="checkbox-single d-flex justify-content-between align-items-center">
                                            <span class="d-flex gap-xl-3 gap-2 align-items-center">
                                                <span class="checkbox-area d-center">
                                                    <input type="checkbox" checked="checked">
                                                    <span class="checkmark d-center"></span>
                                                </span>
                                                <span class="text-color">
                                                    Standard
                                                </span>
                                            </span>
                                            <span class="text-color">05</span>
                                        </label>
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
