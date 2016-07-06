<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
      <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </head>
<body style='background-image: url(imgs/background.jpg); background-size:100% '>
  
<div class="w3-center w3-padding-64" >
<table class="w3-center">
  <tr>
    <td id="border">  <textarea placeholder="введи текст" id="1" cols="40" rows="2" style="resize: none;"></textarea> </td>
  </tr>
  <tr>
    <td> <img clas="img-thumbnail" src="<? include 'bd.php'; ?>" width="510" height="340" hspace="20" vspace="20"/> </td>
  </tr>
  <tr>
    <td id="border" class="w3-center w3-padding-32">  <textarea placeholder="введи текст" id="1" cols="40" rows="2" style="resize: none;"></textarea> </td>
  </tr>
   <tr>
    <td><? echo  "<form action='api.php'>" . 
      "<input class=\"btn btn-info btn-lg\" type=submit value=\"Опубликовать\">" .
      "</form>" ; ?></td>
     <td>  </td>
  </tr>
</table>
</div>

  
</body>
</html>