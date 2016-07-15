<html> 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
      <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <script type="text/javascript" src="http://vk.com/js/api/share.js?93" charset="windows-1251"></script>
  <? include 'fvariable.php' ?>
</head>
  
  
<body style='background-image: url(imgs/background.jpg); background-size:cover '>
  <table>
                              <!--КАРТИНКА-->
    <tr>
      <td class="w3-center w3-padding-64">        
       <div class="dimg">  
        <img id="img" clas="img-thumbnail" src="<? echo $y; ?>" width="510" height="340"/>
        </div>
      </td>
    </tr>
                            <!--КНОПКА ПУБЛИКАЦИИ-->
    <tr>
      <td class="w3-center">
         <form class="w3-center w3-padding-16"> 
           <? include 'api4.php'?>
         </form> 
      </td>
    </tr>
 
  </table>
</body>
</html>