<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

add_filter('admin_init', 'my_general_settings_register_fields');

function my_general_settings_register_fields()
{
    register_setting('general', 'site_keywords', 'esc_attr');
    add_settings_field('site_keywords', '<label for="site_keywords">'.__('Site Keywords' , 'site_keywords' ).'</label>' , 'my_general_settings_fields_html', 'general');
}

function my_general_settings_fields_html()
{
    $value = get_option( 'site_keywords', '' );
    echo '<input type="text" id="site_keywords" name="site_keywords" value="' . $value . '" />';
}
