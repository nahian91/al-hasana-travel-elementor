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
                'label'   => __( 'Description', 'al-hasana-elementor-widget' ),
                'type'    => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( "There are many variations of passages of available, but the majority have suffered alteration in some form, by injected humour words which don't look even slightly believable.", 'al-hasana-elementor-widget' ),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'background_image',
            [
                'label'   => __( 'Background Image', 'al-hasana-elementor-widget' ),
                'type'    => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/hero/02.jpg',
                ],
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

        $bg_image = !empty($settings['background_image']['url']) ? $settings['background_image']['url'] : '';
        ?>
        
        <!-- hero-2-Section Start -->
        <section class="hero-section-2">
            <div class="hero-2 bg-cover" style="background-image: url(<?php echo esc_url($bg_image); ?>);">
                <div class="container custom-container-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero-content">
                                <?php if ( !empty($settings['subtitle']) ) : ?>
                                    <div class="sub-title wow fadeInUp">
                                        <?php echo esc_html($settings['subtitle']); ?>
                                    </div>
                                <?php endif; ?>

                                <?php if ( !empty($settings['title']) ) : ?>
                                    <h1 class="wow fadeInUp" data-wow-delay=".3s">
                                        <?php echo wp_kses_post(nl2br($settings['title'])); ?>
                                    </h1>
                                <?php endif; ?>

                                <?php if ( !empty($settings['description']) ) : ?>
                                    <p class="wow fadeInUp" data-wow-delay=".5s">
                                        <?php echo esc_html($settings['description']); ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-lg-6">
                         <div class="best-price-section mb-0">
            <div class="container custom-container-3">
                <div class="hero-bottom">
                    <div class="row">
                        <div class="best-price-wrapper">
                            <ul class="nav">
                                <li class="nav-item wow fadeInUp" data-wow-delay=".3s">
                                    <a href="#thumb1" data-bs-toggle="tab" class="nav-link active">
                                        Tour
                                    </a>
                                </li>
                                <li class="nav-item wow fadeInUp" data-wow-delay=".5s">
                                    <a href="#thumb2" data-bs-toggle="tab" class="nav-link">
                                        Visa
                                    </a>
                                </li>
                                <li class="nav-item wow fadeInUp" data-wow-delay=".7s">
                                    <a href="#thumb3" data-bs-toggle="tab" class="nav-link">
                                        Hotel
                                    </a>
                                </li>
                                <li class="nav-item wow fadeInUp" data-wow-delay=".7s">
                                    <a href="#thumb4" data-bs-toggle="tab" class="nav-link">
                                        Flight
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div id="thumb1" class="tab-pane fade show active">
                                <div class="comment-form-wrap">
                                    <form action="#" id="contact-form220" method="POST">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-clt">
                                            <span>Where Do You Want to Go?</span>
                                            <?php
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

// Generate the select options
?>
<select class="nice-select single-select w-100">
    <option value=""><?php esc_html_e('Select Country', 'text-domain'); ?></option>
    <?php foreach ($countries as $country): ?>
        <option value="<?php echo esc_attr($country); ?>"><?php echo esc_html($country); ?></option>
    <?php endforeach; ?>
</select>

                                        </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-clt">
                                            <span>Your Nationality?</span>
                                            <?php
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

// Generate the select options
?>
<select class="nice-select single-select w-100">
    <option value=""><?php esc_html_e('Select Country', 'text-domain'); ?></option>
    <?php foreach ($countries as $country): ?>
        <option value="<?php echo esc_attr($country); ?>"><?php echo esc_html($country); ?></option>
    <?php endforeach; ?>
</select>

                                        </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-clt">
                                                    <span>Phone</span>
                                                    <input type="text" name="name" id="name22" placeholder="Tour Name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-clt">
                                                    <span>Email</span>
                                                    <input type="text" name="name" id="name22" placeholder="Tour Name">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-clt">
                                                    <button type="submit" class="theme-btn w-100">
                                                        Submit
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                    </form>
                                </div>
                            </div>
                            <div id="thumb2" class="tab-pane fade">
                                <div class="comment-form-wrap">
                                    <form action="#" id="contact-form220" method="POST">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-clt">
                                            <span>Where Do You Want to Go?</span>
                                            <?php
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

