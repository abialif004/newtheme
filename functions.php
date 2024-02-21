<!-- The one with function -->

<?php


function get_full_path($path)
{
    $root_path = get_template_directory_uri();
    echo $root_path . $path;
}


function testbyte_theme_support()
{
    //Adds the dynamic title to the page
    add_theme_support('title-tag');
}
add_action('after_theme_setup', 'testbyte_theme_support');
function testbyte_register_style()
{
    //The function name, file path
    //dependencies , version, media_resposive
    $version = wp_get_theme()->get('Version');
    $root_path = get_template_directory_uri();
    wp_enqueue_style('main-stylesheet', $root_path . '/assets/css/main.css', array('bootstrap-stylesheet'), false, 'all');
    wp_enqueue_style('style', $root_path . '/style.css', array('bootstrap-stylesheet'), $version, 'all');
    wp_enqueue_style('bootstrap-stylesheet', $root_path . '/assets/css/bootstrap.min.css', array(), false, 'all');
}
add_action('wp_enqueue_scripts', 'testbyte_register_style');

function testbyte_register_scripts()
{
    $root_path = get_template_directory_uri();
    wp_enqueue_script('bootstrap-script', $root_path . '/assets/js/bootstrap.min.js', 'jquery', false, true);
    wp_enqueue_script('fontawsome-script', 'https://kit.fontawesome.com/c98653d00b.js', 'jquery', false, false);
    wp_enqueue_script('main-script', $root_path . '/assets/js/script.js', 'jquery', false, true);

    // This function has first the name, then the js file directory
    //dependencies, version, header-false footer-true
}
add_action('wp_enqueue_scripts', 'testbyte_register_scripts');


//Registering the navigation menus and location
$location = array(
    'primary' => 'Top Navigation Menu',
    'secondary' => 'Mobile Navigation Menu'
);
register_nav_menus($location);
?>