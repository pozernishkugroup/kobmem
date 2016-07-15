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
    <script  src="js.js" async></script>
            
  </head>
<body style='background-image: url(imgs/background.jpg); background-size:cover '>
  
<div class="w3-center w3-padding-64" >
<table >
                                <!--ПОЛЕ ВВОДА 1-->
  <tr>
    <td class="w3-center w3-padding-16"> 
      <textarea name="mytext1" id="mytext1" placeholder="введи текст" cols="40" rows="2" style="resize: none;"></textarea></td>
  </tr>
  <tr>
                                  <!--КАНВАС-->
    <td class="w3-center w3-padding-32" >  
        <div class="canvas">                        
          <canvas id="can" width="510" height="340" >
          <img id="img" clas="img-thumbnail" src="<? include 'variable.php'; ?>" width="510" height="340"/>
          </canvas>
        </div>  
    </td>
  </tr>
  <tr>
                                <!--ПОЛЕ ВВОДА 2-->
    <td class="w3-center w3-padding-16">  
      <textarea name="mytext2" id="mytext2" placeholder="введи текст" cols="40" rows="2" style="resize: none;"></textarea> 
    </td>          
  </tr>
  <tr>
                                <!--КНОПКА СОХР-->
    <td class="w3-center"> 
      <form action="publik.php"> 
        <input onclick="uploadEx()" class="btn btn-info btn-lg" type=submit value="Сохранить">
      </form>
      <form method="post" accept-charset="utf-8" name="form1">
            <input name="hidden_data" id='hidden_data' type="hidden"/>
      </form>
     </td>
    </tr>
  
  
</table>
</div>
  
<? /*$fo = fopen("variable.php", "w");
fclose($fo);*/ ?>
</body>
</html>