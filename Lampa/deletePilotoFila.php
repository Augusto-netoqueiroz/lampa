<?php 

  include 'connect.php';
  
   $id = mysqli_escape_string($conexao, $_GET['id']);
   $fila_piloto = mysqli_escape_string($conexao, $_GET['fila_piloto']);
   $fila_name = mysqli_escape_string($conexao, $_GET['fila_name']);
 
   
    $sql = "DELETE  FROM extensions WHERE id = '$id';";
    $result = mysqli_query($conexao,$sql); 
    var_dump($result) ; // vai retornar um boleano true
    
    // if (mysqli_num_rows($result)<>true){
    if ($result==true){
      header ('location:comum.php?piloto_del=ok&piloto_deletado='.$fila_piloto.'&fila_name='.$fila_name);
      
    }else{
      header ('location:comum.php?piloto_del=fail&piloto_deletado='.$fila_piloto.'&fila_name='.$fila_name);
      // echo 'dados nao atualizados';

    }


?>








