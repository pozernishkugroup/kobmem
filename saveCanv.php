<?php
session_start(); 
$upload_dir = "upload/";
$img = $_POST['hidden_data'];
$img = str_replace('data:image/jpeg;base64,', '', $img);
$img = str_replace(' ', '+', $img);
$data = base64_decode($img);
$file = $upload_dir . time() . ".jpeg";
$success = file_put_contents($file, $data);
print $success ? $file : 'Unable to save the file.';

$_SESSION['memimg'] = $file;

?>
