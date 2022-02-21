<?php

session_start();

ob_start();
include(__DIR__.'/include/ls.php');
include(__DIR__.'/include/PB.php');

$ini_array = parse_ini_file("config.ini", true /* will scope sectionally */);
$ext=$ini_array['Parametri']['estensione'];
$el=$ini_array['percorsi']['toelab'];
$chk=0;
//$files = array_filter($_FILES['upload']['name']); //something like that to be used before processing files.

// Count # of uploaded files in array
$total = count($_FILES['file']['name']);

// Loop through each file
for( $i=0 ; $i < $total ; $i++ ) {

  //Get the temp file path
  $tmpFilePath = $_FILES['file']['tmp_name'][$i];
//echo $tmpFilePath.'<br>';
  //Make sure we have a file path
  if ($tmpFilePath != ""){
    //Setup our new file path
    $newFilePath =(__DIR__).$el . $_FILES['file']['name'][$i];
    //(__DIR__).
  //  echo $newFilePath.'<br>';
    
    //Upload the file into the temp dir
    if (move_uploaded_file($tmpFilePath, $newFilePath)) {
        //   redirect_with_message('The file was uploaded successfully.', FLASH_SUCCESS);
      
     //Handle other code here
    } else {
     $newFilePath='/app/web/toelab2/'.$_FILES['file']['name'][$i];
   //  echo $newFilePath.'<br>cc';
       if (move_uploaded_file($tmpFilePath, $newFilePath)) {
   
       }
        
    
    else {


      $moved = move_uploaded_file($_FILES["file"]["tmp_name"],'/app/web/toelab2/' . $_FILES['file']['name'][$i] );

      if( $moved ) {
        echo "Successfully uploaded";         
      } else {
        echo "Not uploaded because of error #".$_FILES["file"]["error"];
      }







      $chk=99;}
    }
  }
}


if ($chk==0){
header("Location: ./index.php"); 
ob_end_flush();
}
else
{
 
        die("errore in upload!!!");
    
  }
//header('Location: another-php-file.php'); exit();
?>