<?php
    $tvalor = (float)$_GET['txtvalor'];
    $thoras = (float)$_GET['txthoras'];
    $tgrat = (float)$_GET['txtgrat'];
   
    $total = $tvalor * $thoras + $tgrat;
    
    echo "O resultado é: ", + $total, " Reais" ;

?>
