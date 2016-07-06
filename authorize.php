<!DOCTYPE html>
<html lang="ru">
<head>
  <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>COBmem</title>
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
 <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
 
</head>
<body style='background-image: url(imgs/background.jpg); background-size:100% '>
    <?php

    $client_id = '5521905'; 
    $client_secret = 'yvdsxagXPOibU6eJwKGy'; 
    $redirect_uri = 'http://kobmem.xyz/'; 

    $url = 'http://oauth.vk.com/authorize';

    $params = array(
        'client_id'     => $client_id,
        'display'       => 'page',
        'redirect_uri'  => $redirect_uri,
        'response_type' => 'code'
    );
    
  //$link = file_get_contents( $url . '?' .  urldecode(http_build_query($params)));

    echo $link = '<p><a class="btn btn-success btn-file btn-lg" href="' . $url . '?' . urldecode(http_build_query($params)) . '">Аутентификация через ВКонтакте</a></p>';


if (isset($_GET['code'])) {
    $result = false;
    $params = array(
        'client_id' => $client_id,
        'client_secret' => $client_secret,
        'redirect_uri' => $redirect_uri,
        'code' => $_GET['code']
    );
};
  ///////SSL////
/*function getSslPage($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_REFERER, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}*/
/////////////////
/*  extension=php_openssl.dll
allow_url_include = On*/
////////////////////////
    @$token = json_decode(file_get_contents('https://oauth.vk.com/access_token' . '?' . urldecode(http_build_query($params))), true);

    if (isset($token['access_token'])) {
        $params = array(
            'uids'         => $token['user_id'],
            'fields'       => 'uid,first_name,last_name,screen_name,sex,bdate,photo_big',
            'access_token' => $token['access_token']
        );

        $userInfo = json_decode(file_get_contents('https://api.vk.com/method/users.get' . '?' . urldecode(http_build_query($params))), true);
        if (isset($userInfo['response'][0]['uid'])) {
            $userInfo = $userInfo['response'][0];
            $result = true;
        }
    }

    /*if ($result) {
        echo "Социальный ID пользователя: " . $userInfo['uid'] . '<br />';
        echo "Имя пользователя: " . $userInfo['first_name'] . '<br />';
        echo "Ссылка на профиль пользователя: " . $userInfo['screen_name'] . '<br />';
        echo "Пол пользователя: " . $userInfo['sex'] . '<br />';
        echo "День Рождения: " . $userInfo['bdate'] . '<br />';
        echo '<img src="' . $userInfo['photo_big'] . '" />'; echo "<br />";
    }
}*/

?>
</body>
</html>
