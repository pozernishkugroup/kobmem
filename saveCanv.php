<?php
$upload_dir = "upload\\";
$img = $_POST['hidden_data'];
$img = str_replace('data:image/jpeg;base64,', '', $img);
$img = str_replace(' ', '+', $img);
$data = base64_decode($img);
$file = $upload_dir . time() . ".jpeg";
$success = file_put_contents($file, $data);
print $success ? $file : 'Unable to save the file.';

if(filesize('fvariable.php')==0){
  $f = fopen('fvariable.php', 'a+'); 
      fputs($f, $file); 
      fclose($f);
    }else{
      $fo = fopen("fvariable.php", "w+");
      fclose($fo);
      $f = fopen('fvariable.php', 'a+'); 
      fputs($f, '<?$x=\''.$file.'\'?>'); 
      fclose($f);
    }
if(filesize('apiVar.php')==0){
  $f = fopen('apiVar.php', 'a+'); 
      fputs($f, $file); 
      fclose($f);
    }else{
      $fo = fopen("apiVar.php", "w+");
      fclose($fo);
      $f = fopen('apiVar.php', 'a+'); 
      fputs($f, '<?$y=\'\\'.$file.'\'?>'); 
      fclose($f);
    }
?>
