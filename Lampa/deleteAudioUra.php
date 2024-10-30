<?php 

  include 'connect.php';
  
  
  $id = mysqli_escape_string($conexao, $_GET['id']);
  $name = mysqli_escape_string($conexao, $_GET['arquivo']);
 
   
   $sql = "DELETE  FROM ura_audio_upload WHERE id = '$id';";
   $result = mysqli_query($conexao,$sql); 
    var_dump($result) ; // vai retornar um boleano true
   
   if($result==true){
     header ('location:comum.php?arquivo_deletado=ok&arquivo_nome='.$name);
        
     ///////////////--deletar arquivo---///////////////////
     $file_pointer = "ura_audio_upload/".$name;//concatena com o diretorio
     if (!unlink($file_pointer)) {
     // echo ("$file_pointer cannot be deleted due to an error");
     }
     else {
          // echo ("$file_pointer has been deleted");
        }
        


     ////////////////////////////////////////////////////
   }else{
     header ('location:comum.php?arquivo_deletado=fail&arquivo_nome='.$name);
     //echo 'dados nao atualizados';
  }


?>








