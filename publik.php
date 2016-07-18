<html> 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
      <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <script type="text/javascript" src="http://vk.com/js/api/share.js?93" charset="windows-1251"></script>
  <? include 'fvariable.php'; 
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
 ?>
</head>
  
  
<body style='background-image: url(imgs/background.jpg); background-size:cover '>
  <table>
                              <!--КАРТИНКА-->
    <tr>
      <td class="w3-center w3-padding-64">        
       <div class="dimg">  
        <img id="img" clas="img-thumbnail" src="<? echo $x; ?>" width="510" height="340"/>
        </div>
      </td>
    </tr>
                            <!--КНОПКА ПУБЛИКАЦИИ-->
    <tr>
      <td class="w3-center">
         <form action="api4.php" class="w3-center w3-padding-16"> 
        <?    echo    '<a class="btn btn-success btn-file " href="' . $url . '?' . http_build_query($params) . '">ОпубликоватЬ</a>'; ?>
         </form> 
      </td>
    </tr>
 
  </table>
</body>
</html>
