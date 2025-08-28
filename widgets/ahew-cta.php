<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class AHEW_Cta extends \Elementor\Widget_Base {

    public function get_name() {
        return 'ahew-cta';
    }

    public function get_title() {
        return __( 'CTA', 'al-hasana-elementor-widget' );
    }

    public function get_icon() {
        return 'eicon-call-to-action'; // Elementor default icon
    }

    public function get_categories() {
        return [ 'ahew-category' ];
    }

     protected function register_controls() {

        // Content Section
        $this->start_controls_section(
            'ahew_content_section',
            [
                'label' => __( 'Content', 'al-hasana-elementor-widget' ),
                'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'ahew_subtitle',
            [
                'label'   => __( 'Subtitle', 'al-hasana-elementor-widget' ),
                'type'    => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Watch Our Story', 'al-hasana-elementor-widget' ),
            ]
        );

        $this->add_control(
            'ahew_title',
            [
                'label'   => __( 'Title', 'al-hasana-elementor-widget' ),
                'type'    => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'We Provide the Best Tour Facilities', 'al-hasana-elementor-widget' ),
            ]
        );

        $this->add_control(
            'ahew_button_text',
            [
                'label'   => __( 'Button Text', 'al-hasana-elementor-widget' ),
                'type'    => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Find Out More', 'al-hasana-elementor-widget' ),
            ]
        );

        $this->add_control(
            'ahew_button_link',
            [
                'label'   => __( 'Button Link', 'al-hasana-elementor-widget' ),
                'type'    => \Elementor\Controls_Manager::URL,
                'default' => [
                    'url' => '#',
                ],
            ]
        );

        $this->add_control(
            'ahew_video_url',
            [
                'label'   => __( 'Video URL', 'al-hasana-elementor-widget' ),
                'type'    => \Elementor\Controls_Manager::URL,
                'default' => [
                    'url' => 'https://www.youtube.com/watch?v=Cn4G2lZ_g2I',
                ],
            ]
        );

        $this->add_control(
            'ahew_background_image',
            [
                'label'   => __( 'Background Image', 'al-hasana-elementor-widget' ),
                'type'    => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/cta-bg.jpg',
                ],
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

        $ahew_subtitle   = $settings['ahew_subtitle'];
        $ahew_title      = $settings['ahew_title'];
        $ahew_btn_text   = $settings['ahew_button_text'];
        $ahew_btn_link   = ! empty( $settings['ahew_button_link']['url'] ) ? $settings['ahew_button_link']['url'] : '#';
        $ahew_video_url  = ! empty( $settings['ahew_video_url']['url'] ) ? $settings['ahew_video_url']['url'] : '#';
        $ahew_bg_image   = ! empty( $settings['ahew_background_image']['url'] ) ? $settings['ahew_background_image']['url'] : get_template_directory_uri() . '/assets/img/cta-bg.jpg';
        ?>
        
        <section class="cta-bg-section fix bg-cover" style="background-image: url(<?php echo esc_url( $ahew_bg_image ); ?>);">
            <div class="container">
                <div class="row">
                    <div class="cta-wrapper">
                        <div class="section-title text-center">
                            <?php if ( $ahew_subtitle ) : ?>
                                <span class="sub-title text-white wow fadeInUp"><?php echo esc_html( $ahew_subtitle ); ?></span>
                            <?php endif; ?>
                            <?php if ( $ahew_title ) : ?>
                                <h2 class="text-white wow fadeInUp" data-wow-delay=".3s"><?php echo esc_html( $ahew_title ); ?></h2>
                            <?php endif; ?>
                        </div>
                        <div class="cta-btn wow fadeInUp" data-wow-delay=".5s">
                            <?php if ( $ahew_btn_text ) : ?>
                                <a href="<?php echo esc_url( $ahew_btn_link ); ?>" class="theme-btn"><?php echo esc_html( $ahew_btn_text ); ?><i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                            <?php endif; ?>
                            <div class="watch-btn">
                                <a href="<?php echo esc_url( $ahew_video_url ); ?>" class="video-btn video-popup">
                                    <i class="fa-duotone fa-play"></i>
                                </a>
                                <h6>Watch Video</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php 
    }
}