<?php

//echo $data_hora_final = $_POST['data_hora_final'];
include 'comum.php';
include 'connect.php';
$numero_origem =  $_POST['numero_origem'];
$numero_destino = $_POST['numero_destino'];

//$data_hora_inicial = $_POST['data_hora_inicial'];
$data_hora_inicial=explode('/',$data_hora_inicial = $_POST['data_hora_inicial']);
$data_hora_inicial[0]; 
$data_hora_inicial[1]; 
$data_hora_inicial[2]; 
$data_hora_inicial=$data_hora_inicial[2].'-'.$data_hora_inicial[1].'-'.$data_hora_inicial[0];
$data_hora_inicial = $data_hora_inicial.' 00:00:00';

//$data_hora_final = $_POST['data_hora_final'];
$data_hora_final=explode('/',$data_hora_final = $_POST['data_hora_final']);
$data_hora_final[0];
$data_hora_final[1];
$data_hora_final[2];
$data_hora_final=$data_hora_final[2].'-'.$data_hora_final[1].'-'.$data_hora_final[0];
$data_hora_final=$data_hora_final.' 00:00:00';

//SÓ RETORNA COM STATUS ANSWERED , POIS SÓ GRAVA SE FOR ATENDIDA
$sql = "SELECT calldate,src,dst,duration,billsec,disposition,uniqueid
        FROM cdr WHERE 
        disposition = 'ANSWERED' AND
        src LIKE '%$numero_origem%' AND
        dst LIKE '%$numero_destino%' AND
        calldate BETWEEN '$data_hora_inicial' AND '$data_hora_final'";
        
?>

<body>
    <div class="row">.</div>
    <div class="">

        <table class=" container table table-hover  table-striped table-sm " id="dataTable">
            <thead>
                <tr>
                    <td>Data e Hora</td>    
                    <td>Origem</td>    
                    <td>Destino</td>    
                    <td>Duracao</td>    
                    <td>Atendimento</td>    
                    <td>unique ID</td>    
                    <td>Gravacao</td>    
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
                $uniqueid = $dados['uniqueid'];
                $uniqueid_total = $dados['uniqueid'];
            //$dados = mysqli_fetch_array($dados);
            //var_dump($dados);
            ?>
            <tr>
                <td><?php echo $calldate?></td>
                <td><?php echo $src?></td>
                <td><?php echo $dst?></td>
                <td><?php echo $duration?></td>
                <td><?php echo $bilsec?></td>
                <!-- retira do uniqueid os 3 caracteres deposi do '.' pois o modal não abre com caractere após o '.'-->
                <?php  $uniqueid=substr_replace($uniqueid,"",-4)?>
                
                <td><?php echo $uniqueid_total?></td>
                <td>
                    <button type="button" class="btn btn-primary btn-block"  data-toggle="modal" data-target="#modal<?php echo $uniqueid ?>"><i class="far fa-play-circle"></i></button>
                        <div class="col-12 ">
                            <div id="modal<?php echo $uniqueid?>" class="modal fade">
                                <div class="modal-dialog " role="document">
                                    <div class="modal-content">
                                        <div class="header">
                                            <h5 class="modal-title p-3">Ouvir chamada id : <?php echo $uniqueid_total;?></h5>
                                            <div class="modal-body">
                                             
                                                    <audio  controls>
                                                    <!-- <source src="/var/spool/asterisk/monitor/<?php echo $dados ['uniqueid'];?>.wav" type="audio/wav"> -->
                                                        <source src="rec/<?php echo $uniqueid_total;?>.wav" type="audio/wav">
                                                    </audio>
                                                
                                            </div>
                                            <div class="modal-footer">
                                               
                                                <button class="btn btn-primary btn-block" data-dismiss="modal" type="button">Fechar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
            </tr>
        <?php
           }
        ?>
        </table>
        
        </tbody>
    </div>

</body>    

