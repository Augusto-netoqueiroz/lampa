<?php
include 'comum.php';


?>

<body>    

    <div class="container col-sm-12 col-md-12">
        <form action="incerirFila.php" method="GET">
            <div class="form-group col-sm-12 col-md-12">
            <div class="row">
                <div class="col-sm-3 col-md-3">

                </div>

                <div class="col-sm-6 col-md-6">
                    <label  class="mt-2" for="">Nome da Fila </label>
                    <input name="piloto_fila" type="text" class="form-control" id=""  placeholder=""  required >
                    <small  class="form-text text-muted">Digite aquio o nome da fila.</small>
                    
                    <label >Music em espera </label>
                    <select name="music_on_hold" class="form-control" id="exampleFormControlSelect1">
                        <option value="default" >Default</option>
                        <option value="1" >1</option>
                        <option value="2" >2</option>
                        <option value="3" >3</option>
                    </select>
                        
                    <label >Time Out da Fila</label>
                    <select name="time_out" class="form-control " id="exampleFormControlSelect1">
                        <option value="5" >5</option>
                        <option value="10" >10</option>
                        <option value="15" >15</option>
                        <option value="20" >20</option>
                        <option value="25" >25</option>
                        <option value="30" >30</option>
                        <option value="35" >35</option>
                        <option value="40" >40</option>
                        <option value="45" >45</option>
                        <option value="50" >50</option>
                        <option value="55" >55</option>
                        <option value="60" >60</option>
                    </select>
                    
                    <label >Estrategia</label>
                    <select name="estrategia_de_ring" class="form-control" id="exampleFormControlSelect1">
                        <option value="ringall" >ringall</option>
                        <option value="random" >random</option>
                        <option value="leastrecent" >leastrecent</option>
                        <option value="rrmemory" >rrmemory</option>
                    </select>
                                
                    
                    <button type="submit" class="mt-3 btn btn-primary col-sm-12 col-md-12">Submit</button>
                </div>
            </div>
        </div>
        </form>
    </div>
</body>

</html>