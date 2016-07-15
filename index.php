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
                         <!--progress bar-->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
                          <!--progress bar-->
</head>
<body style='background-image: url(imgs/background.jpg); background-size:cover '>
    <div class="w3-container w3-center w3-padding-128" >
       <form  action=uploads.php method=post enctype=multipart/form-data>        
        <p>
           <label  class="btn btn-success btn-lg btn-file">
              Выбери картинку 
              <input type="file" name=fileToUpload accept="image/jpeg,image/png,image/jpg,image/gif" style="display: none"><br>
              <!-- <input type="hidden" name="MAX_FILE_SIZE" value="1000000000" /> -->             
           </label>
        </p>  
        <p> 	
               <input class="btn btn-success  btn-file" type=submit name="submit" value="Загрузи картинку">
        </p>
        <div class="progress">
            <div class="progress-bar progress-bar-striped active" role="progressbar"  aria-valuemin="0" aria-valuemax="100" ></div>
        </div>
       </form>
    </div>
</body>
</html>				

<!-- 
file_uploads=On - разрешает загрузку файлов на сервер по протоколу HTTP;
upload_tmp_dir=/tmp - устанавливает каталог для временного хранения загруженных файлов;
upload_max_filesize=2M - устанавливает максимальный объем загружаемых файлов.
 -->