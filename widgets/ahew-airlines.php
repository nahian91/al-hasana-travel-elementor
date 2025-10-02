<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class AHEW_Airlines extends \Elementor\Widget_Base {

    public function get_name() {
        return 'ahew-airlines';
    }

    public function get_title() {
        return __( 'Airlines', 'al-hasana-elementor-widget' );
    }

    public function get_icon() {
        return 'eicon-gallery-grid';
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
            'posts_per_page',
            [
                'label'   => __( 'Number of Airlines', 'al-hasana-elementor-widget' ),
                'type'    => \Elementor\Controls_Manager::NUMBER,
                'default' => 8,
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

        $args = array(
            'post_type'      => 'airlines',
            'posts_per_page' => ! empty( $settings['posts_per_page'] ) ? $settings['posts_per_page'] : -1,
            'post_status'    => 'publish',
            'orderby'        => 'rand',
        );

        $query = new \WP_Query( $args );

        if ( $query->have_posts() ) :
            ?>
            <div class="row g-4">
                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                    <div class="col-xl-3 col-md-4 col-lg-4 wow fadeInUp" data-wow-delay=".3s">
                        <a href="<?php the_permalink(); ?>" class="single-airline">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail( 'medium', [ 'alt' => esc_attr( get_the_title() ) ] ); ?>
                            <?php endif; ?>
                            <span><?php the_title(); ?></span>
                        </a>
                    </div>
                <?php endwhile; ?>
            </div>
            <?php
            wp_reset_postdata();
        else :
            echo '<p>' . __( 'No airlines found.', 'al-hasana-elementor-widget' ) . '</p>';
        endif;
    }
}
