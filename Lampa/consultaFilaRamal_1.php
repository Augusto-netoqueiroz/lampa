<?php

//echo $data_hora_final = $_POST['data_hora_final'];
include 'comum.php';
include 'connect.php';

$fila_numero = $_GET['fila_numero'];
$interface = $_GET['interface'];

//select queue_name, interface, membername, penalty, uniqueid from queue_members;
$sql = "SELECT queue_name, interface,membername,penalty,uniqueid 
        FROM queue_members WHERE 
        queue_name  LIKE '%$fila_numero%' AND interface  LIKE '%$interface%'";
       
?>
<body>
<div class="row">.</div>   
<div class=" ">
    <table  class=" container table  table-hover  table-borderless " id="dataTable">
        <thead>
            <tr class="ramais_head" >
                <th>Nome da fila</th>    
                <th>Numero do Ramal</th>    
                <th>Nome do atendente</th>    
                <th>Escluir ramal da fila</th>    
            </tr>
        </thead>
        <tbody>
        <?php
        $busca = mysqli_query($conexao,$sql);
            while ($dados = mysqli_fetch_array($busca)){
                $queue_name = $dados['queue_name'];
                $interface = $dados['interface'];
                $membername = $dados['membername'];
                $uniqueid = $dados['uniqueid'];
          
                // divide a string em um arraay de duas posições
                // posição '0' contem SIP/ E A POSIÇÃO '1' O QUE TEM DEPOIS DO SIP/
                $interface=explode('/',$interface); 
                
        ?>
            <tr class="b-0">
                <td class="p-0 m-0 ramais ">
                    <p class="lead text-center"><?php echo $queue_name?></p>    
                </td>

                <td class="m-0 p-0 ramais lead text-left ">
                    <p class="lead text-center"><?php echo $interface[1]?></p>
                </td>

                <td class="m-0 p-0 ramais lead text-left ">
                    <p class="lead text-center"><?php echo $membername?></p>
                </td>
    
                <td class="ramais m-0 p-0 b-0">
                <div class="botao_editar">
                    <a href="deleteFilaRamal.php?uniqueid=<?php echo $uniqueid?>&ramal_fila=<?php echo $interface[1]?>&nome_fila=<?php echo $queue_name?>" class="btn btn-sucess btn-lg btn-block">
                    <i class="fas fa-trash-alt"></i>&nbsp;&nbsp;Deletar Ramal da  Fila</a>
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

