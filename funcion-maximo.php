<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function maximo($aVector){

    $valorMaximo = 0;

    for ($i = 0 ; $i<count($aVector) ;$i++){

        if ($valorMaximo < $aVector[$i]){
            $valorMaximo = $aVector[$i];
        }

    }
    return $valorMaximo;
}

$aNotas = array(8,4,5,3,1,2);
$aSueldo = array(800.30,400.87,500.45,300,900.70,100,900,1800);

echo "La nota maxima es:" . maximo($aNotas) . "<br>";
echo "El sueldo maximo es:" . maximo($aSueldo);

?>