// Generate the select options
?>
<select class="nice-select single-select w-100">
    <option value=""><?php esc_html_e('Select Country', 'text-domain'); ?></option>
    <?php foreach ($countries as $country): ?>
        <option value="<?php echo esc_attr($country); ?>"><?php echo esc_html($country); ?></option>
    <?php endforeach; ?>
</select>

                                        </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-clt">
                                            <span>Your Nationality?</span>
                                            <?php
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

// Generate the select options
?>
<select class="nice-select single-select w-100">
    <option value=""><?php esc_html_e('Select Country', 'text-domain'); ?></option>
    <?php foreach ($countries as $country): ?>
        <option value="<?php echo esc_attr($country); ?>"><?php echo esc_html($country); ?></option>
    <?php endforeach; ?>
</select>

                                        </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-clt">
                                                    <span>Phone</span>
                                                    <input type="text" name="name" id="name22" placeholder="Tour Name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-clt">
                                                    <span>Email</span>
                                                    <input type="text" name="name" id="name22" placeholder="Tour Name">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-clt">
                                                    <button type="submit" class="theme-btn w-100">
                                                        Submit
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                    </form>
                                </div>
                            </div>
                            <div id="thumb3" class="tab-pane fade">
                                <div class="comment-form-wrap">
                                    <form action="#" id="contact-form220" method="POST">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-clt">
                                            <span>Where Do You Want to Go?</span>
                                            <?php
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

// Generate the select options
?>
<select class="nice-select single-select w-100">
    <option value=""><?php esc_html_e('Select Country', 'text-domain'); ?></option>
    <?php foreach ($countries as $country): ?>
        <option value="<?php echo esc_attr($country); ?>"><?php echo esc_html($country); ?></option>
    <?php endforeach; ?>
</select>

                                        </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-clt">
                                            <span>Your Nationality?</span>
                                            <?php
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

// Generate the select options
?>
<select class="nice-select single-select w-100">
    <option value=""><?php esc_html_e('Select Country', 'text-domain'); ?></option>
    <?php foreach ($countries as $country): ?>
        <option value="<?php echo esc_attr($country); ?>"><?php echo esc_html($country); ?></option>
    <?php endforeach; ?>
</select>

                                        </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-clt">
                                                    <span>Phone</span>
                                                    <input type="text" name="name" id="name22" placeholder="Tour Name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-clt">
                                                    <span>Email</span>
                                                    <input type="text" name="name" id="name22" placeholder="Tour Name">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-clt">
                                                    <button type="submit" class="theme-btn w-100">
                                                        Submit
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                    </form>
                                </div>
                            </div>
                            <div id="thumb4" class="tab-pane fade">
                                <div class="comment-form-wrap">
                                   <form action="#" id="contact-form220" method="POST">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-clt">
                                            <span>Where Do You Want to Go?</span>
                                            <?php
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

// Generate the select options
?>
<select class="nice-select single-select w-100">
    <option value=""><?php esc_html_e('Select Country', 'text-domain'); ?></option>
    <?php foreach ($countries as $country): ?>
        <option value="<?php echo esc_attr($country); ?>"><?php echo esc_html($country); ?></option>
    <?php endforeach; ?>
</select>

                                        </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-clt">
                                            <span>Your Nationality?</span>
                                            <?php
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

// Generate the select options
?>
<select class="nice-select single-select w-100">
    <option value=""><?php esc_html_e('Select Country', 'text-domain'); ?></option>
    <?php foreach ($countries as $country): ?>
        <option value="<?php echo esc_attr($country); ?>"><?php echo esc_html($country); ?></option>
    <?php endforeach; ?>
</select>

                                        </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-clt">
                                                    <span>Phone</span>
                                                    <input type="text" name="name" id="name22" placeholder="Tour Name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-clt">
                                                    <span>Email</span>
                                                    <input type="text" name="name" id="name22" placeholder="Tour Name">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-clt">
                                                    <button type="submit" class="theme-btn w-100">
                                                        Submit
                                                        
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
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
