<?php

 include 'comum.php';
 include 'connect.php';
 $destino_op_0=NULL;
 $destino_op_1=NULL;
 $destino_op_2=NULL;
 $destino_op_3=NULL;
 $destino_op_4=NULL;
 $destino_op_5=NULL;
 $destino_op_6=NULL;
 $destino_op_7=NULL;
 $destino_op_8=NULL;
 $destino_op_9=NULL;

 $sql = "SELECT * from  extensions where tipo_discagem='ura_opcao_1';"; 
 $consulta = mysqli_query($conexao, $sql);
 $dados=mysqli_fetch_assoc($consulta);
 $destino_op_1=substr($dados['appdata'],6,-2) ;

 
 $sql = "SELECT * from  extensions where tipo_discagem='ura_opcao_6';"; 
 $consulta = mysqli_query($conexao, $sql);
 $dados=mysqli_fetch_assoc($consulta);
 $destino_op_6=substr($dados['appdata'],6,-2) ;

 
 $sql = "SELECT * from  extensions where tipo_discagem='ura_opcao_2';"; 
 $consulta = mysqli_query($conexao, $sql);
 $dados=mysqli_fetch_assoc($consulta);
 $destino_op_2=substr($dados['appdata'],6,-2) ;


 $sql = "SELECT * from  extensions where tipo_discagem='ura_opcao_7';"; 
 $consulta = mysqli_query($conexao, $sql);
 $dados=mysqli_fetch_assoc($consulta);
 $destino_op_7=substr($dados['appdata'],6,-2) ;


 $sql = "SELECT * from  extensions where tipo_discagem='ura_opcao_3';"; 
 $consulta = mysqli_query($conexao, $sql);
 $dados=mysqli_fetch_assoc($consulta);
 $destino_op_3=substr($dados['appdata'],6,-2) ;

 
 $sql = "SELECT * from  extensions where tipo_discagem='ura_opcao_8';"; 
 $consulta = mysqli_query($conexao, $sql);
 $dados=mysqli_fetch_assoc($consulta);
 $destino_op_8=substr($dados['appdata'],6,-2) ;


 $sql = "SELECT * from  extensions where tipo_discagem='ura_opcao_4';"; 
 $consulta = mysqli_query($conexao, $sql);
 $dados=mysqli_fetch_assoc($consulta);
 $destino_op_4=substr($dados['appdata'],6,-2) ;

 
 $sql = "SELECT * from  extensions where tipo_discagem='ura_opcao_9';"; 
 $consulta = mysqli_query($conexao, $sql);
 $dados=mysqli_fetch_assoc($consulta);
 $destino_op_9=substr($dados['appdata'],6,-2) ;

 $sql = "SELECT * from  extensions where tipo_discagem='ura_opcao_5';"; 
 $consulta = mysqli_query($conexao, $sql);
 $dados=mysqli_fetch_assoc($consulta);
 $destino_op_5=substr($dados['appdata'],6,-2) ;
 

 $sql = "SELECT * from  extensions where tipo_discagem='ura_opcao_0';"; 
 $consulta = mysqli_query($conexao, $sql);
 $dados=mysqli_fetch_assoc($consulta);
 $destino_op_0=substr($dados['appdata'],6,-2) ;
 

 $sql = "SELECT * from  extensions where tipo_discagem='ura';"; 
 $consulta = mysqli_query($conexao, $sql);
 $dados=mysqli_fetch_assoc($consulta);
 $numero_piloto=substr($dados['exten'],1) ;

 $sql = "SELECT * from  extensions where app='background';"; 
 $consulta = mysqli_query($conexao, $sql);
 $dados=mysqli_fetch_assoc($consulta);
 $audio_carregado=$dados['appdata'] ;
//  $audio_selecionado=substr($dados['appdata'],1) ;


?>

