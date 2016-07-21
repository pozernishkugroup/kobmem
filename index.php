<!DOCTYPE html>
<html lang="ru">
<head>
  <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>KobMem</title>
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
 <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<script type="text/javascript" src="//vk.com/js/api/openapi.js?124"></script>
 
</head>
<body style='background-image: url(imgs/background.jpg); background-size:cover '>
    <div class="w3-container w3-center w3-padding-128" >
       <form  action=uploads.php method=post enctype=multipart/form-data>        
        <p>
           <label  class="btn btn-success btn-lg btn-file">
              Выбери картинку 
              <input type="file" name=fileToUpload accept="image/jpeg,image/png,image/jpg,image/gif" style="display: none"><br>
               <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />              
           </label>
        </p>  
        <p> 	
            <input class="btn btn-success  btn-file" type=submit name="submit" value="Загрузи картинку">
        </p>
       </form>
    </div>
    <div class="w3-container w3-center w3-padding-128" id="vk_groups"></div>
      <script type="text/javascript">
      VK.Widgets.Group("vk_groups", {redesign: 1, mode: 3, width: "220", height: "400", color1: 'FFFFFF', color2: '000000', color3: '5E81A8'}, 106420825);
      </script>
    </div>
</body>
</html>				
