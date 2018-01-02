<?php
function load_shortcode(){

    require_once HEK_PLUGIN_DIR . '/inc/markup.php';
}

add_shortcode("comingsoon","load_shortcode");