<?php


function isActivePage($page){
    return $page == $_SERVER['REQUEST_URI'];
}

function dd($value){
    echo '<pre>';
    var_dump($value);
    echo '</pre>';

    die();
}

function base_path($path){
    return BASE_PATH . $path;
}
function load_view($path, $attributes = []){
    extract($attributes);
    require base_path('views/'. $path);
}
function get_image_src($path){
    return "/src/images/{$path}";
}
function redirect($path){
    header("Location: {$path}");
    exit();
}







