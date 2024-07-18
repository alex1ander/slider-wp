<?php

$sliders = [];
foreach(get_field('query_param') as $param){

    Unsplash\HttpClient::init([
        'applicationId'	=> 'g8zA4I01SEsxxtjM-3TvlnELg_a87x83LkYxwQtkHJA',
        'secret'	=> 'IpDBTOtmV75Ey-bQ_lxPY2TI6eepjekA7y-1YlOTbWs',
        'callbackUrl'	=> 'https://your-application.com/oauth/callback',
        'utmSource' => 'slider-wp'
    ]);

    $search = $param['search'];
    $page = $param['page'];
    $per_page = $param['per_page'];
    $orientation = $param['orientation'];

    $image_array = Unsplash\Search::photos($search, $page, $per_page, $orientation)->getResults();
    set_transient( 'special_query_results', $image_array, 60*60 );


    $image_array['slider_effect'] = $param['slider_effect'];

    array_push($sliders,$image_array);
}