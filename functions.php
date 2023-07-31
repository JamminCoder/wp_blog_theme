<?php

function timbatt_theme_support() {
    // Automatic title support
    add_theme_support("title-tag");
    add_theme_support("custom-logo");
}
add_action("after_setup_theme", "timbatt_theme_support");


function timbatt_menus() {
    $locations = [
        "primary" => "Navbar menu items",
        "footer" => "Footer menu items",
    ];

    register_nav_menus($locations);
}
add_action("init", "timbatt_menus");


function timbatt_register_styles() {
    wp_enqueue_style(
        "timbatt-style", 
        get_template_directory_uri() . "/style.css",
        array(),
        wp_get_theme()->get("version"),
        "all"
    );
}
add_action("wp_enqueue_scripts", "timbatt_register_styles");


function timbatt_register_scripts() {
    wp_enqueue_script(
        "timbatt-script",
        get_template_directory_uri() . "/assets/js/app.js",
        array(),
        wp_get_theme()->get("version"),
        "all",
        true,
    );
}
add_action("wp_enqueue_scripts", "timbatt_register_scripts");
