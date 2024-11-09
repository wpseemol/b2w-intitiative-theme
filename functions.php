<?php

/**
 * functions file
 * 
 * @package  B2W Initiative Theme
 * 
 */




function b2wi_scripts()
{


    // main stye.css file enqueue.
    wp_enqueue_style("stylesheet", get_stylesheet_uri(), [], filemtime(get_template_directory() . "/style.css"), "all");

    // main-style.css file enqueue.
    wp_enqueue_style("main-style", get_template_directory_uri() . "/assets/css/main-style.css", [], filemtime(get_template_directory() . "/assets/css/main-style.css"), "all");

    // main js file enqueue.
    wp_enqueue_script("main-js", get_template_directory_uri() . "/assets/js/main.js", [], filemtime(get_template_directory() . "/assets/js/main.js"), true);


}
;

add_action("wp_enqueue_scripts", "b2wi_scripts");