<?php

    function multiplication($nombre){
        echo ' <div class="card col-md-4" style="margin-left:650px;margin-top:-260px;">
        <div class="card-header"><a href="etape1.php"><img src="style/retour.png" height="30" width="30"></a>Table '.$nombre.'</div>
        <div class="card-body text-center">';
        for ($i=1; $i <= 10; $i++) { 
            echo $nombre.' x '.$i.' = '.$nombre*$i.'<br>';
        }

        echo '</div>
        </div>';
    }

    function genereOption($start, $nombre, $name){
        echo "<select class='custom-select col-md-10' name='$name'>";
        for ($i=$start; $i< ($start+$nombre) ; $i++) { 
            echo "<option value='$i'>Table de $i</option>";
        }
        echo '</select>';
    }



    require('view/etape1.view.php');


?>