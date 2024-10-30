<?php
include 'comum.php';
?>

<body>    

 <div class="container col-sm-12 col-md-8">
     <form action="consultaChamadas.php" method="GET">

        <div class="row">
        <div class="col-sm-2 col-md-2">

        </div>
            
        <div class="col-sm-8 colmd-8">

            <p class="lead ">Relatorio de Chamadas (CDR)</p>
            <label  class="" for="">Numero de Origem </label>
            <input name="numero_origem" type="text" class="form-control" id=""  placeholder="" autofocus >
            <small  class="form-text text-muted">Digite aqui o numero de origem da chamada.</small>
            
            <label for="">Numero de Destino </label>
            <input name="numero_destino" type="text" class="form-control" id=""  placeholder="" autofocus  >
            <small  class="form-text text-muted">Digite aqui o numero de destino da chamada.</small>
            
            <label for="">Data  inicial </label>
            <input  required name="data_hora_inicial"  type="text" class="form-control" id=""  placeholder="DD/MM/AAAA"  >
            <small class="form-text text-muted">Digite  a data e hora inicial desejada.</small>
            
            <label for="">Data  Final </label>
            <input required name="data_hora_final" type="text" class="form-control" id=""  placeholder="DD/MM/AAAA" >
            <small  class="form-text text-muted">Digite  a data e hora final desejada.</small>
            
            
            <label for="">Status da chamada.</label>
            <select  class="form-control  col-sm-12 col-md-12" name="status_chamada" id="">
                <option value="">Todas</option>
                <option value="ANSWERED">Atendidas</option>
                <option value="NO ANSWER">Não Atendidas</option>
                <option value="BUSY">Ocupadas</option>
            </select>
            <button type="submit" class="btn btn-primary col-sm-12 col-md-12 mt-2">Submit</button>
            
        </div>
            
        </div>
    </form>
    </div>

</body>
</html>