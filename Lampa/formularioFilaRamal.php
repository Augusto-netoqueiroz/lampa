<?php
include 'comum.php';
include 'connect.php';

?>

<body>

    <div class="container col-sm-12 col-md-12">
        <form action="incerirFilaRamal.php" method="GET">
            <div class="row">
                <div class="col-sm-3 col-md-3">

                </div>
                <div class="form-group col-sm-6 col-md-6">
                            
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
                <option value="<?php echo $name?>"><?php echo 'Fila id : '. $name?></option>
                <?php
                }
                ?>
                </select>
                
                <label class="mt-2">Selecione o ramal para atender na fila </label>
                <select name="ramal_select" class="form-control " >
                    <option value="" >Selecionar a Ramal</option>
                    <?php
                $sql = "select name, secret, ipaddr,host,context   from sippeers;";
                $busca = mysqli_query($conexao,$sql);
                while ($dados = mysqli_fetch_array($busca)){ // fetch_assoc é o array pela posição , 
                	//$name = $dados[0];						//mas funciona pelo nome 
                	$ramal = $dados['name'];
                    
                    ?>
                <option value="<?php echo $ramal?>"><?php echo 'Ramal  : '. $ramal?></option>
                <?php
                }
                ?>
                </select>
            
            <button type="submit" class="mt-3 btn btn-primary col-sm-12 col-md-12">Submit</button>
        </div>
    </div>
    </form>
</div>

</body>
</html>