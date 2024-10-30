<?php

//echo $data_hora_final = $_POST['data_hora_final'];
include 'comum.php';
include 'connect.php';
$numero_origem = $_GET['numero_origem'];
$numero_destino =$_GET['numero_destino'];
$status_chamada =$_GET['status_chamada'];
//$data_hora_inicial = $_POST['data_hora_inicial'];
$data_hora_inicial= explode('/',$data_hora_inicial = $_GET['data_hora_inicial']);
$data_hora_inicial[0];
$data_hora_inicial[1];
$data_hora_inicial[2];
$data_hora_inicial= $data_hora_inicial[2].'-'.$data_hora_inicial[1].'-'.$data_hora_inicial[0];
$data_hora_inicial=$data_hora_inicial.' 00:00:00';  //como usa o betwenn tem que concatenar com a hora deixar com espa�o na hora

//$data_hora_final = $_POST['data_hora_final'];
$data_hora_final= explode('/',$data_hora_final = $_GET['data_hora_final']);
$data_hora_final[0];
$data_hora_final[1];
$data_hora_final[2];
$data_hora_final= $data_hora_final[2].'-'.$data_hora_final[1].'-'.$data_hora_final[0];
$data_hora_final=$data_hora_final.' 00:00:00'; //como usa o betwenn tem que concatenar com a hora deixar com espa�o na hora

///////////-- QUANDO RECEBER D , � ANSWERED/////
///////////-- QUANDO RECEBER NO , � NO ANSWER/////
///////////-- QUANDO RECEBER BUSY , � BUSY/////
$sql = "SELECT calldate,src,dst,duration,billsec,disposition,uniqueid
        FROM cdr WHERE 
        src LIKE '%$numero_origem%' AND
        dst LIKE '%$numero_destino%' AND
        disposition LIKE '%$status_chamada%' AND 
        calldate BETWEEN '$data_hora_inicial' AND '$data_hora_final'";
     

?>
<body>
<div class="row container ">.</div>   
<div class="">
    <table class=" container table  table-hover table-striped " id="dataTable">
        <thead>
            <tr>
                <td>Data e Hora</td>    
                <td>Origem</td>    
                <td>Destino</td>    
                <td>Duração</td>    
                <td>Atendimento</td>    
                <td>Tempo de Ring</td>    
                <td>Status</td>    
               
            </tr>
        </thead>
    <tbody>
    <?php
    $busca = mysqli_query($conexao,$sql);
        while ($dados = mysqli_fetch_array($busca)){
            $calldate = $dados['calldate'];
            $src = $dados['src'];
            $dst = $dados['dst'];
            $duration = $dados['duration'];
            $bilsec = $dados['billsec'];
            $disposition = $dados['disposition'];
            $TempoDeRing= ($duration-$bilsec);
        //$dados = mysqli_fetch_array($dados);
        //var_dump($dados);
         
            switch ($disposition) {
                case "ANSWERED": // 
                    $disposition='ATENDIDA';
                break;
                    
                case "NO ANSWER":  // 
                    $disposition='NAO ATENDIDA';
                break;
                case "BUSY":  // 
                    $disposition='OCUPADA';
                break;
 		        case "FAILED":  // 
                    $disposition='CHAMADA-FALHOU';
                break;
            }
        
    ?>


        
        <tr class="b-0">
            <td><?php echo $calldate?></td>
            <td><?php echo $src?></td>
            <td><?php echo $dst?></td>
            <td><?php echo $duration?></td>
            <td><?php echo $bilsec?></td>
            <td><?php echo $TempoDeRing?></td>
            <td><?php echo $disposition?></td>
        </tr>
    <?php
       }
    ?>
    </tbody>
    
    </table>
</div>

</body>

