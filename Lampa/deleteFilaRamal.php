<?php 

  include 'connect.php';
  
  
    echo $uniqueid = mysqli_escape_string($conexao, $_GET['uniqueid']);
    echo $ramal_fila = mysqli_escape_string($conexao, $_GET['ramal_fila']);
    echo $nome_fila = mysqli_escape_string($conexao, $_GET['nome_fila']);
 
    $sql = "DELETE  FROM queue_members WHERE uniqueid = '$uniqueid';";
    $result = mysqli_query($conexao,$sql); 
     
    // para testar se a consulata deu ok vai retornar um boleano 'true'
    //var_dump($result) ; 
    
    if ($result==true){
     header ('location:comum.php?ramal_retirado_fila=ok&ramal_fila='.$ramal_fila.'&nome_fila='.$nome_fila);
     
    }else{
      header ('location:comum.php?ramal_retirado_fila=fail&ramal_fila='.$ramal_fila.'&nome_fila='.$nome_fila);
      //echo 'dados nao atualizados';

    }


?>








