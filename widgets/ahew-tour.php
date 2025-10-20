<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class AHEW_Tour extends \Elementor\Widget_Base {

    public function get_name() {
        return 'ahew-tour';
    }

    public function get_title() {
        return __( 'Tour', 'al-hasana-elementor-widget' );
    }

    public function get_icon() {
        return 'eicon-kit-details';
    }

    public function get_categories() {
        return [ 'ahew-category' ];
    }

    protected function register_controls() {
        $this->start_controls_section(
            'ahew_content_section',
            [
                'label' => __( 'Content', 'al-hasana-elementor-widget' ),
                'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        // Subtitle
        $this->add_control(
            'ahew_section_subtitle',
            [
                'label' => __( 'Section Subtitle', 'al-hasana-elementor-widget' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Blog & Tips', 'al-hasana-elementor-widget' ),
            ]
        );

        // Title
        $this->add_control(
            'ahew_section_title',
            [
                'label' => __( 'Section Title', 'al-hasana-elementor-widget' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Travel Tips and Blog', 'al-hasana-elementor-widget' ),
            ]
        );

        // Get all tour categories
        $categories = get_terms([
            'taxonomy'   => 'tour_category',
            'hide_empty' => false,
        ]);

        $cat_options = [];
        if ( ! is_wp_error( $categories ) && ! empty( $categories ) ) {
            foreach ( $categories as $cat ) {
                $cat_options[$cat->slug] = $cat->name;
            }
        }

        // Multiple category select
        $this->add_control(
            'ahew_tour_category',
            [
                'label'    => __( 'Select Tour Categories', 'al-hasana-elementor-widget' ),
                'type'     => \Elementor\Controls_Manager::SELECT2,
                'options'  => $cat_options,
                'multiple' => true,
                'default'  => ! empty( $cat_options ) ? [ array_key_first( $cat_options ) ] : [],
            ]
        );

        // Count
        $this->add_control(
            'ahew_tour_count',
            [
                'label' => __( 'Number of Tours to Show', 'al-hasana-elementor-widget' ),
                'type'  => \Elementor\Controls_Manager::NUMBER,
                'min'   => 1,
                'max'   => 100,
                'step'  => 1,
                'default' => 6,
            ]
        );

        // View All button text
        $this->add_control(
            'ahew_viewall_text',
            [
                'label' => __( 'View All Button Text', 'al-hasana-elementor-widget' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'View All', 'al-hasana-elementor-widget' ),
            ]
        );

        // View All button link
        $this->add_control(
            'ahew_viewall_link',
            [
                'label' => __( 'View All Button URL', 'al-hasana-elementor-widget' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => __( 'https://your-link.com', 'al-hasana-elementor-widget' ),
                'default' => [
                    'url' => '#',
                ],
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

        $subtitle            = $settings['ahew_section_subtitle'];
        $title               = $settings['ahew_section_title'];
        $selected_categories = $settings['ahew_tour_category'];
        $tour_count          = ! empty( $settings['ahew_tour_count'] ) ? intval( $settings['ahew_tour_count'] ) : 6;
        $viewall_text        = $settings['ahew_viewall_text'];
        $viewall_link        = $settings['ahew_viewall_link']['url'];

        // Prepare taxonomy query
        $tax_query = [];
        if ( ! empty( $selected_categories ) ) {
            $tax_query[] = [
                'taxonomy' => 'tour_category',
                'field'    => 'slug',
                'terms'    => $selected_categories,
            ];
        }

        ?>
        <div class="section-title text-center">
            <span class="sub-title wow fadeInUp"><?php echo esc_html( $subtitle ); ?></span>
            <h2 class="wow fadeInUp" data-wow-delay=".2s"><?php echo esc_html( $title ); ?></h2>
        </div>

        <div class="tour-destination-wrapper tour-widget">
            <div class="row g-4">
                <?php
                $tours = new WP_Query( [
                    'post_type'      => 'tour',
                    'posts_per_page' => $tour_count,
                    'tax_query'      => $tax_query,
                ] );

                if ( $tours->have_posts() ) :
                    while ( $tours->have_posts() ) : $tours->the_post();
                        $tour_location = get_field( 'location' );
                        $tour_days     = get_field( 'days' );
                        $tour_peoples  = get_field( 'peoples' );
                        $tour_price    = get_field( 'price' );
                        ?>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="destination-card-items mt-0">
                                <div class="destination-image">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <?php the_post_thumbnail( 'full', [ 'alt' => get_the_title() ] ); ?>
                                    <?php else : ?>
                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/news/default.jpg' ); ?>" alt="default">
                                    <?php endif; ?>
                                </div>
                                <div class="destination-content">
                                    <ul class="meta">
                                        <li>
                                            <i class="fa-regular fa-location-dot"></i>
                                            <?php echo esc_html( $tour_location ); ?>
                                        </li>
                                    </ul>
                                    <h5>
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </h5>
                                    <ul class="info">
                                        <li>
                                            <i class="fa-regular fa-clock"></i>
                                            <?php echo esc_html( $tour_days ); ?>
                                        </li>
                                        <li>
                                            <i class="fa-regular fa-users"></i>
                                            <?php echo esc_html( $tour_peoples ); ?>
                                        </li>
                                    </ul>
                                    <div class="price">
                                        <h6>৳<?php echo esc_html( $tour_price ); ?></h6>
                                        <a href="<?php the_permalink(); ?>" class="theme-btn style-2">
                                            View Details <i class="fa-regular fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata();
                else : ?>
                    <p><?php esc_html_e( 'No tours found.', 'al-hasana-elementor-widget' ); ?></p>
                <?php endif; ?>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="trou-more-btn text-center">
                        <a href="<?php echo esc_url( $viewall_link ); ?>" class="theme-btn">
                            <?php echo esc_html( $viewall_text ); ?>
                            <i class="fa-sharp fa-regular fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}
