<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class AHEW_Blog_Grid extends \Elementor\Widget_Base {

    public function get_name() {
        return 'ahew-blog-grid';
    }

    public function get_title() {
        return __( 'Blog Grid', 'al-hasana-elementor-widget' );
    }

    public function get_icon() {
        return 'eicon-posts-grid'; // Elementor default icon
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
            'title',
            [
                'label'   => __( 'Title', 'al-hasana-elementor-widget' ),
                'type'    => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Hello World from Widget 1', 'al-hasana-elementor-widget' ),
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="section-title text-center">
                <span class="sub-title wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    Blog & Tips
                </span>
                <h2 class="wow fadeInUp wow" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    Travel Tips and Blog
                </h2>
            </div>
        <div class="row g-4">
            <?php
            $args = array(
                'post_type'      => 'post',
                'posts_per_page' => 3, // Number of posts per page
                'paged'          => get_query_var('paged') ? get_query_var('paged') : 1,
            );
            $loop = new WP_Query($args);

            if ($loop->have_posts()) :
                while ($loop->have_posts()) : $loop->the_post();
            ?>
                <div class="col-xl-4 col-md-6 col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="news-card-items-3 mt-0">
                        <div class="news-image">
                            <?php if (has_post_thumbnail()) : ?>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('medium', ['alt' => get_the_title()]); ?>
                                </a>
                            <?php endif; ?>
                        </div>
                        <div class="news-content">
                            <ul class="post-meta">
                                <li class="post"><?php echo get_the_date('d'); ?><span><?php echo get_the_date('M'); ?></span></li>
                                <li>
                                    <i class="fa-regular fa-user"></i>
                                    By <?php the_author(); ?>
                                </li>
                                <li>
                                    <i class="fa-regular fa-tag"></i>
                                    <?php the_category(', '); ?>
                                </li>
                            </ul>
                            <h4>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h4>
							<?php the_excerpt();?>
                            <a href="<?php the_permalink(); ?>" class="link-btn">Read More <i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>

        <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <p>No posts found.</p>
        <?php endif; ?>
        <?php 
    }
}
