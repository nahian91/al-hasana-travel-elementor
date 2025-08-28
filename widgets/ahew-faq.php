<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class AHEW_FAQ extends \Elementor\Widget_Base {

    public function get_name() {
        return 'ahew-faq';
    }

    public function get_title() {
        return __( 'FAQ', 'al-hasana-elementor-widget' );
    }

    public function get_icon() {
        return 'eicon-help-o';
    }

    public function get_categories() {
        return [ 'ahew-category' ];
    }

    protected function register_controls() {

        // Section title controls
        $this->start_controls_section(
            'ahew_faq_content_section',
            [
                'label' => __( 'FAQ Content', 'al-hasana-elementor-widget' ),
                'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'ahew_subtitle',
            [
                'label'   => __( 'Subtitle', 'al-hasana-elementor-widget' ),
                'type'    => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Choose Your Place', 'al-hasana-elementor-widget' ),
            ]
        );

        $this->add_control(
            'ahew_title',
            [
                'label'   => __( 'Title', 'al-hasana-elementor-widget' ),
                'type'    => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Frequently Asked Questions', 'al-hasana-elementor-widget' ),
            ]
        );

        $this->add_control(
            'ahew_description',
            [
                'label'   => __( 'Description', 'al-hasana-elementor-widget' ),
                'type'    => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'We\'re not just another agency – we\'re your digital growth partners. With years of experience, our team delivers measurable results to propel your business forward.', 'al-hasana-elementor-widget' ),
            ]
        );

        // Bullet points list
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'ahew_list_text',
            [
                'label'   => __( 'List Item', 'al-hasana-elementor-widget' ),
                'type'    => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Top quality service', 'al-hasana-elementor-widget' ),
            ]
        );
        $repeater->add_control(
            'ahew_list_icon',
            [
                'label'   => __( 'Icon/Image', 'al-hasana-elementor-widget' ),
                'type'    => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'ahew_bullet_list',
            [
                'label'       => __( 'Bullet Points', 'al-hasana-elementor-widget' ),
                'type'        => \Elementor\Controls_Manager::REPEATER,
                'fields'      => $repeater->get_controls(),
                'title_field' => '{{{ ahew_list_text }}}',
            ]
        );

        $this->end_controls_section();

        // FAQ accordion
        $this->start_controls_section(
            'ahew_faq_section',
            [
                'label' => __( 'FAQs', 'al-hasana-elementor-widget' ),
                'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $faq_repeater = new \Elementor\Repeater();
        $faq_repeater->add_control(
            'ahew_question',
            [
                'label'   => __( 'Question', 'al-hasana-elementor-widget' ),
                'type'    => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'How do I book a tour with your agency?', 'al-hasana-elementor-widget' ),
            ]
        );
        $faq_repeater->add_control(
            'ahew_answer',
            [
                'label'   => __( 'Answer', 'al-hasana-elementor-widget' ),
                'type'    => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'You can book directly through our website or by contacting our support team for assistance.', 'al-hasana-elementor-widget' ),
            ]
        );

        $this->add_control(
            'ahew_faq_list',
            [
                'label'       => __( 'FAQ Items', 'al-hasana-elementor-widget' ),
                'type'        => \Elementor\Controls_Manager::REPEATER,
                'fields'      => $faq_repeater->get_controls(),
                'title_field' => '{{{ ahew_question }}}',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <section class="faq-section section-padding pt-0 fix">
            <div class="container">
                <div class="faq-wrapper">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="faq-content">
                                <div class="section-title">
                                    <?php if ( ! empty( $settings['ahew_subtitle'] ) ) : ?>
                                        <span class="sub-title"><?php echo esc_html( $settings['ahew_subtitle'] ); ?></span>
                                    <?php endif; ?>
                                    <?php if ( ! empty( $settings['ahew_title'] ) ) : ?>
                                        <h2><?php echo esc_html( $settings['ahew_title'] ); ?></h2>
                                    <?php endif; ?>
                                </div>
                                <?php if ( ! empty( $settings['ahew_description'] ) ) : ?>
                                    <p class="mt-3"><?php echo esc_html( $settings['ahew_description'] ); ?></p>
                                <?php endif; ?>
                                <?php if ( ! empty( $settings['ahew_bullet_list'] ) ) : ?>
                                    <ul class="faq-list">
                                        <?php foreach ( $settings['ahew_bullet_list'] as $item ) : ?>
                                            <li>
                                                <?php if ( ! empty( $item['ahew_list_icon']['url'] ) ) : ?>
                                                    <img src="<?php echo esc_url( $item['ahew_list_icon']['url'] ); ?>" alt="icon">
                                                <?php endif; ?>
                                                <?php echo esc_html( $item['ahew_list_text'] ); ?>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="faq-items">
                                <div class="faq-accordion">
                                    <div class="accordion" id="ahew_accordion">
                                        <?php 
                                        if ( ! empty( $settings['ahew_faq_list'] ) ) :
                                            $i = 1;
                                            foreach ( $settings['ahew_faq_list'] as $faq ) :
                                                $collapse_id = 'ahew_faq' . $i;
                                                ?>
                                                <div class="accordion-item mb-3">
                                                    <h5 class="accordion-header">
                                                        <button class="accordion-button <?php echo $i !== 1 ? 'collapsed' : ''; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo esc_attr( $collapse_id ); ?>" aria-expanded="<?php echo $i === 1 ? 'true' : 'false'; ?>" aria-controls="<?php echo esc_attr( $collapse_id ); ?>">
                                                            <?php echo esc_html( $faq['ahew_question'] ); ?>
                                                        </button>
                                                    </h5>
                                                    <div id="<?php echo esc_attr( $collapse_id ); ?>" class="accordion-collapse collapse <?php echo $i === 1 ? 'show' : ''; ?>" data-bs-parent="#ahew_accordion">
                                                        <div class="accordion-body">
                                                            <?php echo esc_html( $faq['ahew_answer'] ); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                                $i++;
                                            endforeach;
                                        endif;
                                        ?>
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
