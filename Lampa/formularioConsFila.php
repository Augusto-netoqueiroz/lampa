<?php
include 'comum.php';

?>

<body>    

    <div class="container col-sm-12 col-md-12">
        <form action="consultaFila_1.php" method="GET">
            <div class="row">
                <div class="col-sm-3 col-md-3">
                    
                </div>
                <div class="form-group col-sm-6 col-md-6">
                    <label  class="mt-5" for="">Consultar filas  com ...</label>
                    <input  name="fila_numero" type="text" class="form-control" id=""  placeholder="" autofocus >
                    <small  class="form-text text-muted">Digite aqui .</small>
                    
                    <button type="submit" class="btn btn-primary col-sm-12 col-md-12">Consultar</button>
                </div>
            </div>
        </form>
    </div>



</body>

</html>