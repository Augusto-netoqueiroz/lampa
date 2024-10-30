<?php

include 'comum.php';
include 'connect.php';

?>


<body>    
    
    <div class="container col-sm-12 col-md-12">
              
            <form action="incerirPilotoFila.php" method="POST">
            <div class="row">
            <div class="col-sm-3 col-md-3">
             </div>
           
            <div class="form-group col-sm-6 col-md-6">
                  <label  class="mt-5" for="">Discagem para a Fila : </label>
                  <input name="discagem" type="text" class="form-control" id=""  placeholder="" autofocus required>
                  <small  class="form-text text-muted">Numero que vai ser destinado a fila selecionada abaixo</small>
                
                
                  <label class="mt-2">Selecione a fila de atendimento </label>
                  <select name="fila_select" class="form-control " >
                  <option value="" >Selecionar a Fila</option>
                  <?php
                  $sql = "select name from queues;";
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
                  
                
                  <label for="exampleFormControlSelect1">Vincular aos ramais do  contexto </label>
                  <select name="contexto_discagem" class="form-control" id="exampleFormControlSelect1">
                  <option value="phones" >phones</option>
                  <option value="phones-local" >phones-local</option>
                  <option value="phones-local-celular" >phones-local-celular</option>
                  <option value="phones-ddd-fixo" >phones-ddd-fixo</option>
                  <option value="phones-ddd-fixo-celular" >phones-ddd-fixo-celular</option>
                  <option value="phones-ddi" >phones-ddi</option>
                  </select>
                  <small  class="form-text text-muted">Para usar essa regra o ramal deve estar no contexto selecionado</small>
                  <button type="submit" class="btn btn-primary col-sm-12 col-md-12">Submit</button>
                
              </div>
              </div>
          </form>
      </div>


    


<!-- 
<script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="bootstrap/js/popper.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script> -->


</body>
<!-- os scrips vem do comum.php -->
</html>