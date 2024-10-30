<?php

//echo $data_hora_final = $_POST['data_hora_final'];
include 'comum.php';
include 'connect.php';

$fila_numero = $_GET['fila_numero'];

 
$sql = "SELECT name, musiconhold,timeout,queue_holdtime,retry,wrapuptime,strategy
        FROM queues WHERE 
        name LIKE '%$fila_numero%'";
       
?>
<body>
<div class="row">.</div>   
<div class=" ">
    <table  class=" container table  table-hover  table-borderless " id="dataTable">
        <thead>
            <tr class="ramais_head" >
                <th>Número  da Fila</th>    
                <th>MOH</th>    
                <th>Time Out(agentes)</th>    
                <!-- <th>Queue Hold Time</th>     -->
                <!-- <th>Retry</th>     -->
                <!-- <th>Wrap up time</th>   -->
                <th>Strategia</th>
                <th>Editar</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $busca = mysqli_query($conexao,$sql);
            while ($dados = mysqli_fetch_array($busca)){
                $name = $dados['name'];
                $musiconhold = $dados['musiconhold'];
                $timeout = $dados['timeout'];
                $queue_holdtime = $dados['queue_holdtime'];
                $retry = $dados['retry'];
                $wrapuptime = $dados['wrapuptime'];
                $strategy = $dados['strategy'];
                                
            
        ?>
            <tr class="b-0">
                <td class="p-0 m-0 ramais ">
                    <p class="lead text-center"><?php echo $name?></p>    
                </td>

                <td class="m-0 p-0 ramais lead text-left ">
                    <p class="lead text-center"><?php echo $musiconhold?></p>
                </td>

                <td class="m-0 p-0 ramais lead text-left ">
                    <p class="lead text-center"><?php echo $timeout?></p>
                </td>

                <!-- <td class="m-0 p-0 ramais lead text-left ">
                    <p class="lead text-center"><?php echo $queue_holdtime?></p>
                </td>

                <td class="m-0 p-0 ramais lead text-left ">
                    <p class="lead text-center"><?php echo $retry?></p>
                </td>

                <td class="m-0 p-0 ramais lead text-left ">
                    <p class="lead text-center"><?php echo $wrapuptime?></p>
                </td> -->

                <td class="m-0 p-0 ramais lead text-left ">
                    <p class="lead text-center"><?php echo $strategy?></p>
                </td>
    
                <td class="ramais m-0 p-0 b-0">
                <div class="botao_editar">
                    <a href="editarFila.php?nome_fila=<?php echo $name?>" class="btn btn-sucess btn-lg btn-block">
                    <i class="fas fa-pencil-alt"></i>&nbsp;&nbsp;Editar Fila</a>
                </div>
                </td>
            </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
</div>
</body>

