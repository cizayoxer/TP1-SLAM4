<?php
    $nb = $_POST['count'];

    $phrase = $_POST['sentence'];

    echo "<div class='tableau'>";

    for($i=0; $i<$nb; $i++){
        echo $phrase . "<br>";
    }
    echo "</div>";