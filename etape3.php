<?php
    session_start();
    
    function genereOption($start, $nombre, $name){
        echo "<select class='custom-select col-md-10' name='$name'>";
        for ($i=$start; $i< ($start+$nombre) ; $i++) { 
            echo "<option value='$i'>Table de $i</option>";
        }
        echo '</select>';
    }



    require('view/etape3.view.php');


?>