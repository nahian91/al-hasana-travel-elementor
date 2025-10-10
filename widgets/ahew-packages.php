<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class AHEW_Tour_Category extends \Elementor\Widget_Base {

    public function get_name() {
        return 'ahew-tour-list';
    }

    public function get_title() {
        return __( 'Tour List', 'al-hasana-elementor-widget' );
    }

    public function get_icon() {
        return 'eicon-post-list';
    }

    public function get_categories() {
        return [ 'ahew-category' ];
    }

    protected function register_controls() {

        $this->start_controls_section(
            'ahew_tour_list_section',
            [
                'label' => __( 'Content', 'al-hasana-elementor-widget' ),
                'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        // Tour Category Dropdown
        $categories = get_terms([
            'taxonomy' => 'tour_category',
            'hide_empty' => false,
        ]);

        $cat_options = [];
        if ( ! is_wp_error( $categories ) ) {
            foreach ( $categories as $cat ) {
                $cat_options[ $cat->slug ] = $cat->name;
            }
        }

        $this->add_control(
            'tour_category',
            [
                'label'   => __( 'Select Tour Category', 'al-hasana-elementor-widget' ),
                'type'    => \Elementor\Controls_Manager::SELECT,
                'options' => $cat_options,
                'default' => 'hajj-packages',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        $category = $settings['tour_category'];

        $args = [
            'post_type'      => 'tour',
            'posts_per_page' => -1,
            'tax_query'      => [
                [
                    'taxonomy' => 'tour_category',
                    'field'    => 'slug',
                    'terms'    => $category,
                ],
            ],
        ];

        $query = new WP_Query( $args );

        if ( $query->have_posts() ) :
            echo '<div class="col-md-8">';
            while ( $query->have_posts() ) : $query->the_post();
                $loc     = get_field('location');
                $days    = get_field('days');
                $peoples = get_field('peoples');
                $price   = get_field('price');
                ?>
                <div class="destination-card-items mt-0">
                    <div class="destination-image">
                        <?php 
                        if ( has_post_thumbnail() ) : 
                            the_post_thumbnail( 'full', ['alt'=>get_the_title()] ); 
                        else: ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/news/default.jpg" alt="default">
                        <?php endif; ?>
                    </div>
                    <div class="destination-content">
                        <ul class="meta">
                            <li><i class="fa-regular fa-location-dot"></i> <?php echo esc_html( $loc ); ?></li>
                        </ul>
                        <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                        <ul class="info">
                            <li><i class="fa-regular fa-clock"></i> <?php echo esc_html( $days ); ?></li>
                            <li><i class="fa-regular fa-users"></i> <?php echo esc_html( $peoples ); ?></li>
                        </ul>
                        <div class="price">
                            <h6>৳<?php echo esc_html( $price ); ?></h6>
                            <a href="<?php the_permalink(); ?>" class="theme-btn style-2">View Details <i class="fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <?php
            endwhile;
            echo '</div>';
            wp_reset_postdata();
        else :
            echo '<div class="col-md-8"><p>No tours found in this category.</p></div>';
        endif;
    }
}
