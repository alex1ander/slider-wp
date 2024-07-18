<?php

ob_start();
wp_head();
$head = ob_get_clean();

$slider_menu_count = count(get_field('query_param'));


$data = [
    'head' => $head,
    'menu' => $slider_menu_count,
]; 

Timber::render('view/header.twig',$data);
