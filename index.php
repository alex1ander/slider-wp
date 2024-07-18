<?php

get_header();


include 'API/unsplash.php';
$data = [
    'title' => get_the_title(),
    'content' => get_the_content(),
    'sliders' => $sliders,
];


Timber::render('view/index.twig', $data);

get_footer();