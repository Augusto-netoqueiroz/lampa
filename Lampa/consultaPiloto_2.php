<?php

//echo $data_hora_final = $_POST['data_hora_final'];
include 'comum.php';
include 'connect.php';

$fila_piloto = $_GET['fila_piloto'];
$fila_name = $_GET['fila_name'];

 
$sql = "SELECT * FROM extensions WHERE 
        exten LIKE '%$fila_piloto%' AND appdata LIKE '%$fila_name%' AND tipo_discagem='filas'";
//$sql = "SELECT * FROM extensions WHERE  tipo_discagem='filas'";
       
?>
<body>
<div class="row">.</div>   
<div class=" ">
    <table  class=" container table  table-hover  table-borderless " id="dataTable">
        <thead>
            <tr class="ramais_head" >
                <th>Piloto da Fila</th>    
                <th>Nome da Fila</th>  
                <th>Deletar</th>  
            </tr>
        </thead>
        <tbody>
        <?php
        $busca = mysqli_query($conexao,$sql);
            while ($dados = mysqli_fetch_array($busca)){
                $id = $dados['id'];
                $fila_name = $dados['appdata'];
                $fila_piloto = $dados['exten'];

                $fila_piloto=str_split($fila_piloto); // recebe o valor do exten e converte em um array
                unset($fila_piloto[0]); // retira a posição '0' do array que é o '_' da frente da discagem
                $fila_piloto=implode($fila_piloto); //monta o array de novo na string sem o '_'

                $fila_name=substr($fila_name,6); //retira a palavra 'filas,' da frente da string
                $fila_name=substr($fila_name,0,-2); //retira da string os dois ultimos caracteres ',1'
            
        ?>
            <tr class="b-0">
                <td class="m-0 p-0 ramais lead text-left ">
                    <p class="lead text-center"><?php echo $fila_piloto?></p>
                </td>

                <td class="p-0 m-0 ramais ">
                    <p class="lead text-center"><?php echo $fila_name?></p>    
                </td>

                <td class="ramais m-0 p-0 b-0">
                <div class="botao_editar">
                    <a href="deletePilotoFila.php?id=<?php echo $id?>&fila_piloto=<?php echo $fila_piloto?>&fila_name=<?php echo $fila_name?>" class="btn btn-sucess btn-lg btn-block">
                    <i class="fas fa-trash-alt"></i>&nbsp;&nbsp;Deletar Número Piloto</a>
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

