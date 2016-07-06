<?
  $url = $_SERVER['HTTP_REFERER'];
  
?>

<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
      <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://vk.com/js/api/share.js?93" charset="windows-1251"></script>
</head>
<body style='background-image: url(imgs/background.jpg); background-size:100% '>
  <div class="w3-center w3-padding-64">
    <img width="510" height="340" src="<? include 'bd.php'; ?>" />
  </div>
  <div class="w3-center">
      <a href="api3.php"><img src="imgs/vk16.png"></a>
  </div>
  <? $fo = fopen("bd.php", "w");
fclose($fo); ?>
</body>
</html>



