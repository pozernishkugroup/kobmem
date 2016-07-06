<?php

$client_id = '5521905'; // ID приложения
$client_secret = 'yvdsxagXPOibU6eJwKGy'; // Защищённый ключ
$redirect_uri = 'http://localhost/cob/'; // Адрес сайта
//
$url = 'http://oauth.vk.com/authorize';

$params = array(
    'client_id'     => $client_id,
    'redirect_uri'  => $redirect_uri,
    'response_type' => 'code'
);
//
echo $link = '<p><a href="' . $url . '?' . urldecode(http_build_query($params)) . '">VK</a></p>';

//$result = file_get_contents('https://api.vk.com/method/photos.getWallUploadServer?group_id=road_ad&fields=first_name&access_token=4a8d175246c1fc3776c47dc3771330642826d158b72a085e6963de0dcf9cdefad2b2f4eca6b9af3af5004');
//
//  echo "$result";

?>