<body>

  <div class="  col-sm-12 col-md-12">

      <form action="inserirOpcoesUra.php" method="GET">

        <div class="mt-2 row col-sm-12 col-md-12 ">
           <div class=" form-group col-sm-2 col-md-2">
           </div>
           <div class=" form-group col-sm-2 col-md-2">
              <label for="">Opção</label>
              <input type="text" value="1" readonly name="opcao_1" class="form-control" >
           </div>
           <div class=" form-group col-sm-2 col-md-2">
               <label for="">Fila de Destino </label>
               <input value = '<?php echo $destino_op_1;?>'type="text" name="destino_op_1" class="form-control" placeholder="Destino" >
           </div>
           <div class=" form-group col-sm-2 col-md-2">
              <label for="">Opção</label>
              <input type="text" value="6" readonly name="opcao_6" class="form-control" >
           </div>
           <div class=" form-group col-sm-2 col-md-2">
               <label for="">Fila de Destino </label>
               <input value = '<?php echo $destino_op_6;?>' type="text" name="destino_op_6" class="form-control" placeholder="Destino" >
           </div>

        </div>
        <div class="mt-2 row col-sm-12 col-md-12">
           <div class=" form-group col-sm-2 col-md-2">
           </div>
           <div class=" form-group col-sm-2 col-md-2">
              <label for="">Opção</label>
              <input type="text" value="2" readonly name="opcao_2" class="form-control" >
           </div>
           <div class=" form-group col-sm-2 col-md-2">
               <label for="">Fila de Destino </label>
               <input value = '<?php echo $destino_op_2;?>'type="text" name="destino_op_2" class="form-control" placeholder="Destino" >
           </div>
           <div class=" form-group col-sm-2 col-md-2">
              <label for="">Opção</label>
              <input type="text" value="7" readonly name="opcao_7" class="form-control" >
           </div>
           <div class=" form-group col-sm-2 col-md-2">
               <label for="">Fila de Destino </label>
               <input value = '<?php echo $destino_op_7;?>'type="text" name="destino_op_7" class="form-control" placeholder="Destino" >
           </div>

        </div>
        <div class="mt-2 row col-sm-12 col-md-12">
          <div class=" form-group col-sm-2 col-md-2">
          </div>
          <div class=" form-group col-sm-2 col-md-2">
             <label for="">Opção</label>
             <input type="text" value="3" readonly name="opcao_3" class="form-control" >
          </div>
          <div class=" form-group col-sm-2 col-md-2">
              <label for="">Fila de Destino </label>
              <input value = '<?php echo $destino_op_3;?>' type="text" name="destino_op_3" class="form-control" placeholder="Destino" >
          </div>
          <div class=" form-group col-sm-2 col-md-2">
             <label for="">Opção</label>
             <input type="text" value="8" readonly name="opcao_8" class="form-control" >
          </div>
          <div class=" form-group col-sm-2 col-md-2">
              <label for="">Fila de Destino </label>
              <input value = '<?php echo $destino_op_8;?>' type="text" name="destino_op_8" class="form-control" placeholder="Destino" >
          </div>

        </div>
        <div class="mt-2 row col-sm-12 col-md-12">
          <div class=" form-group col-sm-2 col-md-2">
          </div>
          <div class=" form-group col-sm-2 col-md-2">
             <label for="">Opção</label>
             <input type="text" value="4" readonly name="opcao_4" class="form-control" >
          </div>
          <div class=" form-group col-sm-2 col-md-2">
              <label for="">Fila de Destino </label>
              <input value = '<?php echo $destino_op_4;?>' type="text" name="destino_op_4" class="form-control" placeholder="Destino" >
          </div>
          <div class=" form-group col-sm-2 col-md-2 ">
             <label for="">Opção</label>
             <input type="text" value="9" readonly name="opcao_9" class="form-control" >
          </div>
          <div class=" form-group col-sm-2 col-md-2">
              <label for="">Fila de Destino </label>
              <input value = '<?php echo $destino_op_9;?>' type="text" name="destino_op_9" class="form-control" placeholder="Destino" >
          </div>

        </div>
       
        <div class="mt-2 row col-sm-12 col-md-12">
          <div class=" form-group col-sm-2 col-md-2">
          </div>
          <div class=" form-group col-sm-2 col-md-2">
             <label for="">Opção</label>
             <input type="text" value="5" readonly name="opcao_5" class="form-control" >
          </div>
          <div class=" form-group col-sm-2 col-md-2">
              <label for="">Fila de Destino </label>
              <input value = '<?php echo $destino_op_5;?>' type="text" name="destino_op_5" class="form-control" placeholder="Destino" >
          </div>
          <div class=" form-group col-sm-2 col-md-2">
             <label for="">Opção</label>
             <input type="text" value="0" readonly name="opcao_0" class="form-control" >
          </div>
          <div class=" form-group col-sm-2 col-md-2">
              <label for="">Fila de Destino </label>
              <input value = '<?php echo $destino_op_0;?>' type="text" name="destino_op_0" class="form-control" placeholder="Destino" >
          </div>
        </div>

        <div class="mt-2 row col-sm-12 col-md-12">
            <div class="   mt-2  col-sm-2 col-md-2">
            </div>
            <div class=" form-group col-sm-4 col-md-4">
              <label for="">Numero Piloto da Ura</label>
              <input value="<?php echo  $numero_piloto;?>" type="text" name="numero_piloto_ura" class="form-control" placeholder="Destino" >
          </div>

            <div class="form-group   col-sm-4 col-md-4">
            <label for="">Selecione o Audio para a URA</label>
            <select  name="audio_selecionado" class="form-control " >
                <option select value="<?php echo $audio_carregado ?>" ><?php echo $audio_carregado.'.wav'?></option>
                <?php
                $sql = "select name from ura_audio_upload;";
                $busca = mysqli_query($conexao,$sql);
                while ($dados = mysqli_fetch_array($busca)){ // fetch_assoc é o array pela posição , 
                	//$name = $dados[0];						//mas funciona pelo nome 
                	$name = $dados['name'];
                ?>
                <option value="<?php echo $name?>"><?php echo  $name?></option>
                <?php
                }
                ?>
                </select>
            </div>
        </div>

        <div class="mb-5 row col-sm-12 col-md-12">
            <div class="mt-2  col-sm-2 col-md-2">
            </div>
            <button type="submit" class=" col-sm-8 col-md-8 btn btn-primary ">Criar Menu</button>
         
        </div>

        </form>
  </div>





</body>

</html>