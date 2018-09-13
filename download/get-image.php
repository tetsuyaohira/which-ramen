<?php
require_once 'phpflickr/phpFlickr.php';

define('API_KEY', '76c3c82d0fceb45c5003b2ae00fc202e');
define('API_SECRET', '1fd8ef3f98888d29');

download_flickr('塩ラーメン', 'sio');
download_flickr('味噌ラーメン', 'miso');

function download_flickr($keyword, $dir)
{
    if (!file_exists($dir)) mkdir($dir);

    $flickr = new phpFlickr(API_KEY, API_SECRET);

    $search_opt = [
        'text' => $keyword,
        'media' => 'photos',
        'license' => '4,5,6,7,8',
        'per_page' => 200,
        'sort' => 'relevant',
    ];

    $result = $flickr->photos_search($search_opt);

    if (!$result) die('Flickr API error');

    foreach($result['photo'] as $photo) {
        $farm = $photo['farm'];



        
    }


}