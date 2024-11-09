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

    wp_enqueue_script("main-js", get_template_directory_uri() . "/assets/main.js", [], filemtime(get_template_directory() . "/assets/main.js"), true);


}
;

add_action("wp_enqueue_scripts", "b2wi_scripts");