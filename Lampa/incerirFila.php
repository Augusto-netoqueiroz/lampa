<?php

  include 'connect.php';

  
  $piloto_fila = mysqli_escape_string($conexao, $_GET['piloto_fila']);
  $music_on_hold = mysqli_escape_string($conexao, $_GET['music_on_hold']);
  $time_out = mysqli_escape_string($conexao, $_GET['time_out']);

  $estrategia_de_ring = mysqli_escape_string($conexao, $_GET['estrategia_de_ring']);
  
  
  

  $sql = "INSERT INTO queues  (name,musiconhold ,timeout ,ringinuse ,queue_holdtime ,retry ,wrapuptime ,strategy ) VALUES
         ('$piloto_fila','$music_on_hold','$time_out','no','1','1','1','$estrategia_de_ring')";
  echo '<br>';
  //var_dump( $result = mysqli_query($conexao,$sql)) ; 
   $result = mysqli_query($conexao,$sql) ; 

  if ($result==true){
    header('Location:comum.php?fila=ok&piloto='.$piloto_fila);
    
  }else{
    header('Location:comum.php?fila=fail&piloto='.$piloto_fila);

  }



?>

