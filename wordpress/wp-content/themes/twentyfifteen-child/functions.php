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

// Callback function to insert 'styleselect' into the $buttons array
function my_mce_buttons_2( $buttons ) {
    array_unshift( $buttons, 'styleselect' );
    return $buttons;
}

// Register our callback to the appropriate filter
add_filter('mce_buttons_2', 'my_mce_buttons_2');

// Callback function to filter the MCE settings
function my_mce_before_init_insert_formats( $init_array ) {
    // Define the style_formats array
    $style_formats = array(
        // Each array child is a format with it's own settings
        array(
            'title' => 'ML: City, Country [mine]',
            'inline' => 'span',
            'classes' => 'ml-city-country-mine',
            'wrapper' => false,
        ),
        array(
            'title' => 'ML: Country [mine]',
            'inline' => 'span',
            'classes' => 'ml-country-mine',
            'wrapper' => false,
        ),
        array(
            'title' => 'ML: City [mine]',
            'inline' => 'span',
            'classes' => 'ml-city-mine',
            'wrapper' => false,
        ),
        array(
            'title' => 'ML: City, Country [theirs]',
            'inline' => 'span',
            'classes' => 'ml-city-country-theirs',
            'wrapper' => false,
        ),
        array(
            'title' => 'ML: Country [theirs]',
            'inline' => 'span',
            'classes' => 'ml-country-theirs',
            'wrapper' => false,
        ),
        array(
            'title' => 'ML: Country [theirs] (abbrev)',
            'inline' => 'span',
            'classes' => 'ml-country-theirs-abbrev',
            'wrapper' => false,
        ),
        array(
            'title' => 'ML: City [theirs]',
            'inline' => 'span',
            'classes' => 'ml-city-theirs',
            'wrapper' => false,
        ),
    );
    // Insert the array, JSON ENCODED, into 'style_formats'
    $init_array['style_formats'] = json_encode( $style_formats );

    return $init_array;
}

// Attach callback to 'tiny_mce_before_init'
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );

function my_theme_add_editor_styles() {
    add_editor_style( 'custom-editor-style.css' );
}

add_action( 'admin_init', 'my_theme_add_editor_styles' );
