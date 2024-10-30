<?php

  include 'connect.php';

  
  $contexto_discagem = mysqli_escape_string($conexao, $_POST['contexto_discagem']);
  $discagem = mysqli_escape_string($conexao, $_POST['discagem']);
  $name = mysqli_escape_string($conexao, $_POST['fila_select']);
  
  
  $traco = '_'; // concatena para colocar sempre na frente da regra ramal ou externa com ou sem coringa
  $total_1 = $traco.$discagem; //concatena
  $appdata = 'filas,'.$name.',1'; // vaia para contexto filas que só tem extensions.conf na posição 1

  $sql = "INSERT INTO extensions  (context,exten,priority,app,appdata,tipo_discagem) VALUES
         ('$contexto_discagem','$total_1','1','Goto','$appdata','filas')";
  $result = mysqli_query($conexao,$sql); 


  if ($result==true){
    
    header('Location:comum.php?piloto_da_fila=ok&numero='.$discagem.'&nome_da_fila='.$name);
    
  }else{
    header('Location:comum.php?piloto_da_fila=fail&numero='.$discagem.'&nome_da_fila='.$name);
    //header('Location:comum.php?discagem=fail&regra='.$discagem);

  }



?>

