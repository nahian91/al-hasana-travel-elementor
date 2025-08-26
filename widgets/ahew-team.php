<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class AHEW_Team extends \Elementor\Widget_Base {

    public function get_name() {
        return 'ahew-team';
    }

    public function get_title() {
        return __( 'Team', 'al-hasana-elementor-widget' );
    }

    public function get_icon() {
        return 'eicon-person'; // Elementor default icon
    }

    public function get_categories() {
        return [ 'ahew-category' ];
    }

    protected function register_controls() {
    $this->start_controls_section(
        'ahew_team_content_section',
        [
            'label' => __( 'Team Member Content', 'al-hasana-elementor-widget' ),
            'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
    );

    // Team Image
    $this->add_control(
        'ahew_team_image',
        [
            'label'   => __( 'Team Image', 'al-hasana-elementor-widget' ),
            'type'    => \Elementor\Controls_Manager::MEDIA,
            'default' => [
                'url' => \Elementor\Utils::get_placeholder_image_src(),
            ],
        ]
    );

    // Title
    $this->add_control(
        'ahew_team_title',
        [
            'label'   => __( 'Name', 'al-hasana-elementor-widget' ),
            'type'    => \Elementor\Controls_Manager::TEXT,
            'default' => __( 'John Doe', 'al-hasana-elementor-widget' ),
        ]
    );

    // Designation
    $this->add_control(
        'ahew_team_designation',
        [
            'label'   => __( 'Designation', 'al-hasana-elementor-widget' ),
            'type'    => \Elementor\Controls_Manager::TEXT,
            'default' => __( 'CEO', 'al-hasana-elementor-widget' ),
        ]
    );

    // Facebook
    $this->add_control(
        'ahew_facebook_link',
        [
            'label'       => __( 'Facebook URL', 'al-hasana-elementor-widget' ),
            'type'        => \Elementor\Controls_Manager::URL,
            'placeholder' => __( 'https://facebook.com/', 'al-hasana-elementor-widget' ),
        ]
    );

    // Twitter
    $this->add_control(
        'ahew_twitter_link',
        [
            'label'       => __( 'Twitter URL', 'al-hasana-elementor-widget' ),
            'type'        => \Elementor\Controls_Manager::URL,
            'placeholder' => __( 'https://twitter.com/', 'al-hasana-elementor-widget' ),
        ]
    );

    // LinkedIn
    $this->add_control(
        'ahew_linkedin_link',
        [
            'label'       => __( 'LinkedIn URL', 'al-hasana-elementor-widget' ),
            'type'        => \Elementor\Controls_Manager::URL,
            'placeholder' => __( 'https://linkedin.com/', 'al-hasana-elementor-widget' ),
        ]
    );

    // Instagram
    $this->add_control(
        'ahew_instagram_link',
        [
            'label'       => __( 'Instagram URL', 'al-hasana-elementor-widget' ),
            'type'        => \Elementor\Controls_Manager::URL,
            'placeholder' => __( 'https://instagram.com/', 'al-hasana-elementor-widget' ),
        ]
    );

    $this->end_controls_section();
}


    protected function render() {
        $settings = $this->get_settings_for_display();
        $ahew_image       = $settings['ahew_team_image']['url'];
        $ahew_title       = $settings['ahew_team_title'];
        $ahew_designation = $settings['ahew_team_designation'];
        $ahew_facebook    = $settings['ahew_facebook_link']['url'];
        $ahew_twitter     = $settings['ahew_twitter_link']['url'];
        $ahew_linkedin    = $settings['ahew_linkedin_link']['url'];
        $ahew_instagram   = $settings['ahew_instagram_link']['url'];

        ?>
        <div class="team-card-item">
        <div class="team-image">
            <?php if ( $ahew_image ) : ?>
                <img src="<?php echo esc_url( $ahew_image ); ?>" alt="<?php echo esc_attr( $ahew_title ); ?>">
            <?php endif; ?>
        </div>

        <div class="team-content">
            <?php if ( $ahew_title ) : ?>
                <h4><?php echo esc_html( $ahew_title ); ?></h4>
            <?php endif; ?>

            <?php if ( $ahew_designation ) : ?>
                <p><?php echo esc_html( $ahew_designation ); ?></p>
            <?php endif; ?>

            <div class="social-profile">
                <ul>
                    <?php if ( $ahew_facebook ) : ?>
                        <li><a href="<?php echo esc_url( $ahew_facebook ); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <?php endif; ?>
                    <?php if ( $ahew_twitter ) : ?>
                        <li><a href="<?php echo esc_url( $ahew_twitter ); ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <?php endif; ?>
                    <?php if ( $ahew_linkedin ) : ?>
                        <li><a href="<?php echo esc_url( $ahew_linkedin ); ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                    <?php endif; ?>
                    <?php if ( $ahew_instagram ) : ?>
                        <li><a href="<?php echo esc_url( $ahew_instagram ); ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <?php endif; ?>
                </ul>
                <span class="plus-btn"><i class="fas fa-share-alt"></i></span>
            </div>
        </div>
    </div>
        <?php 
    }
}
