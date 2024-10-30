<?php 

  include 'connect.php';
  
  
   echo $name = mysqli_escape_string($conexao, $_GET['nome_fila']);
 
   
    $sql = "DELETE  FROM queues WHERE name = '$name';";
    $result = mysqli_query($conexao,$sql); 
     var_dump($result) ; // vai retornar um boleano true
    
    if ($result==true){
      header ('location:comum.php?fila_del=ok&fila='.$name);
      
    }else{
      // echo 'dados nao atualizados';
      header ('location:comum.php?fila_del=fail&fila='.$name);

    }


?>








