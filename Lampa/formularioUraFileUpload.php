<?php
include 'comum.php';

?>

<body>    


    <div class="container col-sm-12 col-md-12">
        <form action="inserirAudioFile.php" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-sm-3 col-md-3">
                    </div>
                    <div class="form-group col-sm-6 col-md-6">
                        <label for=""></label>
                        <input name="file" type="file" class="form-control-file"  id="InputFile" >
                        <button type="submit" class="mt-3 btn btn-primary col-sm-12 col-md-12">Enviar</button>
                    </div>
            </div>
        </form>
    </div>
</body>

</html>