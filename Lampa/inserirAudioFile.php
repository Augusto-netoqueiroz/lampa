<?php

  include 'connect.php';
  
  $name = $_FILES['file']['name'];
  $size = $_FILES['file']['size'];
  $type = $_FILES['file']['type'];
  $tmp_name = $_FILES['file']['tmp_name'];
  

  $max_size = 10000000;
  $extension = substr($name, strpos($name, '.') + 1);

  if(isset($name) && !empty($name)){
    // if(($extension == "jpg" || $extension == "jpeg") && $type == "image/jpeg" &&  $size<=$max_size){
    if(($extension == "wav" || $extension == "wave")  && $type == "audio/wav" && $size<=$max_size){
      $location = "ura_audio_upload/";
      //$location = "/var/lib/asterisk/sounds";
      if(move_uploaded_file($tmp_name, $location.$name)){
        echo $smsg = "Uploaded Successfully";
        $sql = "INSERT INTO `ura_audio_upload` (name, size, type, location) 
           VALUES ('$name', '$size', '$type', '$location')";
      
      $result = mysqli_query($conexao,$sql); 
        //echo var_dump( $result = mysqli_query($conexao,$sql) ); 
        if ($result==true){
          header('Location:comum.php?audio_upload=ok&arquivo_audio='.$name);
        }
      }
    }else{
      //echo $erro = "Uploaded Falhou";
      header('Location:comum.php?audio_upload=fail&arquivo_audio='.$name);
    }
  }

?>

