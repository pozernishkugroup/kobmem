<? //header('Location: workspace.php') ?>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
      <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  </head>
<body style='background-image: url(imgs/background.jpg); background-size:100% '>
<?
$target_dir = "uploads/";
  ///////////////////Транслитерация строк./////////////////////////
function rus2translit($string) {
    $converter = array(
        'а' => 'a',   'б' => 'b',   'в' => 'v',
        'г' => 'g',   'д' => 'd',   'е' => 'e',
        'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
        'и' => 'i',   'й' => 'y',   'к' => 'k',
        'л' => 'l',   'м' => 'm',   'н' => 'n',
        'о' => 'o',   'п' => 'p',   'р' => 'r',
        'с' => 's',   'т' => 't',   'у' => 'u',
        'ф' => 'f',   'х' => 'h',   'ц' => 'c',
        'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
        'ь' => '\'',  'ы' => 'y',   'ъ' => '\'',
        'э' => 'e',   'ю' => 'yu',  'я' => 'ya',
        
        'А' => 'A',   'Б' => 'B',   'В' => 'V',
        'Г' => 'G',   'Д' => 'D',   'Е' => 'E',
        'Ё' => 'E',   'Ж' => 'Zh',  'З' => 'Z',
        'И' => 'I',   'Й' => 'Y',   'К' => 'K',
        'Л' => 'L',   'М' => 'M',   'Н' => 'N',
        'О' => 'O',   'П' => 'P',   'Р' => 'R',
        'С' => 'S',   'Т' => 'T',   'У' => 'U',
        'Ф' => 'F',   'Х' => 'H',   'Ц' => 'C',
        'Ч' => 'Ch',  'Ш' => 'Sh',  'Щ' => 'Sch',
        'Ь' => '\'',  'Ы' => 'Y',   'Ъ' => '\'',
        'Э' => 'E',   'Ю' => 'Yu',  'Я' => 'Ya',
    );
    return strtr($string, $converter);
}
    
    $name = rus2translit($_FILES["fileToUpload"]["name"]);
//////////////////////////////////////////////////////////////////
$target_file = $target_dir . $name;
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
      echo"<div class=\"w3-container w3-center w3-padding-128\" >";
        echo "File is not an image.";
      echo"</div>";
        $uploadOk = 0;
    }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo"<div class=\"w3-container w3-center w3-padding-128\" >";
      echo "<form  action=uploads.php method=post enctype=multipart/form-data>
          <p>
              \"<label class=\"btn btn-info btn-lg\">" .
        "Файл с таким именем уже существует, просто переименуйте его =)" . 
          "<input type=\"file\" name=fileToUpload accept=\"image/jpeg,image/png\" style=\"display: none\">"."<br>" .
              // <input type="hidden" name="MAX_FILE_SIZE" value="1000000000" />             
        "</label>" .
          "</p>" .
            "<p>"  .	
           "<input class=\"btn btn-success btn-file\" type=submit name=\"submit\" value=\"Загрузить\">" .
      "</p>" .
     "</form>";
  echo"</div>";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  
  echo"<div class=\"w3-container w3-center w3-padding-128\" >" .
    "<form action='index.php'>"
    . "<input class=\"btn btn-info btn-lg\" type=submit value=\"Принимаем только JPG, JPEG, PNG & GIF \">" .
  "</form>" .
    "</div>";
    $uploadOk = 0;
}     
// Check file size
if ($_FILES["fileToUpload"]["size"] > 3000000) {
  echo "<div class=\"w3-container w3-center w3-padding-128\" >" .
    "<form action='index.php'>"
    . "<input class=\"btn btn-info btn-lg\" type=submit value=\"Слишком тяжело ='(\">" .
  "</form>" .
    "</div>";
  //echo"<div class=\"w3-container w3-center w3-padding-128\" >";
  //   echo "Слишком тяжело ='(";
    echo"</div>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
//     echo"<div class=\"w3-container w3-center w3-padding-128\" >";
//      echo "Sorry, your file was not uploaded.";
//    echo"</div>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
         echo"<div class=\"w3-container w3-center w3-padding-128\" >";
    echo  "<form action='workspace.php'>" . 
      "<input class=\"btn btn-info btn-lg\" type=submit value=\"Файл  $name   успешно загружен. Нажми что бы продолжить\">" .
      "</form>" ;      
    echo"</div>";
      //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
      echo"<div class=\"w3-container w3-center w3-padding-128\" >";
        echo "Не получилось ='(";
      echo"</div>";
    }
}
  $f = fopen('bd.php', 'a+'); 
      fputs($f, $target_file); 
      fclose($f);
?>
</body>
</html>