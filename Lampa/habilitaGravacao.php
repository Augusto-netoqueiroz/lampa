<?php 

  include 'connect.php';
  
   echo $id = mysqli_escape_string($conexao, $_GET['id_discagem']);
   echo $exten = mysqli_escape_string($conexao, $_GET['exten']);
   echo $context = mysqli_escape_string($conexao, $_GET['context']);
   echo $habilita = mysqli_escape_string($conexao, $_GET['habilita']);
 
   
   switch ($habilita){

    case 'ok':
      //atualiza a priority para 2
      $sql = "UPDATE extensions set priority='2', chamada_gravada='stn_gravado' WHERE id = '$id';";
      $result = mysqli_query($conexao,$sql); 
      var_dump($result) ; // vai retornar um boleano true
      
      echo'<br>';
      //criar a pasta chamadas gravadas
      $total_1='_'.$exten;
    
      //caminho da pasta das gravações no sistema ,
      //se deixar pelo defaul vai ser gravado em /var/lib/asterisk/monitor
      //Setar o nome da gravação , esse valor é o identificador unico da chamada , concatenado com o ".wav"
      //esse valor é o mesmo da tabela cdr , e é o que será usado para reprodusir a gravação, o 'b' indica que a gravação só inicia após o atendimento
      $path='/var/www/html/lampa/rec/${UNIQUEID}.wav,b';

      //crio o priority 1 passando os valores da gravacao
      $sql = "INSERT INTO extensions  (context,exten,priority,app,appdata,tipo_discagem) 
      VALUES
      ('$context','$total_1','1','MixMonitor','$path','ramal')";
      $result = mysqli_query($conexao,$sql); 
      var_dump($result) ; // vai retornar um boleano true
      
      if ($result==true){
        header ('location:comum.php?gravacao_habilitada=ok&exten='.$exten);
        
      }else{
        header ('location:comum.php?gravacao_habilitada=fail&exten='.$exten);
        
      }
      break;
      
      case 'no':
        //PRIMEIRO DELETA POIS NÃƒO DA PRA TER DOIS EXENT IGUAIS COM O MESMO PRIRITY NO MESMO CONTEXTO
        $total_1='_'.$exten;
        $sql = "DELETE  FROM extensions WHERE  exten = '$total_1'  AND priority = '1' AND  app = 'MixMonitor';";
        $result_2 = mysqli_query($conexao,$sql); 
        var_dump($result_2) ; // vai retornar um boleano true
        
        
        if ($result_2==true){
          //atualiza a priority para 1
         $sql = "UPDATE extensions set priority = '1', chamada_gravada = 'nao' WHERE id = '$id';";
         $result_1 = mysqli_query($conexao,$sql); 
         var_dump($result_1) ; // vai retornar um boleano true
         
         if ($result_2==true){
              header ('location:comum.php?gravacao_desabilitada=ok&exten='.$exten);
           
          }else{
              header ('location:comum.php?gravacao_desabilitada=fail&exten='.$exten);
            
            }
        }

     break;
     }

?>








