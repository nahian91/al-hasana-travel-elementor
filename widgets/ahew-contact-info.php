<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class AHEW_Contact_Info extends \Elementor\Widget_Base {

    public function get_name() {
        return 'ahew-contact-info';
    }

    public function get_title() {
        return __( 'Contact Info', 'al-hasana-elementor-widget' );
    }

    public function get_icon() {
        return 'eicon-mail'; // Different icon
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
            'description',
            [
                'label'   => __( 'Description', 'al-hasana-elementor-widget' ),
                'type'    => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'This is Hello World Widget 2', 'al-hasana-elementor-widget' ),
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
             <!-- Contact-us Section Start -->
        <section class="contact-us-section fix section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="contact-us-main">
                            <div class="contact-box-items">
                                <div class="icon">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/img/icon/18.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>
                                        Our Address
                                    </h3>
                                    <p>
                                        2464 Royal Ln. Mesa, New Jersey 45463.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="contact-us-main style-2">
                            <div class="contact-box-items">
                                <div class="icon">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/img/icon/19.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>
                                        <a href="mailto:info@tripco.com">info@tripco.com</a>
                                    </h3>
                                    <p>
                                        Email us anytime for anykind <br> ofquety.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="contact-us-main">
                            <div class="contact-box-items">
                                <div class="icon">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/img/icon/20.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>
                                        <a href="tel:Hot+208-666-0112">Hot:+208-666-0112</a>
                                    </h3>
                                    <p>
                                        Call us any kind suppor,we will wait for it.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </section>

         <!-- Contact-us Section-2 Start -->
         <section class="contact-us-section-2 section-bg-2 fix">
            <div class="container">
                <div class="contact-us-wrapper">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="contact-us-contact">
                                <div class="section-title">
                                    <span class="sub-title text-white wow fadeInUp">
                                        Contact us
                                    </span>
                                    <h2 class=" text-white wow fadeInUp wow" data-wow-delay=".2s">
                                        Send Message Anytime
                                    </h2>
                                </div>
                                <div class="comment-form-wrap">
                                    <form action="#" id="contact-form" method="POST">
                                        <div class="row g-4">
                                            <div class="col-lg-6">
                                                <div class="form-clt">
                                                    <input type="text" name="name" id="name" placeholder="Your Name">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-clt">
                                                    <input type="text" name="email" id="email4" placeholder="Your Email">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-clt">
                                                    <select class="country-select" style="display: none;">
                                                        <option value="Residential">Real Estate</option>
                                                        <option value="01">01</option>
                                                        <option value="02">02</option>
                                                     </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-clt">
                                                    <textarea name="message" id="message" placeholder="Your Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <button type="submit" class="theme-btn">
                                                    Submit Massage
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="map-area">
                                <div class="google-map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6678.7619084840835!2d144.9618311901502!3d-37.81450084255415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642b4758afc1d%3A0x3119cc820fdfc62e!2sEnvato!5e0!3m2!1sen!2sbd!4v1641984054261!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
