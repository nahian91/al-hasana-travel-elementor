<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class AHEW_Blog_Grid extends \Elementor\Widget_Base {

    public function get_name() {
        return 'ahew-blog-grid';
    }

    public function get_title() {
        return __( 'Blog Grid', 'al-hasana-elementor-widget' );
    }

    public function get_icon() {
        return 'eicon-posts-grid'; // Elementor default icon
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
             <!-- News-Section Start -->
        <section class="news-section section-padding fix">
            <div class="container">
                <div class="row g-4">
                    <div class="col-xl-4 col-md-6 col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="news-card-items-3 mt-0">
                            <div class="news-image">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/news/08.jpg" alt="img">
                            </div>
                            <div class="news-content">
                                <ul class="post-meta">
                                    <li class="post">26<span>Nov</span></li>
                                    <li>
                                        <i class="fa-regular fa-user"></i>
                                        By Admin
                                    </li>
                                    <li>
                                        <i class="fa-regular fa-tag"></i>
                                        Travel
                                    </li>
                                </ul>
                                <h4>
                                    <a href="news-details.html">
                                        The Surfing man Will Blow Your Mind
                                    </a>
                                </h4>
                                <a href="news-details.html" class="link-btn">Read More <i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="news-card-items-3 mt-0">
                            <div class="news-image">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/news/09.jpg" alt="img">
                            </div>
                            <div class="news-content">
                                <ul class="post-meta">
                                    <li class="post">26<span>Nov</span></li>
                                    <li>
                                        <i class="fa-regular fa-user"></i>
                                        By Admin
                                    </li>
                                    <li>
                                        <i class="fa-regular fa-tag"></i>
                                        Travel
                                    </li>
                                </ul>
                                <h4>
                                    <a href="news-details.html">
                                        Supervisor Disapproved Of Latest Work
                                    </a>
                                </h4>
                                <a href="news-details.html" class="link-btn">Read More <i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="news-card-items-3 mt-0">
                            <div class="news-image">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/news/10.jpg" alt="img">
                            </div>
                            <div class="news-content">
                                <ul class="post-meta">
                                    <li class="post">26<span>Nov</span></li>
                                    <li>
                                        <i class="fa-regular fa-user"></i>
                                        By Admin
                                    </li>
                                    <li>
                                        <i class="fa-regular fa-tag"></i>
                                        Travel
                                    </li>
                                </ul>
                                <h4>
                                    <a href="news-details.html">
                                        Get Best Advertiser In Your Side Pocket
                                    </a>
                                </h4>
                                <a href="news-details.html" class="link-btn">Read More <i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="news-card-items-3 mt-0">
                            <div class="news-image">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/news/11.jpg" alt="img">
                            </div>
                            <div class="news-content">
                                <ul class="post-meta">
                                    <li class="post">26<span>Nov</span></li>
                                    <li>
                                        <i class="fa-regular fa-user"></i>
                                        By Admin
                                    </li>
                                    <li>
                                        <i class="fa-regular fa-tag"></i>
                                        Travel
                                    </li>
                                </ul>
                                <h4>
                                    <a href="news-details.html">
                                        The Surfing man Will Blow Your Mind
                                    </a>
                                </h4>
                                <a href="news-details.html" class="link-btn">Read More <i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="news-card-items-3 mt-0">
                            <div class="news-image">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/news/12.jpg" alt="img">
                            </div>
                            <div class="news-content">
                                <ul class="post-meta">
                                    <li class="post">26<span>Nov</span></li>
                                    <li>
                                        <i class="fa-regular fa-user"></i>
                                        By Admin
                                    </li>
                                    <li>
                                        <i class="fa-regular fa-tag"></i>
                                        Travel
                                    </li>
                                </ul>
                                <h4>
                                    <a href="news-details.html">
                                        Supervisor Disapproved Of Latest Work
                                    </a>
                                </h4>
                                <a href="news-details.html" class="link-btn">Read More <i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="news-card-items-3 mt-0">
                            <div class="news-image">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/news/13.jpg" alt="img">
                            </div>
                            <div class="news-content">
                                <ul class="post-meta">
                                    <li class="post">26<span>Nov</span></li>
                                    <li>
                                        <i class="fa-regular fa-user"></i>
                                        By Admin
                                    </li>
                                    <li>
                                        <i class="fa-regular fa-tag"></i>
                                        Travel
                                    </li>
                                </ul>
                                <h4>
                                    <a href="news-details.html">
                                        Get Best Advertiser In Your Side Pocket
                                    </a>
                                </h4>
                                <a href="news-details.html" class="link-btn">Read More <i class="fa-sharp fa-regular fa-arrow-right"></i></a>
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
