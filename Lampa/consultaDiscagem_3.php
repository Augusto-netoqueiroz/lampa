<?php

//echo $data_hora_final = $_POST['data_hora_final'];
include 'comum.php';
include 'connect.php';

$exten = $_GET['exten'];
$contexto = $_GET['contexto'];

//criada uma nova coluna (chamada_gravada)para flag 
//buscando pelo flag ramal de tipo_discagem, ele vai trazer todos os ramais gravados ou não
//aqui ele busca por um valor diferente do app MixMonitor para não gerar linha duplicada e com o caminho todo 
// onde esta a gravacao 
$sql = "SELECT id, context, exten, priority, app, appdata, chamada_gravada
        FROM extensions WHERE 
        context LIKE '%$contexto%' AND
        exten LIKE '%$exten%'AND 
        app != 'MixMonitor' AND 
        tipo_discagem = 'ramal'";
        //between ja tem o like imbutido 
?>
<body>
<div class="row">.</div>   
<div class=" ">
    <table  class=" container table  table-hover  table-borderless " id="dataTable">
        <thead>
            <tr class="ramais_head" >
                <th>Contexto Gravado</th>    
                <th>Chamada a ser gravado</th>    
                <th>Conta Sip a ser gravada</th>    
                <th>Habilitar/Desabilitar Gravacao</th>  
            </tr>
        </thead>
        <tbody>
        <?php
        $busca = mysqli_query($conexao,$sql);
            while ($dados = mysqli_fetch_array($busca)){
                $id = $dados['id'];
                $context = $dados['context'];
                $app = $dados['app'];
                $priority = $dados['priority'];
                $chamada_gravada = $dados['chamada_gravada'];
                $context = $dados['context'];
                                
                $exten = str_split($dados['exten']); // recebe o valor de exten e o divide em um array
                unset($exten[0]);  // exclui a posição zero que o '_' que vem do banco na frente do numero 
                $exten=implode($exten); // junta os valores do array em uma string novamete
                
                //SIP/101,120
                //código linpa qdo é discagem interna 
                $appdata = str_split ($dados['appdata']); // recebe o valor de exten e o divide em um array
                unset($appdata[0]); // exclui a posição zero que o 'S' de SIP/ que vem do banco na frente do numero 
                unset($appdata[1]); // exclui a posição UM que o   'I' de SIP/ que vem do banco na frente do numero 
                unset($appdata[2]); // exclui a posição DOIS que o 'P' de SIP/ que vem do banco na frente do numero 
                unset($appdata[3]); // exclui a posição TRES que o '/' de SIP/ que vem do banco na frente do numero 
                $appdata=implode($appdata);
                //RESTOU - 101,120
                $appdata=substr_replace($appdata ,"", -4); // retira do final da string o valor ",120"
                    
                
                //código limpa qdo é discagem externa "sip trunk"
                //exclui tudo após o caracter '}', limpesa para pegar só o digito prefixado
                $digitos_excluidos = substr($appdata, 0, strpos($appdata, "}"));
                
                //exclui tudo antes  do caracter '@'
                //limpesa para aparecer só endereço ip do peer
                $encontrar = ':';
                $digit_strip =$digitos_excluidos;
                $encontrado = stripos($digit_strip, $encontrar);
                if ($encontrado === false) {
                     $digit_strip;
                }else{
                     $digit_strip =  stristr($digit_strip, ':');
                     $digit_strip = (substr($digit_strip,1));
                }
                
                //código limpa qdo é discagem externa "sip trunk"
                //exclui tudo após o caracter '$', limpesa para pegar só o digito prefixado
                $digitos_inseridos = substr($appdata, 0, strpos($appdata, "$"));
                
                //exclui tudo antes  do caracter '@'
                //limpesa para aparecer só endereço ip do peer
                $encontrar = '@';
                $ip_peer =$appdata;
                $encontrado = stripos($ip_peer, $encontrar);
                if ($encontrado === false) {
                     $ip_peer;
                }else{
                     $ip_peer =  stristr($ip_peer, '@');
                     $ip_peer = (substr($ip_peer,1));
                }

        ?>
            <tr class="b-0">
                <td class="p-0 m-0 ramais ">
                    <p class="lead text-center"><?php echo $context?></p>    
                </td>
                
                <td class="m-0 p-0 ramais lead text-left ">
                    <p class="lead text-center"><?php echo $exten?></p>
                </td>
                <!-- <td class="m-0 p-0 ramais lead text-left ">
                    <p class="lead text-center"><?php echo $priority?></p>
                </td> -->

                <!-- <td class="m-0 p-0 ramais lead text-left ">
                    <p class="lead text-center"><?php echo $digitos_inseridos?></p>
                </td> -->

                <td class="m-0 p-0 ramais lead text-left ">
                    <p class="lead text-center"><?php echo $ip_peer?></p>
                </td>
                <td class="ramais m-0 p-0 b-0">
                <div class="botao_editar">
                <?php
                    //echo $chamada_gravada;
                    switch ($chamada_gravada){
                    case '':
                 ?>
                
                <a href="habilitaGravacao.php?habilita=ok&id_discagem=<?php echo $id;?>&exten=<?php echo $exten;?>&context=<?php echo $context?>" class="btn btn-sucess btn-lg btn-block">
                <i class="fas fa-thumbs-up"></i>&nbsp;&nbsp;Habilita Gravacao</a>
                
                
                <?php
                break;
                case 'nao':
                    
                ?>

                <a href="habilitaGravacao.php?habilita=ok&id_discagem=<?php echo $id;?>&exten=<?php echo $exten;?>&context=<?php echo $context?>" class="btn btn-sucess btn-lg btn-block">
                <i class="fas fa-thumbs-up"></i>&nbsp;&nbsp;Habilita Gravacao</a>


                <?php       

                
                        break;
                        case 'stn_gravado':
                ?>        

                <a href="habilitaGravacao.php?habilita=no&id_discagem=<?php echo $id;?>&exten=<?php echo $exten;?>" class="btn btn-sucess btn-lg btn-block">
                <i class="  fas fa-thumbs-down"></i>&nbsp;&nbsp;Desabilita Gravacao</a>

                 <?php
                         break;
                     }
                 ?>



                
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

