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
         <div class="w3-container w3-center w3-padding-128" >
         <form  action=uploads.php method=post enctype=multipart/form-data>
       	
              <? include 'authorize.php' ?>
        
        <p>
           <label  class="btn btn-success btn-lg btn-file">
              Выбери картинку 
              <input type="file" name=fileToUpload accept="image/jpeg,image/png,image/jpg,image/gif" style="display: none"><br>
              <!-- <input type="hidden" name="MAX_FILE_SIZE" value="1000000000" /> -->             
           </label>
        </p>  
        <p> 	
               <input class="btn btn-success btn-file" type=submit name="submit" value="Загрузи картинку">
        </p>
       </form>
    </div>
</body>
</html>				

<!-- 
file_uploads=On - разрешает загрузку файлов на сервер по протоколу HTTP;
upload_tmp_dir=/tmp - устанавливает каталог для временного хранения загруженных файлов;
upload_max_filesize=2M - устанавливает максимальный объем загружаемых файлов.
 -->