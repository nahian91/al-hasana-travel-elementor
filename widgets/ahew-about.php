<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class AHEW_About extends \Elementor\Widget_Base {

    public function get_name() {
        return 'ahew-about';
    }

    public function get_title() {
        return __( 'About', 'al-hasana-elementor-widget' );
    }

    public function get_icon() {
        return 'eicon-info-circle-o';
    }

    public function get_categories() {
        return [ 'ahew-category' ];
    }

    protected function register_controls() {

        $this->start_controls_section(
            'ahew_about_content_section',
            [
                'label' => __( 'Content', 'al-hasana-elementor-widget' ),
                'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
        'ahew_about_image',
            [
                'label'   => __( 'About Image', 'al-hasana-elementor-widget' ),
                'type'    => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'ahew_about_subtitle',
            [
                'label'   => __( 'Subtitle', 'al-hasana-elementor-widget' ),
                'type'    => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Let’s Go Together', 'al-hasana-elementor-widget' ),
            ]
        );

        $this->add_control(
            'ahew_about_title',
            [
                'label'   => __( 'Title', 'al-hasana-elementor-widget' ),
                'type'    => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Great opportunity for adventure & travels', 'al-hasana-elementor-widget' ),
            ]
        );

        // Repeater for about items
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'ahew_about_item_icon',
            [
                'label' => __( 'Item Icon', 'al-hasana-elementor-widget' ),
                'type'  => \Elementor\Controls_Manager::MEDIA,
            ]
        );

        $repeater->add_control(
            'ahew_about_item_title',
            [
                'label'   => __( 'Item Title', 'al-hasana-elementor-widget' ),
                'type'    => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Exclusive Trip', 'al-hasana-elementor-widget' ),
            ]
        );

        $repeater->add_control(
            'ahew_about_item_desc',
            [
                'label'   => __( 'Item Description', 'al-hasana-elementor-widget' ),
                'type'    => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'There are many variations of passages of available, but the majority', 'al-hasana-elementor-widget' ),
            ]
        );

        $this->add_control(
            'ahew_about_items',
            [
                'label'       => __( 'About Items', 'al-hasana-elementor-widget' ),
                'type'        => \Elementor\Controls_Manager::REPEATER,
                'fields'      => $repeater->get_controls(),
                'title_field' => '{{{ ahew_about_item_title }}}',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        $ahew_about_image = $settings['ahew_about_image']['url'];
        ?>
        <section class="about-section section-padding fix bg-cover" id="about">
            <div class="container">
                <div class="about-wrapper">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="about-image">
                                <img src="<?php echo $ahew_about_image;?>" alt="img">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-content">
                                <div class="section-title">
                                    <span class="sub-title wow fadeInUp">
                                        <?php echo esc_html( $settings['ahew_about_subtitle'] ); ?>
                                    </span>
                                    <h2 class="wow fadeInUp" data-wow-delay=".2s">
                                        <?php echo nl2br( esc_html( $settings['ahew_about_title'] ) ); ?>
                                    </h2>
                                </div>
                                <div class="about-area mt-4 mt-md-0">
                                    <div class="line-image">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/img/about/Line-image.png" alt="img">
                                    </div>
                                    <?php if ( ! empty( $settings['ahew_about_items'] ) ) : ?>
                                        <?php $delay = 0.3; ?>
                                        <?php foreach ( $settings['ahew_about_items'] as $item ) : ?>
                                            <div class="about-items wow fadeInUp" data-wow-delay="<?php echo esc_attr($delay); ?>s">
                                                <div class="icon">
                                                    <?php if ( ! empty( $item['ahew_about_item_icon']['url'] ) ) : ?>
                                                        <img src="<?php echo esc_url( $item['ahew_about_item_icon']['url'] ); ?>" alt="img">
                                                    <?php endif; ?>
                                                </div>
                                                <div class="content">
                                                    <h5><?php echo esc_html( $item['ahew_about_item_title'] ); ?></h5>
                                                    <p><?php echo nl2br( esc_html( $item['ahew_about_item_desc'] ) ); ?></p>
                                                </div>
                                            </div>
                                            <?php $delay += 0.2; ?>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
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
