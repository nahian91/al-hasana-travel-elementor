<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class AHEW_Features extends \Elementor\Widget_Base {

    public function get_name() {
        return 'ahew-features';
    }

    public function get_title() {
        return __( 'Features', 'al-hasana-elementor-widget' );
    }

    public function get_icon() {
        return 'eicon-star';
    }

    public function get_categories() {
        return [ 'ahew-category' ];
    }

    protected function register_controls() {

        $this->start_controls_section(
            'ahew_features_content_section',
            [
                'label' => __( 'Content', 'al-hasana-elementor-widget' ),
                'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'ahew_features_subtitle',
            [
                'label'   => __( 'Subtitle', 'al-hasana-elementor-widget' ),
                'type'    => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Are you ready to travel?', 'al-hasana-elementor-widget' ),
            ]
        );

        $this->add_control(
            'ahew_features_title',
            [
                'label'   => __( 'Title', 'al-hasana-elementor-widget' ),
                'type'    => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'World Leading Online Tour Booking Platform', 'al-hasana-elementor-widget' ),
            ]
        );

        $this->add_control(
            'ahew_features_description',
            [
                'label'   => __( 'Description', 'al-hasana-elementor-widget' ),
                'type'    => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.", 'al-hasana-elementor-widget' ),
            ]
        );

        // Repeater for feature items
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'ahew_feature_icon',
            [
                'label' => __( 'Feature Icon', 'al-hasana-elementor-widget' ),
                'type'  => \Elementor\Controls_Manager::MEDIA,
            ]
        );

        $repeater->add_control(
            'ahew_feature_title',
            [
                'label'   => __( 'Feature Title', 'al-hasana-elementor-widget' ),
                'type'    => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Most Adventure Tour Ever', 'al-hasana-elementor-widget' ),
            ]
        );

        $repeater->add_control(
            'ahew_feature_description',
            [
                'label'   => __( 'Feature Description', 'al-hasana-elementor-widget' ),
                'type'    => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'There are many variations of passages of available,', 'al-hasana-elementor-widget' ),
            ]
        );

        $this->add_control(
            'ahew_features_items',
            [
                'label'       => __( 'Feature Items', 'al-hasana-elementor-widget' ),
                'type'        => \Elementor\Controls_Manager::REPEATER,
                'fields'      => $repeater->get_controls(),
                'title_field' => '{{{ ahew_feature_title }}}',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <section class="travel-feature-section section-padding fix section-bg">
            <div class="shape-1">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/plane-shape1.png" alt="img">
            </div>
            <div class="shape-2">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/plane-shape2.png" alt="img">
            </div>
            <div class="container">
                <div class="feature-wrapper">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="feature-content">
                                <div class="section-title">
                                    <span class="sub-title wow fadeInUp"><?php echo esc_html( $settings['ahew_features_subtitle'] ); ?></span>
                                    <h2 class="wow fadeInUp" data-wow-delay=".2s"><?php echo nl2br( esc_html( $settings['ahew_features_title'] ) ); ?></h2>
                                </div>
                                <p class="wow fadeInUp" data-wow-delay=".3s"><?php echo nl2br( esc_html( $settings['ahew_features_description'] ) ); ?></p>

                                <div class="feature-area">
                                    <div class="line-shape">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/img/line-shape.png" alt="img">
                                    </div>

                                    <?php if ( ! empty( $settings['ahew_features_items'] ) ) : ?>
                                        <?php $delay = 0.5; ?>
                                        <?php foreach ( $settings['ahew_features_items'] as $item ) : ?>
                                            <div class="feature-items wow fadeInUp" data-wow-delay="<?php echo esc_attr($delay); ?>s">
                                                <div class="feature-icon-item">
                                                    <div class="icon">
                                                        <?php if ( ! empty( $item['ahew_feature_icon']['url'] ) ) : ?>
                                                            <img src="<?php echo esc_url( $item['ahew_feature_icon']['url'] ); ?>" alt="img">
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="content">
                                                        <h5><?php echo esc_html( $item['ahew_feature_title'] ); ?></h5>
                                                    </div>
                                                </div>
                                                <ul class="circle-icon">
                                                    <li><i class="fa-regular fa-badge-check"></i></li>
                                                    <li><?php echo nl2br( esc_html( $item['ahew_feature_description'] ) ); ?></li>
                                                </ul>
                                            </div>
                                            <?php $delay += 0.2; ?>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>

                                <a href="contact.html" class="theme-btn wow fadeInUp" data-wow-delay=".9s">
                                    Contact US <i class="fa-sharp fa-regular fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="feature-image wow fadeInUp" data-wow-delay=".3s">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/man-image.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }
}
