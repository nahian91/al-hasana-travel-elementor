<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class AHEW_Hero extends \Elementor\Widget_Base {

    public function get_name() {
        return 'ahew-hero';
    }

    public function get_title() {
        return __( 'Hero', 'al-hasana-elementor-widget' );
    }

    public function get_icon() {
        return 'eicon-slider-push'; // Elementor default icon
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
               <!-- hero-2-Section Start -->
    <section class="hero-section-2">
        <div class="hero-2 bg-cover" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/hero/02.png);">
            <div class="container custom-container-3">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero-content">
                            <div class="sub-title wow fadeInUp">
                                Get unforgettable pleasure with us
                            </div>
                            <h1 class="wow fadeInUp" data-wow-delay=".3s">
                                Discover Your Next <br>
                                Handpicked Journey
                            </h1>
                            <p class="wow fadeInUp" data-wow-delay=".5s">
                                There are many variations of passages of available, but the majority have suffered
                                alteration in <br> some form, by injected humour words which don't look even slightly
                                believable.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                         <div class="best-price-section mb-0">
            <div class="container custom-container-3">
                <div class="hero-bottom">
                    <div class="row">
                        <div class="best-price-wrapper">
                            <ul class="nav">
                                <li class="nav-item wow fadeInUp" data-wow-delay=".3s">
                                    <a href="#thumb1" data-bs-toggle="tab" class="nav-link">
                                        Hotels
                                    </a>
                                </li>
                                <li class="nav-item wow fadeInUp" data-wow-delay=".5s">
                                    <a href="#thumb2" data-bs-toggle="tab" class="nav-link active">
                                        Tour
                                    </a>
                                </li>
                                <li class="nav-item wow fadeInUp" data-wow-delay=".7s">
                                    <a href="#thumb3" data-bs-toggle="tab" class="nav-link">
                                        Flight
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div id="thumb1" class="tab-pane fade">
                                <div class="comment-form-wrap">
                                    <form action="#" id="contact-form220" method="POST">
                                        <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-xl-5">
                                            <div class="col">
                                                <div class="form-clt">
                                                    <span>Looking For</span>
                                                    <input type="text" name="name" id="name21" placeholder="Tour Name">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-clt">
                                                    <span>Price</span>
                                                    <div class="form">
                                                        <select class="single-select w-100">
                                                            <option>Price</option>
                                                            <option>$1000</option>
                                                            <option>$1300</option>
                                                            <option>$1500</option>
                                                            <option>$2000</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-clt">
                                                    <span>Location</span>
                                                    <div class="form">
                                                        <select class="single-select w-100">
                                                            <option>All City</option>
                                                            <option>London</option>
                                                            <option>Canada</option>
                                                            <option>Denmark</option>
                                                            <option>Finland</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-clt">
                                                    <span>Departure Month</span>
                                                    <div class="form-clt">
                                                        <input type="date" id="date1" name="date1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-clt">
                                                    <span>Departure Month</span>
                                                    <button type="submit" class="theme-btn w-100">
                                                        Search
                                                        <i class="fa-solid fa-magnifying-glass"></i>
                                                    </button>
                                                </div>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div id="thumb2" class="tab-pane fade show active">
                                <div class="comment-form-wrap">
                                    <form action="#" id="contact-form22" method="POST">
                                        <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-xl-5">
                                            <div class="col">
                                                <div class="form-clt">
                                                    <span>Looking For</span>
                                                    <input type="text" name="name" id="name22" placeholder="Tour Name">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-clt">
                                                    <span>Price</span>
                                                    <div class="form">
                                                        <select class="single-select w-100">
                                                            <option>Price</option>
                                                            <option>$1000</option>
                                                            <option>$1300</option>
                                                            <option>$1500</option>
                                                            <option>$2000</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-clt">
                                                    <span>Location</span>
                                                    <div class="form">
                                                        <select class="single-select w-100">
                                                            <option>All City</option>
                                                            <option>London</option>
                                                            <option>Canada</option>
                                                            <option>Denmark</option>
                                                            <option>Finland</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-clt">
                                                    <span>Departure Month</span>
                                                    <div class="form-clt">
                                                        <input type="date" id="date2" name="date1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-clt">
                                                    <span>Departure Month</span>
                                                    <button type="submit" class="theme-btn w-100">
                                                        Search
                                                        <i class="fa-solid fa-magnifying-glass"></i>
                                                    </button>
                                                </div>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div id="thumb3" class="tab-pane fade">
                                <div class="comment-form-wrap">
                                    <form action="#" id="contact-form32" method="POST">
                                        <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-xl-5">
                                            <div class="col">
                                                <div class="form-clt">
                                                    <span>Looking For</span>
                                                    <input type="text" name="name" id="name2" placeholder="Tour Name">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-clt">
                                                    <span>Price</span>
                                                    <div class="form">
                                                        <select class="single-select w-100">
                                                            <option>Price</option>
                                                            <option>$1000</option>
                                                            <option>$1300</option>
                                                            <option>$1500</option>
                                                            <option>$2000</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-clt">
                                                    <span>Location</span>
                                                    <div class="form">
                                                        <select class="single-select w-100">
                                                            <option>All City</option>
                                                            <option>London</option>
                                                            <option>Canada</option>
                                                            <option>Denmark</option>
                                                            <option>Finland</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-clt">
                                                    <span>Departure Month</span>
                                                    <div class="form-clt">
                                                        <input type="date" id="date3" name="date1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-clt">
                                                    <span>Departure Month</span>
                                                    <button type="submit" class="theme-btn w-100">
                                                        Search
                                                        <i class="fa-solid fa-magnifying-glass"></i>
                                                    </button>
                                                </div>

                                            </div>
                                        </div>
                                    </form>
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
        </div>
       
    </section>
        <?php 
    }
}
