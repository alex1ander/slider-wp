<?php


ob_start();
wp_footer();
$footer = ob_get_clean();

$slider_menu_count = count(get_field('query_param'));

$data = [
    'menu' => $slider_menu_count,
    'footer' => $footer,
]; 

Timber::render('view/footer.twig',$data);
