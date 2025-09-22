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
        return 'eicon-mail';
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

        /* ---------- FIRST ADDRESS BOX ---------- */
        $this->add_control(
            'ahew_contact_address_option',
            [
                'label' => esc_html__( 'First Address Box', 'al-hasana-elementor-widget' ),
                'type'  => \Elementor\Controls_Manager::HEADING,
            ]
        );
        $this->add_control(
            'ahew_contact_address_title',
            [
                'label' => __( 'Title', 'al-hasana-elementor-widget' ),
                'type'  => \Elementor\Controls_Manager::TEXT,
            ]
        );
        $this->add_control(
            'ahew_contact_address_desc',
            [
                'label' => __( 'Description', 'al-hasana-elementor-widget' ),
                'type'  => \Elementor\Controls_Manager::TEXTAREA,
            ]
        );
        $this->add_control(
            'ahew_contact_email_title',
            [
                'label' => __( 'Email', 'al-hasana-elementor-widget' ),
                'type'  => \Elementor\Controls_Manager::TEXT,
            ]
        );
        $this->add_control(
            'ahew_contact_phone_title',
            [
                'label' => __( 'Phone', 'al-hasana-elementor-widget' ),
                'type'  => \Elementor\Controls_Manager::TEXT,
            ]
        );

        /* ---------- SECOND ADDRESS BOX ---------- */
        $this->add_control(
            'ahew_contact_address2_option',
            [
                'label'     => esc_html__( 'Second Address Box', 'al-hasana-elementor-widget' ),
                'type'      => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'ahew_contact_address2_title',
            [
                'label' => __( 'Title', 'al-hasana-elementor-widget' ),
                'type'  => \Elementor\Controls_Manager::TEXT,
            ]
        );
        $this->add_control(
            'ahew_contact_address2_desc',
            [
                'label' => __( 'Description', 'al-hasana-elementor-widget' ),
                'type'  => \Elementor\Controls_Manager::TEXTAREA,
            ]
        );
        $this->add_control(
            'ahew_contact_email2_title',
            [
                'label' => __( 'Email', 'al-hasana-elementor-widget' ),
                'type'  => \Elementor\Controls_Manager::TEXT,
            ]
        );
        $this->add_control(
            'ahew_contact_phone2_title',
            [
                'label' => __( 'Phone', 'al-hasana-elementor-widget' ),
                'type'  => \Elementor\Controls_Manager::TEXT,
            ]
        );

        /* ---------- CONTACT FORM 7 SHORTCODE ---------- */
        $this->add_control(
            'ahew_contact_cf7_shortcode',
            [
                'label'       => __( 'Contact Form 7 Shortcode', 'al-hasana-elementor-widget' ),
                'type'        => \Elementor\Controls_Manager::TEXTAREA,
                'placeholder' => '[contact-form-7 id="123" title="Contact form"]',
                'separator'   => 'before',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

        // First box
        $addr_title  = $settings['ahew_contact_address_title'] ?? '';
        $addr_desc   = $settings['ahew_contact_address_desc'] ?? '';
        $email_title = $settings['ahew_contact_email_title'] ?? '';
        $phone_title = $settings['ahew_contact_phone_title'] ?? '';

        // Second box
        $addr2_title  = $settings['ahew_contact_address2_title'] ?? '';
        $addr2_desc   = $settings['ahew_contact_address2_desc'] ?? '';
        $email2_title = $settings['ahew_contact_email2_title'] ?? '';
        $phone2_title = $settings['ahew_contact_phone2_title'] ?? '';

        // Contact Form 7 shortcode
        $cf7_shortcode = $settings['ahew_contact_cf7_shortcode'] ?? '';
        ?>
        <section class="contact-us-section fix section-padding">
            <div class="container">
                <div class="row">

                    <?php if ( $addr_title || $addr_desc || $email_title || $phone_title ) : ?>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="contact-us-main">
                                <div class="contact-box-items">
                                    <div class="icon">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/icon-map.png' ); ?>" alt="icon">
                                    </div>
                                    <div class="content">
                                        <?php if ( $addr_title ) : ?><h3><?php echo esc_html( $addr_title ); ?></h3><?php endif; ?>
                                        <?php if ( $addr_desc ) : ?><p><?php echo esc_html( $addr_desc ); ?></p><?php endif; ?>
                                        <?php if ( $email_title ) : ?><p><b>Email:</b> <?php echo esc_html( $email_title ); ?></p><?php endif; ?>
                                        <?php if ( $phone_title ) : ?><p><b>Phone:</b> <?php echo esc_html( $phone_title ); ?></p><?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if ( $addr2_title || $addr2_desc || $email2_title || $phone2_title ) : ?>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="contact-us-main">
                                <div class="contact-box-items">
                                    <div class="icon">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/icon-map.png' ); ?>" alt="icon">
                                    </div>
                                    <div class="content">
                                        <?php if ( $addr2_title ) : ?><h3><?php echo esc_html( $addr2_title ); ?></h3><?php endif; ?>
                                        <?php if ( $addr2_desc ) : ?><p><?php echo esc_html( $addr2_desc ); ?></p><?php endif; ?>
                                        <?php if ( $email2_title ) : ?><p><b>Email:</b> <?php echo esc_html( $email2_title ); ?></p><?php endif; ?>
                                        <?php if ( $phone2_title ) : ?><p><b>Phone:</b> <?php echo esc_html( $phone2_title ); ?></p><?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </section>

        <!-- Contact Form & Map -->
        <section class="contact-us-section-2 section-bg-2 fix">
            <div class="container">
                <div class="contact-us-wrapper">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <?php
                                    // Output Contact Form 7 if shortcode is set
                                    if ( ! empty( $cf7_shortcode ) ) {
                                        echo do_shortcode( wp_kses_post( $cf7_shortcode ) );
                                    } else {
                                        echo '<p>' . esc_html__( 'Please add a Contact Form 7 shortcode in the widget settings.', 'al-hasana-elementor-widget' ) . '</p>';
                                    }
                                    ?>
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
