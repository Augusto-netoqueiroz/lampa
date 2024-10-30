<?php
include 'comum.php';
include 'connect.php';
?>

<body>    



    <div class="container col-sm-12 col-md-12">
        <form action="consultaPiloto_2.php" method="GET">
          <div class="row">
          <div class="col-sm-3 col-md-3">

          </div>
      
            <div class="form-group col-sm-6 col-md-6">
              <label  class="mt-5" for="">Consultar numero Piloto...</label>
              <input  name="fila_piloto" type="text" class="form-control" id=""  placeholder="" autofocus >
              <small  class="form-text text-muted">Digite aqui o numero piloto para ser excluido.</small>
              
              <label class="mt-4">Selecione a fila de atendimento </label>
              <select name="fila_name" class="form-control " >
              <option value="" >Selecionar a Fila</option>
                <?php
                $sql = "select name from queues;";
                $busca = mysqli_query($conexao,$sql);
                while ($dados = mysqli_fetch_array($busca)){ // fetch_assoc é o array pela posição , 
                  //$name = $dados[0];						//mas funciona pelo nome 
                  $name = $dados['name'];
                  
                  ?>
                <option value="<?echo $name?>"><?php echo 'Fila id : '. $name?></option>
                <?php
                }
                ?>
              </select>
              <small  class="form-text text-muted">Selecionar a fila para pesquisa.</small>
         
              <button type="submit" class="btn btn-primary col-sm-12 col-md-12">Consultar</button>
            </div>
            </div>
        </form>
    </div>


<?php

?>

<!-- 
<script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="bootstrap/js/popper.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script> -->


</body>
<!-- os scrips vem do comum.php -->
</html>