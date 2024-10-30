<?php
include 'connect.php';

$destino_op_0 = NULL;
$destino_op_1 = NULL;
$destino_op_2 = NULL;
$destino_op_2 = NULL;
$destino_op_3 = NULL;
$destino_op_4 = NULL;
$destino_op_5 = NULL;
$destino_op_6 = NULL;
$destino_op_7 = NULL;
$destino_op_8 = NULL;
$destino_op_9 = NULL;
$numero_piloto_ura = NULL;

$destino_op_1 = mysqli_escape_string($conexao, $_GET['destino_op_1']);
$destino_op_2 = mysqli_escape_string($conexao, $_GET['destino_op_2']);
$destino_op_2 = mysqli_escape_string($conexao, $_GET['destino_op_2']);
$destino_op_3 = mysqli_escape_string($conexao, $_GET['destino_op_3']);
$destino_op_4 = mysqli_escape_string($conexao, $_GET['destino_op_4']);
$destino_op_5 = mysqli_escape_string($conexao, $_GET['destino_op_5']);
$destino_op_6 = mysqli_escape_string($conexao, $_GET['destino_op_6']);
$destino_op_7 = mysqli_escape_string($conexao, $_GET['destino_op_7']);
$destino_op_8 = mysqli_escape_string($conexao, $_GET['destino_op_8']);
$destino_op_9 = mysqli_escape_string($conexao, $_GET['destino_op_9']);
$destino_op_0 = mysqli_escape_string($conexao, $_GET['destino_op_0']);
$numero_piloto_ura = mysqli_escape_string($conexao, $_GET['numero_piloto_ura']);
$audio_selecionado = mysqli_escape_string($conexao, $_GET['audio_selecionado']);

$destino_op_1 = 'filas,'.$destino_op_1.',1'; // manda para o contexto filas concatena com a fila especifica
$destino_op_2 = 'filas,'.$destino_op_2.',1'; // manda para o contexto filas concatena com a fila especifica
$destino_op_3 = 'filas,'.$destino_op_3.',1'; // manda para o contexto filas concatena com a fila especifica
$destino_op_4 = 'filas,'.$destino_op_4.',1'; // manda para o contexto filas concatena com a fila especifica
$destino_op_5 = 'filas,'.$destino_op_5.',1'; // manda para o contexto filas concatena com a fila especifica
$destino_op_6 = 'filas,'.$destino_op_6.',1'; // manda para o contexto filas concatena com a fila especifica
$destino_op_7 = 'filas,'.$destino_op_7.',1'; // manda para o contexto filas concatena com a fila especifica
$destino_op_8 = 'filas,'.$destino_op_8.',1'; // manda para o contexto filas concatena com a fila especifica
$destino_op_9 = 'filas,'.$destino_op_9.',1'; // manda para o contexto filas concatena com a fila especifica
$destino_op_0 = 'filas,'.$destino_op_0.',1'; // manda para o contexto filas concatena com a fila especifica
$numero_piloto_ura = '_'.$numero_piloto_ura; // concatena o '_' 
$audio_selecionado=basename($audio_selecionado,'.wav'); //funcao "basename" retira a extenÃ§Ã£o do arquivo



 //////////////////  op-- 0 atÃ© 9  ////////////////////////////////
 
 $sql = "delete from extensions where tipo_discagem like '%_opcao_%';";
 $result = mysqli_query($conexao,$sql); 
 
 $sql = "INSERT INTO extensions
  (context,exten,priority,app,appdata,tipo_discagem)
  VALUES 
  ('ura_principal','_0','1','Goto','$destino_op_0','ura_opcao_0'),
  ('ura_principal','_1','1','Goto','$destino_op_1','ura_opcao_1'),
  ('ura_principal','_2','1','Goto','$destino_op_2','ura_opcao_2'),
  ('ura_principal','_3','1','Goto','$destino_op_3','ura_opcao_3'),
  ('ura_principal','_4','1','Goto','$destino_op_4','ura_opcao_4'),
  ('ura_principal','_5','1','Goto','$destino_op_5','ura_opcao_5'),
  ('ura_principal','_6','1','Goto','$destino_op_6','ura_opcao_6'),
  ('ura_principal','_7','1','Goto','$destino_op_7','ura_opcao_7'),
  ('ura_principal','_8','1','Goto','$destino_op_8','ura_opcao_8'),
  ('ura_principal','_9','1','Goto','$destino_op_9','ura_opcao_9');"; 
  
  $result_a = mysqli_query($conexao,$sql); //retorna 1 caso true
   // num_rows Ã© sÃ³ para select , para insert, update e delete o correto e affected
   // retira 'SIP/'  da frente da discagem
   // header('Location:comum.php?sip_trunk=ok&discagem_out='.$discagem_peer);
  
/////////////////  numero-piloto  ////////////////////////////////
//echo $audio_selecionado;
$sql = "delete from extensions where tipo_discagem='ura'";
$result = mysqli_query($conexao,$sql); 
//if (mysqli_affected_rows($conexao)>0){ // num_rows sao para select , para insert, update e delete o correto e affected

  //----DESCOMENTAR A LINHA ABAIXO AO CARREGAR O AQRUIVO O LAMPA---///
  $audio_selecionado='/var/www/html/lampa/ura_audio_upload/'.$audio_selecionado; 
  
  
  $sql = "INSERT INTO extensions
  (context,exten,priority,app,appdata,tipo_discagem)
  VALUES 
  ('phones','$numero_piloto_ura','1','NoOp','Entrada Numeo Piloto Ura','ura'), 
  ('phones','$numero_piloto_ura','2','Goto','ura_principal,s,1','ura'),
  ('ura_principal','s','1','NoOp','Entrada No Menu da Ura','ura'), 
  ('ura_principal','s','2','Answer','','ura'), 
  ('ura_principal','s','3','Background','$audio_selecionado','ura'), 
  ('ura_principal','s','4','WaitExten','20','ura');"; 
   
   $result_b = mysqli_query($conexao,$sql); //retorna 1 caso true
   // num_rows Ã© sÃ³ para select , para insert, update e delete o correto e affected

   if (($result_a==TRUE) and ($result_b==TRUE)){
     header('Location:comum.php?opcoes_ura=ok');
   }else{
     header('Location:comum.php?opcoes_ura=fail');
   }

//}



?>

