<?php

  include 'connect.php';
  
  $fila_status = mysqli_escape_string($conexao, $_GET['fila_status']);
  $fila_select = mysqli_escape_string($conexao, $_GET['fila_select']);
  $ramal_select = mysqli_escape_string($conexao, $_GET['ramal_select']);
  $unique_id = rand(1,1000000000);// rand entre 1 e 1 bilhao para inserir na tabela 

  $interface = 'SIP/'.$ramal_select;
  
  $sql = "INSERT INTO queue_members  (queue_name, interface, membername, penalty, uniqueid ) VALUES
         ('$fila_select','$interface','$ramal_select','0','$unique_id')";
  
  $result = mysqli_query($conexao,$sql); 
  
  if ($result==true){
    header('Location:comum.php?fila_com_ramal=ok&ramal_fila='.$ramal_select.'&fila_select='.$fila_select);
    
  }else{
     header('Location:comum.php?fila_com_ramal=fail&ramal_fila='.$ramal_select.'&fila_select='.$fila_select);
  }

?>

