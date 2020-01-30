<?php

    function multiplication($nombre){
        echo ' <div class="card col-md-4">
        <div class="card-header">Table '.$nombre.'</div>
        <div class="card-body text-center">';
        for ($i=1; $i <= 10; $i++) { 
            echo $nombre.' x '.$i.' = '.$nombre*$i.'<br>';
        }

        echo '</div>
        </div>';
    }

    function checkboxPerso($nombre, $start){
        for ($i=$start; $i < ($nombre+$start) ; $i++) { 
            echo "<div class='custom-control custom-switch pb-3'>
                    <input type='checkbox' class='custom-control-input' id='customSwitch$i' name='customSwitch$i' value='$i'>
                    <label class='custom-control-label' for='customSwitch$i'>Table de $i</label>
                </div>";
        }
    }

    function affichageMultiplication($name){
        if (isset($_POST[$name])) {
            for ($i=1; $i <= 10 ; $i++) { 
                if (isset($_POST['customSwitch'.$i])) {
                   $value = $_POST['customSwitch'.$i];
                   multiplication($value);
                }
            }
        }
    }  



    require('view/etape2.view.php');


?>