<?php 

include 'connect.php';
include 'comum.php';



//echo $id = $_GET['id_discagem'];
//echo '<br>'; 

if (isset($_GET['nome_fila'])):
   $nome_fila = mysqli_escape_string($conexao, $_GET['nome_fila']);
  
   $sql = "SELECT name, musiconhold, timeout, queue_holdtime, retry, wrapuptime, strategy FROM queues WHERE name = '$nome_fila'";
   $consulta = mysqli_query($conexao, $sql);
   $dados = mysqli_fetch_array($consulta);
   $numero_fila = $dados['name']; // recebe o valor de exten e o divide em um array
   $musiconhold = $dados['musiconhold']; // recebe o valor de exten e o divide em um array
   $timeout = $dados['timeout'];
   $strategy = $dados['strategy'];
   



endif;
//header ('location:consultaRamal_3.php');

?>


<body>    
    


   <div class="row">

   </div>
    
    <div class="container col-sm-6 col-md-6">
        <form action="editFila.php" method="GET">
            <div class="form-group col-sm-12 col-md-12">
                                
                <label  class="mt-5" for="">Numero a ser discado</label>
                <input name="piloto_fila" type="text" class="form-control" id=""  placeholder=""   value="<?php echo $numero_fila; ?>">
                <small  class="form-text text-muted">Digite o numero a ser dicado</small>
           
                
                <label >Music em espera </label>
                    <select name="music_on_hold" class="form-control" >
                        <option selected value="<?php echo $musiconhold?>" ><?php echo $musiconhold?></option>
                        <option value="default" >Default</option>
                        <option value="1" >1</option>
                        <option value="2" >2</option>
                        <option value="3" >3</option>
                    </select>

                    <label >Time Out da Fila</label>
                    <select name="time_out" class="form-control ">
                        <option selected value="<?php echo $timeout?>" ><?php echo $timeout?></option>
                        <option value="5" >5</option>
                        <option value="10" >10</option>
                        <option value="15" >15</option>
                        <option value="20" >20</option>
                        <option value="25" >25</option>
                        <option value="30" >30</option>
                        <option value="35" >35</option>
                        <option value="40" >40</option>
                        <option value="45" >45</option>
                        <option value="50" >50</option>
                        <option value="55" >55</option>
                        <option value="60" >60</option>
                    </select>
                
                    <label >Estrategia</label>
                    <select name="estrategia_de_ring" class="form-control" >
                        <option selected value="<?echo $strategy?>" ><?php echo $strategy?></option>
                        <option value="ringall" >ringall</option>
                        <option value="random" >random</option>
                        <option value="leastrecent" >leastrecent</option>
                        <option value="rrmemory" >rrmemory</option>
                    </select>
                    <button type="submit" class=" btn btn-primary col-sm-12 col-md-12">Update</button>
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






