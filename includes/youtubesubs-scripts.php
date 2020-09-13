<?php

//Add scripts
function yts_add_scripts(){
    //Add main CSS
    wp_enqueue_style('yts-main-style', plugins_url(). '/youtubesubs/css/style.css');

    //Add main JS
    wp_enqueue_script('yts-main-script', plugins_url(). '/youtubesubs/js/main.js');
}