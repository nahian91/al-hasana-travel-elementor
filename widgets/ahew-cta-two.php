<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class AHEW_Cta_Two extends \Elementor\Widget_Base {

    public function get_name() {
        return 'ahew-cta-two';
    }

    public function get_title() {
        return __( 'CTA Two', 'al-hasana-elementor-widget' );
    }

    public function get_icon() {
        return 'eicon-call-to-action';
    }

    public function get_categories() {
        return [ 'ahew-category' ];
    }

    protected function register_controls() {

        $this->start_controls_section(
            'ahew_cta_content_section',
            [
                'label' => __( 'CTA Content', 'al-hasana-elementor-widget' ),
                'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        // Use repeater for multiple CTA boxes
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'ahew_cta_title',
            [
                'label'   => __( 'Title', 'al-hasana-elementor-widget' ),
                'type'    => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Adventure awaits', 'al-hasana-elementor-widget' ),
            ]
        );

        $repeater->add_control(
            'ahew_cta_button_text',
            [
                'label'   => __( 'Button Text', 'al-hasana-elementor-widget' ),
                'type'    => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Book Now', 'al-hasana-elementor-widget' ),
            ]
        );

        $repeater->add_control(
            'ahew_cta_button_url',
            [
                'label'   => __( 'Button URL', 'al-hasana-elementor-widget' ),
                'type'    => \Elementor\Controls_Manager::URL,
                'default' => [
                    'url' => '#',
                ],
                'placeholder' => __( 'https://your-link.com', 'al-hasana-elementor-widget' ),
            ]
        );

        $repeater->add_control(
            'ahew_cta_image',
            [
                'label' => __( 'Image', 'al-hasana-elementor-widget' ),
                'type'  => \Elementor\Controls_Manager::MEDIA,
            ]
        );

        $repeater->add_control(
            'ahew_cta_style',
            [
                'label'   => __( 'Style', 'al-hasana-elementor-widget' ),
                'type'    => \Elementor\Controls_Manager::SELECT,
                'default' => 'style-1',
                'options' => [
                    'style-1' => __( 'Style 1', 'al-hasana-elementor-widget' ),
                    'style-2' => __( 'Style 2', 'al-hasana-elementor-widget' ),
                    'style-2 bg-color' => __( 'Style 2 BG Color', 'al-hasana-elementor-widget' ),
                ],
            ]
        );

        $this->add_control(
            'ahew_cta_boxes',
            [
                'label'       => __( 'CTA Boxes', 'al-hasana-elementor-widget' ),
                'type'        => \Elementor\Controls_Manager::REPEATER,
                'fields'      => $repeater->get_controls(),
                'title_field' => '{{{ ahew_cta_title }}}',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

        if ( empty( $settings['ahew_cta_boxes'] ) ) {
            return;
        }
        ?>
        <section class="cta-section section-padding fix">
            <div class="container">
                <div class="row g-4">
                    <?php $delay = 0.3; ?>
                    <?php foreach ( $settings['ahew_cta_boxes'] as $box ) : ?>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="<?php echo esc_attr($delay); ?>s">
                            <div class="cta-box-items <?php echo esc_attr($box['ahew_cta_style']); ?>">
                                <div class="cta-content">
                                    <?php if ( ! empty( $box['ahew_cta_title'] ) ) : ?>
                                        <h3><?php echo nl2br( esc_html( $box['ahew_cta_title'] ) ); ?></h3>
                                    <?php endif; ?>
                                    <?php if ( ! empty( $box['ahew_cta_button_text'] ) && ! empty( $box['ahew_cta_button_url']['url'] ) ) : ?>
                                        <a href="<?php echo esc_url( $box['ahew_cta_button_url']['url'] ); ?>" class="theme-btn">
                                            <?php echo esc_html( $box['ahew_cta_button_text'] ); ?>
                                        </a>
                                    <?php endif; ?>
                                </div>
                                <?php if ( ! empty( $box['ahew_cta_image']['url'] ) ) : ?>
                                    <div class="cta-image">
                                        <img src="<?php echo esc_url( $box['ahew_cta_image']['url'] ); ?>" alt="img">
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php $delay += 0.2; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <?php
    }
}
