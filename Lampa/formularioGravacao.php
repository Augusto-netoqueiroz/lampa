<?php
include 'comum.php';

?>

<body>    
    <div class="container col-sm-12 col-md-8">
        <form action="consultaGravacao.php" method="POST">
            <div class="form-group col-sm-12 col-md-12">
                <div class="row">
                <div class="col-sm-2 col-md-2">
                </div>

                <div class="col-sm-8 col-md-8">
                    <p class="mt-2 lead ">Relatorio de Gravações</p>
                    <label class="mt-1" for="">Numero de Origem </label>
                    <input name="numero_origem" type="text" class="form-control" id=""  placeholder="" autofocus >
                    <small  class="form-text text-muted">Digite aqui o numero de origem da chamada.</small>
                    
                    <label for="">Numero de Destino </label>
                    <input name="numero_destino" type="text" class="form-control" id=""  placeholder="" autofocus >
                    <small  class="form-text text-muted">Digite aqui o numero de destino da chamada.</small>
                    
                    <label for="">Data inicial </label>
                    <input  name="data_hora_inicial"  type="text" class="form-control" id=""  placeholder="DD/MM/AAAA" required>
                    <small  class="form-text text-muted">Digite a data e hora inicial desejada.</small>
                    
                    <label for="">Data Final </label>
                    <input name="data_hora_final" type="text" class="form-control" id=""  placeholder="DD/MM/AAAA" required>
                    <small  class="form-text text-muted">Digite a data e hora final desejada.</small>
                    <button type="submit" class="btn mt-3  btn-primary col-sm-12 col-md-12">Submit</button>
                </div>
            </div>
        </div>
        </form>
    </div>
    

</body>

</html>