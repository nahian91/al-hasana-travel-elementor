<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class AHEW_Hero extends \Elementor\Widget_Base {

    public function get_name() {
        return 'ahew-hero';
    }

    public function get_title() {
        return __( 'Hero', 'al-hasana-elementor-widget' );
    }

    public function get_icon() {
        return 'eicon-slider-push'; 
    }

    public function get_categories() {
        return [ 'ahew-category' ];
    }

    protected function register_controls() {

        // Content Section
        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Content', 'al-hasana-elementor-widget' ),
                'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'subtitle',
            [
                'label'   => __( 'Subtitle', 'al-hasana-elementor-widget' ),
                'type'    => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Get unforgettable pleasure with us', 'al-hasana-elementor-widget' ),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'title',
            [
                'label'   => __( 'Title', 'al-hasana-elementor-widget' ),
                'type'    => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( "Discover Your Next Handpicked Journey", 'al-hasana-elementor-widget' ),
                'label_block' => true,
            ]
        );

         $this->add_control(
            'description',
            [
                'label'       => __( 'Description', 'al-hasana-elementor-widget' ),
                'type'        => \Elementor\Controls_Manager::TEXTAREA,
                'label_block' => true,
            ]
        );

        $this->add_control(
            'link',
            [
                'label'       => __( 'Link', 'al-hasana-elementor-widget' ),
                'type'        => \Elementor\Controls_Manager::URL,
                'placeholder' => __( 'https://your-link.com', 'al-hasana-elementor-widget' ),
                'default'     => [
                    'url'         => '',
                    'is_external' => false,
                    'nofollow'    => false,
                ],
                'label_block' => true,
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

        // Full country list
        $countries = array(
            "Afghanistan","Albania","Algeria","Andorra","Angola","Antigua and Barbuda","Argentina",
            "Armenia","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados",
            "Belarus","Belgium","Belize","Benin","Bhutan","Bolivia","Bosnia and Herzegovina","Botswana",
            "Brazil","Brunei","Bulgaria","Burkina Faso","Burundi","Cabo Verde","Cambodia","Cameroon",
            "Canada","Central African Republic","Chad","Chile","China","Colombia","Comoros","Congo (Congo-Brazzaville)",
            "Costa Rica","Croatia","Cuba","Cyprus","Czechia (Czech Republic)","Democratic Republic of the Congo",
            "Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea",
            "Eritrea","Estonia","Eswatini (fmr. Swaziland)","Ethiopia","Fiji","Finland","France","Gabon","Gambia",
            "Georgia","Germany","Ghana","Greece","Grenada","Guatemala","Guinea","Guinea-Bissau","Guyana","Haiti",
            "Holy See","Honduras","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Israel","Italy",
            "Jamaica","Japan","Jordan","Kazakhstan","Kenya","Kiribati","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon",
            "Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Madagascar","Malawi","Malaysia",
            "Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova",
            "Monaco","Mongolia","Montenegro","Morocco","Mozambique","Myanmar (formerly Burma)","Namibia","Nauru",
            "Nepal","Netherlands","New Zealand","Nicaragua","Niger","Nigeria","North Korea","North Macedonia",
            "Norway","Oman","Pakistan","Palau","Palestine State","Panama","Papua New Guinea","Paraguay","Peru",
            "Philippines","Poland","Portugal","Qatar","Romania","Russia","Rwanda","Saint Kitts and Nevis",
            "Saint Lucia","Saint Vincent and the Grenadines","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia",
            "Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia",
            "South Africa","South Korea","South Sudan","Spain","Sri Lanka","Sudan","Suriname","Sweden","Switzerland",
            "Syria","Tajikistan","Tanzania","Thailand","Timor-Leste","Togo","Tonga","Trinidad and Tobago","Tunisia",
            "Turkey","Turkmenistan","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States of America",
            "Uruguay","Uzbekistan","Vanuatu","Venezuela","Vietnam","Yemen","Zambia","Zimbabwe"
        );
        ?>

        <!-- hero-section start -->
        <section class="hero-section-2">
            <div class="hero-2">
                <div class="container custom-container-3">
                    <div class="row">
                        <div class="col-lg-6">

                            <div class="hero-content best-price-section">
                                <?php if ( !empty($settings['subtitle']) ) : ?>
                                    <div class="sub-title wow fadeInUp">
                                        <?php echo esc_html($settings['subtitle']); ?>
                                    </div>
                                <?php endif; ?>

                                <?php if ( !empty($settings['title']) ) : ?>
                                    <h1 class="wow fadeInUp" data-wow-delay=".2s">
                                        <?php echo wp_kses_post(nl2br($settings['title'])); ?>
                                    </h1>
                                <?php endif; ?>

                                <?php if ( !empty($settings['description']) ) : ?>
                                    <p class="wow fadeInUp" data-wow-delay=".2s">
                                        <?php echo $settings['description']; ?>
                                    </p>
                                <?php endif; ?>

                                <?php if ( !empty($settings['link']['url']) ) : ?>
                                    <button type="submit" class="theme-btn w-100">
                                        <a href="<?php echo esc_url($settings['link']['url']); ?>">Book Appointment</a>
                                    </button>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="best-price-section mb-0">
                                <div class="hero-bottom">
                                    <div class="row">
                                        <div class="best-price-wrapper">
                                            <ul class="nav">
    <li class="nav-item wow fadeInUp" data-wow-delay=".2s">
        <a href="#thumb4" data-bs-toggle="tab" class="nav-link active">
            <i class="fa-regular fa-paper-plane"></i> Air Ticket
        </a>
    </li>
    <li class="nav-item wow fadeInUp" data-wow-delay=".2s">
        <a href="#thumb1" data-bs-toggle="tab" class="nav-link">
            <i class="fa-regular fa-map"></i> Tour
        </a>
    </li>
    <li class="nav-item wow fadeInUp" data-wow-delay=".2s">
        <a href="#thumb2" data-bs-toggle="tab" class="nav-link">
            <i class="fa-regular fa-id-card"></i> Visa
        </a>
    </li>
    <li class="nav-item wow fadeInUp" data-wow-delay=".2s">
        <a href="#thumb3" data-bs-toggle="tab" class="nav-link">
            <i class="fa-regular fa-building"></i> Hotel
        </a>
    </li>
</ul>

                                        </div>

                                        <div class="tab-content">

                                            <!-- GAMCA Form -->
                                            <div id="thumb4" class="tab-pane fade show active">
                                                <div class="comment-form-wrap gtamca-form">
    <form action="#" method="POST">
        <div class="row">
            <div class="col-md-4">
                <div class="form-clt">
                    <span>Flying From</span>
                    <input type="text" name="tour_phone" placeholder="Flying from">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-clt">
                    <span>Flying To</span>
                    <input type="text" name="tour_phone" placeholder="Flying to">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-clt">
                    <span>Departing</span>
                    <input type="text" name="tour_phone" placeholder="Departing">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-clt">
                    <span>Adult (12+ yrs) </span>
                    <select name="tour_destination" class="nice-select w-100">
                        <option value="">Select</option>
                        <option value="">1</option>
                        <option value="">2</option>                        
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-clt">
                    <span>Child (3-11 yrs) </span>
                    <select name="tour_destination" class="nice-select w-100">
                        <option value="">Select</option>
                        <option value="">1</option>
                        <option value="">2</option>                        
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-clt">
                    <span>Infant (0-2 yrs) </span>
                    <select name="tour_destination" class="nice-select w-100">
                        <option value="">Select</option>
                        <option value="">1</option>
                        <option value="">2</option>                        
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-clt">
                    <span>Phone</span>
                    <input type="text" name="tour_phone" placeholder="Phone">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-clt">
                    <span>Email</span>
                    <input type="text" name="tour_phone" placeholder="Email">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-clt">
                    <button type="submit" class="theme-btn w-100"><a href="">Submit Tour Request</a></button>
                </div>
            </div>
        </div>
    </form>
                                                </div>
                                            </div>

                                            <!-- TOUR Form -->
                                            <div id="thumb1" class="tab-pane fade">
                                                <div class="comment-form-wrap">
                                                    <!-- Search Form -->
        <form method="get" action="<?php echo esc_url(get_permalink(get_page_by_path('search-tours'))); ?>">
            <div class="row">

                <!-- Destination -->
                <div class="col-md-6">
                    <div class="form-clt">
                        <span>Where Do You Want to Go?</span>
                        <select name="tour_destination" class="nice-select w-100">
                            <option value="">Select Country</option>
                            <?php
                            $locations = [];
                            $tours = get_posts(['post_type' => 'tour', 'posts_per_page' => -1]);
                            foreach ($tours as $tour) {
                                $loc = get_field('location', $tour->ID);
                                if ($loc) $locations[] = $loc;
                            }
                            $locations = array_unique($locations);
                            sort($locations);
                            foreach ($locations as $loc) {
                                $selected = (isset($_GET['tour_destination']) && $_GET['tour_destination'] == $loc) ? 'selected' : '';
                                echo '<option value="'.esc_attr($loc).'" '.$selected.'>'.esc_html($loc).'</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <!-- Activities -->
                <div class="col-md-6">
                    <div class="form-clt">
                        <span>Activities</span>
                        <select name="activities[]" class="nice-select w-100">
                            <?php
                            $activities_arr = [];
                            foreach ($tours as $tour) {
                                $vals = get_field('activities', $tour->ID);
                                if ($vals) $activities_arr = array_merge($activities_arr, (array)$vals);
                            }
                            $activities_arr = array_unique($activities_arr);
                            sort($activities_arr);
                            $selected_activities = isset($_GET['activities']) ? (array) $_GET['activities'] : [];
                            foreach ($activities_arr as $act) {
                                $selected = in_array($act, $selected_activities) ? 'selected' : '';
                                echo '<option value="'.esc_attr($act).'" '.$selected.'>'.esc_html($act).'</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <!-- Trip Types -->
                <div class="col-md-6">
                    <div class="form-clt">
                        <span>Trip Types</span>
                        <select name="trip_types[]" class="nice-select w-100" >
                            <?php
                            $trip_types_arr = [];
                            foreach ($tours as $tour) {
                                $vals = get_field('trip_types', $tour->ID);
                                if ($vals) $trip_types_arr = array_merge($trip_types_arr, (array)$vals);
                            }
                            $trip_types_arr = array_unique($trip_types_arr);
                            sort($trip_types_arr);
                            $selected_trip_types = isset($_GET['trip_types']) ? (array) $_GET['trip_types'] : [];
                            foreach ($trip_types_arr as $type) {
                                $selected = in_array($type, $selected_trip_types) ? 'selected' : '';
                                echo '<option value="'.esc_attr($type).'" '.$selected.'>'.esc_html($type).'</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <!-- Difficulty -->
                <div class="col-md-6">
                    <div class="form-clt">
                        <span>Difficulty</span>
                        <select name="difficulties[]" class="nice-select w-100">
                            <?php
                            $difficulties_arr = [];
                            foreach ($tours as $tour) {
                                $vals = get_field('difficulties', $tour->ID);
                                if ($vals) $difficulties_arr = array_merge($difficulties_arr, (array)$vals);
                            }
                            $difficulties_arr = array_unique($difficulties_arr);
                            sort($difficulties_arr);
                            $selected_difficulties = isset($_GET['difficulties']) ? (array) $_GET['difficulties'] : [];
                            foreach ($difficulties_arr as $diff) {
                                $selected = in_array($diff, $selected_difficulties) ? 'selected' : '';
                                echo '<option value="'.esc_attr($diff).'" '.$selected.'>'.esc_html($diff).'</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="col-md-12 mt-3">
                    <div class="form-clt">
                        <button type="submit" class="theme-btn w-100">Search Tours</button>
                    </div>
                </div>

            </div>
        </form>

                                                </div>
                                            </div>

                                            <!-- VISA Form -->
                                            <div id="thumb2" class="tab-pane fade">
                                                <div class="comment-form-wrap">

                                                <?php

// Get all Visa CPT posts
$visa_posts = get_posts([
    'post_type'      => 'visa',
    'posts_per_page' => -1,
]);

// Prepare options for select fields
$travel_to_options = [];
$category_options = [];

if (!empty($visa_posts)) {
    foreach ($visa_posts as $post) {
        // Traveling To comes from visa_processing_name
        $travel_to = get_field('visa_processing_name', $post->ID);
        if ($travel_to) $travel_to_options[$post->ID] = $travel_to;

        // Visa Category comes from visa_processing_category
        $category = get_field('visa_processing_category', $post->ID);
        if ($category) $category_options[$post->ID] = $category;
    }
}
?>

<form id="visa-form">
    <div class="row">
        <!-- Citizen Of -->
        <div class="col-md-6">
            <div class="form-clt">
                <span>Citizen Of</span>
                <select name="visa_citizen" class="nice-select w-100">
                    <option value="Bangladesh">Bangladesh</option>
                </select>
            </div>
        </div>

        <!-- Traveling To -->
        <div class="col-md-6">
            <div class="form-clt">
                <span>Traveling To</span>
                <select name="visa_travel_to" class="nice-select w-100" required>
                    <option value="">Select Country</option>
                    <?php foreach ($travel_to_options as $id => $name): ?>
                        <option value="<?php echo esc_attr($name); ?>" data-link="<?php echo get_permalink($id); ?>">
                            <?php echo esc_html($name); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>

        <!-- Visa Category -->
        <div class="col-md-12">
            <div class="form-clt">
                <span>Visa Category</span>
                <select name="visa_category" class="nice-select w-100" required>
                    <option value="">Select Category</option>
                    <?php foreach ($category_options as $id => $cat): ?>
                        <option value="<?php echo esc_attr($cat); ?>" data-link="<?php echo get_permalink($id); ?>">
                            <?php echo esc_html($cat); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>

        <!-- Submit Button -->
        <div class="col-md-12">
            <div class="form-clt">
                <button type="submit" class="theme-btn w-100">Submit Visa Request</button>
            </div>
        </div>
    </div>
</form>

<script>
// Redirect to single CPT page with query params on submit
document.getElementById('visa-form').addEventListener('submit', function(e) {
    e.preventDefault();

    const citizen = this.visa_citizen.value;
    const travelSelect = this.visa_travel_to;
    const categorySelect = this.visa_category;

    const travelTo = travelSelect.value;
    const travelLink = travelSelect.selectedOptions[0].dataset.link;

    const category = categorySelect.value;

    if (!travelTo || !category) {
        alert('Please select Traveling To and Visa Category.');
        return;
    }

    // Build URL with query parameters
    const url = `${travelLink}?citizen=${encodeURIComponent(citizen)}&travel_to=${encodeURIComponent(travelTo)}&category=${encodeURIComponent(category)}`;
    window.location.href = url;
});
</script>

                                                </div>
                                            </div>

                                            <!-- HOTEL Form -->
                                            <div id="thumb3" class="tab-pane fade">
                                                 <div class="hotel-link">
        <a href="https://www.booking.com" target="_blank">Booking.com</a>
    </div>
    <div class="hotel-link">
        <a href="https://www.agoda.com" target="_blank">Agoda</a>
    </div>
    <div class="hotel-link">
        <a href="https://www.tripadvisor.com" target="_blank">TripAdvisor</a>
    </div>
    <div class="hotel-link">
        <a href="https://www.expedia.com" target="_blank">Expedia</a>
    </div>
                                            </div>

                                        </div> <!-- .tab-content -->

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- hero-section end -->

        <?php 
    }
}
