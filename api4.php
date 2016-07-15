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
  <? include 'fvariable.php'?>
</head>
<body style='background-image: url(imgs/background.jpg); background-size:cover'>
<?
  
    $client_id = '5521905'; 
    $client_secret = 'yvdsxagXPOibU6eJwKGy'; 
    $redirect_uri = 'http://kobmem.xyz/api4.php'; 
    $group_id = '72782425';

    $url = 'http://oauth.vk.com/authorize';

    $params = array(
        'client_id'     => $client_id,
        'group_id'      => $group_id,
        'display'       => 'page',
        'redirect_uri'  => $redirect_uri,
        'scope'         => '+4',
        'response_type' => 'code'
    );
   
    echo    '<a class="btn btn-success btn-file " href="' . $url . '?' . http_build_query($params) . '">ОпубликоватЬ</a>';
 
if (isset($_GET['code'])) {
    $result = false;
  
    $params = array(
        'client_id' => $client_id,
        'client_secret' => $client_secret,
        'redirect_uri' => $redirect_uri,
        'code' => $_GET['code']
    );

};

$url = 'https://oauth.vk.com/access_token';
  
@$token = json_decode(file_get_contents($url . '?' . urldecode(http_build_query($params))), true);
    
   
 if (isset($token['access_token'])) {
        $params = array(
        'user_id' => $token['user_id'],
        'fields'  => 'user_id,first_name,last_name,screen_name,sex,bdate,photo_big',
        'access_token' => $token['access_token']
        );
   }

$url = 'https://api.vk.com/method/users.get';
  
@$userInfo = json_decode(file_get_contents($url . '?' . urldecode(http_build_query($params))), true);
  
 if (isset($userInfo['response'][0]['uid'])) {
            $userInfo = $userInfo['response'][0];
            $result = true;
        }
      
$params = [
    'group_id'     => $group_id,
      'access_token' => $token['access_token']
];

    $url = "https://api.vk.com/method/photos.getWallUploadServer";
    
    @$uploadUrl = json_decode(file_get_contents( $url . '?' . urldecode(http_build_query($params))), true);
    
    if (isset($uploadUrl['response']['upload_url'])) {
        $uploadUrl = $uploadUrl['response']['upload_url'];
        }
  
      //echo ($uploadUrl);

 $photo = "/home/u337402653/public_html/" . $x;


$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, $uploadUrl); 
//curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-type: multipart/form-data"));
curl_setopt($ch, CURLOPT_POST, 1); 
//curl_setopt($ch, CURLOPT_SAFE_UPLOAD, 1); 
//curl_setopt($ch, CURLPROTO_HTTPS, 1); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($ch, CURLOPT_POSTFIELDS,  array('photo' => '@'.$photo)); 
$otvet = json_decode(curl_exec($ch), true);

 if ($otvet === FALSE) {
  echo "cURL Error: " . curl_error($ch); 
}elseif($otvet){
 
   stripslashes_deep($otvet['photo']);
//var_dump($otvet);
 }  
curl_close($ch); 
            function stripslashes_deep($value){
                $value = is_array($value) ?
                            array_map('stripslashes_deep', $value) :
                            stripslashes($value);
                return $value;
            }

if (!empty($otvet['photo'])){
  $params = [
    'group_id' => $group_id,
    'photo' => $otvet['photo'],
    'server' => $otvet['server'],
    'hash' => $otvet['hash'],
    'access_token' => $token['access_token']
  ];
}
 
  $url = "https://api.vk.com/method/photos.saveWallPhoto";
  
   @$uploadRes = json_decode(file_get_contents( $url . '?' . urldecode (http_build_query($params))), true);
    
if (!empty($uploadRes["response"][0]['id'])){
  $params = [
    'owner_id' => $uploadRes["response"][0]['owner_id'],
    'from_group' => 1,
    'attachments' => 'photo-'.$group_id.'_'.$uploadRes['id'],
    'access_token' => $token['access_token']
    ];
}
  
  $url = "https://api.vk.com/method/wall.post";
  
  @$postId = json_decode(file_get_contents( $url . '?' . urldecode (http_build_query($params))), true);

  
  if(!empty($postId['post_id'])){
    echo ($postId['post_id']);
  }  
  
?>  
</body>
</html>
