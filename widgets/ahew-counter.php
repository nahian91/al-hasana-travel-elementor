<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class AHEW_Counter extends \Elementor\Widget_Base {

    public function get_name() {
        return 'ahew_counter';
    }

    public function get_title() {
        return __( 'Counter', 'al-hasana-elementor-widget' );
    }

    public function get_icon() {
        return 'eicon-counter';
    }

    public function get_categories() {
        return [ 'ahew-category' ];
    }

    protected function register_controls() {

        $this->start_controls_section(
            'ahew_content_section',
            [
                'label' => __( 'Counters', 'al-hasana-elementor-widget' ),
                'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'ahew_number',
            [
                'label'   => __( 'Number', 'al-hasana-elementor-widget' ),
                'type'    => \Elementor\Controls_Manager::TEXT,
                'default' => __( '100', 'al-hasana-elementor-widget' ),
            ]
        );

        $repeater->add_control(
            'ahew_suffix',
            [
                'label'   => __( 'Suffix (e.g. +, %, k)', 'al-hasana-elementor-widget' ),
                'type'    => \Elementor\Controls_Manager::TEXT,
                'default' => __( '+', 'al-hasana-elementor-widget' ),
            ]
        );

        $repeater->add_control(
            'ahew_label',
            [
                'label'   => __( 'Label', 'al-hasana-elementor-widget' ),
                'type'    => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Years Experience', 'al-hasana-elementor-widget' ),
            ]
        );

        $this->add_control(
            'ahew_counters',
            [
                'label'       => __( 'Counter Items', 'al-hasana-elementor-widget' ),
                'type'        => \Elementor\Controls_Manager::REPEATER,
                'fields'      => $repeater->get_controls(),
                'default'     => [
                    [
                        'ahew_number' => '26',
                        'ahew_suffix' => '+',
                        'ahew_label'  => 'Years Experiences',
                    ],
                    [
                        'ahew_number' => '3.6',
                        'ahew_suffix' => 'k+',
                        'ahew_label'  => 'Yearly Customers',
                    ],
                    [
                        'ahew_number' => '46',
                        'ahew_suffix' => '+',
                        'ahew_label'  => 'Visitors daily',
                    ],
                    [
                        'ahew_number' => '56',
                        'ahew_suffix' => '+',
                        'ahew_label'  => 'Awards & honors',
                    ],
                ],
                'title_field' => '{{{ ahew_label }}}',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="counter-wrapper">
            <?php foreach ( $settings['ahew_counters'] as $index => $item ) : ?>
                <div class="counter-items wow fadeInUp" data-wow-delay=".<?php echo esc_attr( ( $index + 1 ) * 2 ); ?>s">
                    <div class="counter-content">
                        <h2>
                            <span class="count"><?php echo esc_html( $item['ahew_number'] ); ?></span>
                            <?php echo esc_html( $item['ahew_suffix'] ); ?>
                        </h2>
                        <p><?php echo esc_html( $item['ahew_label'] ); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <?php
    }
}
