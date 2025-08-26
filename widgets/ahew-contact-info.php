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
            'ahew_contact_content_section',
            [
                'label' => __( 'Content', 'al-hasana-elementor-widget' ),
                'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
			'ahew_contact_address_option',
			[
				'label' => esc_html__( 'Address', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->add_control(
            'ahew_contact_address_title',
            [
                'label'   => __( 'Title', 'al-hasana-elementor-widget' ),
                'type'    => \Elementor\Controls_Manager::TEXT,
            ]
        );

        $this->add_control(
            'ahew_contact_address_desc',
            [
                'label'   => __( 'Description', 'al-hasana-elementor-widget' ),
                'type'    => \Elementor\Controls_Manager::TEXTAREA,
            ]
        );

        $this->add_control(
			'ahew_contact_email_options',
			[
				'label' => esc_html__( 'Email', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->add_control(
            'ahew_contact_email_title',
            [
                'label'   => __( 'Title', 'al-hasana-elementor-widget' ),
                'type'    => \Elementor\Controls_Manager::TEXT,
            ]
        );

        $this->add_control(
            'ahew_contact_email_desc',
            [
                'label'   => __( 'Description', 'al-hasana-elementor-widget' ),
                'type'    => \Elementor\Controls_Manager::TEXTAREA,
            ]
        );

        $this->add_control(
			'ahew_contact_phone_options',
			[
				'label' => esc_html__( 'Phone', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->add_control(
            'ahew_contact_phone_title',
            [
                'label'   => __( 'Title', 'al-hasana-elementor-widget' ),
                'type'    => \Elementor\Controls_Manager::TEXT,
            ]
        );

        $this->add_control(
            'ahew_contact_phone_desc',
            [
                'label'   => __( 'Description', 'al-hasana-elementor-widget' ),
                'type'    => \Elementor\Controls_Manager::TEXTAREA,
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        $ahew_contact_address_title = $settings['ahew_contact_address_title'];
        $ahew_contact_address_desc = $settings['ahew_contact_address_desc'];
        $ahew_contact_email_title = $settings['ahew_contact_email_title'];
        $ahew_contact_email_desc = $settings['ahew_contact_email_desc'];
        $ahew_contact_phone_title = $settings['ahew_contact_phone_title'];
        $ahew_contact_phone_desc = $settings['ahew_contact_phone_desc'];
        ?>
        <section class="contact-us-section fix section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="contact-us-main">
                            <div class="contact-box-items">
                                <div class="icon">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/img/icon-map.png" alt="img">
                                </div>
                                <div class="content">
                                    <h3><?php echo $ahew_contact_address_title;?></h3>
                                    <p><?php echo $ahew_contact_address_desc;?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="contact-us-main">
                            <div class="contact-box-items">
                                <div class="icon">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/img/icon-envelope.png" alt="img">
                                </div>
                                <div class="content">
                                    <h3><a href="mailto:<?php echo $ahew_contact_email_desc;?>"><?php echo $ahew_contact_email_desc;?></a></h3>
                                    <p><?php echo $ahew_contact_email_title;?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="contact-us-main">
                            <div class="contact-box-items">
                                <div class="icon">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/img/icon-phone.png" alt="img">
                                </div>
                                <div class="content">
                                    <h3><a href="tel:<?php echo $ahew_contact_phone_desc;?>"><?php echo $ahew_contact_phone_desc;?></a></h3>
                                    <p><?php echo $ahew_contact_phone_title;?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </section>

         <section class="contact-us-section-2 section-bg-2 fix">
            <div class="container">
                <div class="contact-us-wrapper">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="contact-us-contact">
                                <div class="section-title">
                                    <span class="sub-title text-white">Contact us
                                    </span>
                                    <h2 class="text-white">Send Message Anytime</h2>
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
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3619.185288038555!2d91.87114087537194!3d24.891660677908998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1756218481853!5m2!1sen!2sbd" allowfullscreen="" loading="lazy"></iframe>
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
