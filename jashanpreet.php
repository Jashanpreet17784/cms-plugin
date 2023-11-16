<?php
/*
Plugin Name: Custom Login Page Styler

Description: Customize the style of your WordPress login page.

*/

function clps_custom_login_info_shortcode() {
    $options = get_option('clps_options'); // Assuming 'clps_options' is where your plugin's settings are stored
    $background_color = isset($options['background_color']) ? $options['background_color'] : 'Default';

    // Output
    ob_start(); // Start output buffering
    ?>
    <div class="clps-custom-login-info">
        <p>Current Background Color: <?php echo esc_html($background_color); ?></p>
        <!-- Add more info or options as needed -->
    </div>
    <?php
    return ob_get_clean(); // Return the buffered output
}


add_shortcode('custom_login_info', 'clps_custom_login_info_shortcode');


