<?php 

include 'connect.php';



 echo  $piloto_fila =mysqli_escape_string($conexao, $_GET['piloto_fila']);
 echo  $music_on_hold = mysqli_escape_string($conexao, $_GET['music_on_hold']);
 echo  $time_out = mysqli_escape_string($conexao, $_GET['time_out']);
 echo  $estrategia_de_ring = mysqli_escape_string($conexao, $_GET['estrategia_de_ring']);


$sql = "UPDATE queues SET  name='$piloto_fila' , musiconhold='$music_on_hold', timeout='$time_out', strategy='$estrategia_de_ring'  WHERE name = '$piloto_fila';";
$result = mysqli_query($conexao,$sql);
//var_dump($result) ; // vai retornar um boleano true

echo '<br>'; 

if ($result==TRUE){
    
   header ('location:comum.php?update_fila=ok&piloto_fila='.$piloto_fila);
    
}else{
    
    header ('location:comum.php?update_fila=fail&piloto_fila='.$piloto_fila);
    //echo 'dados nao atualizados';
}



?>