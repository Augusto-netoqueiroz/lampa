<?php

//echo $data_hora_final = $_POST['data_hora_final'];
include 'comum.php';
include 'connect.php';

//$exten = $_GET['exten'];
//$contexto = $_GET['contexto'];
 
$sql = "SELECT * FROM  ura_audio_upload";
        //between ja tem o like imbutido 
?>
<body>
<div class="row">.</div>   
<div class=" ">
    <table  class=" container table  table-hover  table-borderless " id="dataTable">
        <thead>
            <tr class="ramais_head" >
                <th>Nome</th>    
                <th>Tamanho</th>    
                <th>Tipo</th>    
                <th>Location</th>    
                <th>Delete</th>  
            </tr>
        </thead>
        <tbody>
        <?php
        $busca = mysqli_query($conexao,$sql);
            while ($dados = mysqli_fetch_array($busca)){
                $id = $dados['id'];
                $name = $dados['name'];
                $size = $dados['size'];
                $type = $dados['type'];
                $location = $dados['location'];
      
        ?>
            <tr class="b-0">
                <td class="p-0 m-0 ramais ">
                    <p class="lead text-center"><?php echo $name?></p>    
                </td>
                
                <td class="m-0 p-0 ramais lead text-left ">
                    <p class="lead text-center"><?php echo $size?></p>
                </td>
                <td class="m-0 p-0 ramais lead text-left ">
                    <p class="lead text-center"><?php echo $type?></p>
                </td>

                <td class="m-0 p-0 ramais lead text-left ">
                    <p class="lead text-center"><?php echo $location?></p>
                </td>

                <td class="ramais m-0 p-0 b-0">
                <div class="botao_editar">
                <a href="deleteAudioUra.php?id=<?php echo $id;?>&arquivo=<?php echo $name;?>" class="btn btn-sucess btn-lg btn-block">
                    <i class="fas fa-trash-alt"></i>&nbsp;&nbsp;Deletar Arquivo</a>
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

