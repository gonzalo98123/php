<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function calcularPromedio($aNotas){

    $cantidadNotas = count($aNotas);
    $sumaNotas=0;

    for( $i=0; $i<$cantidadNotas ; $i++){
        $sumaNotas = $sumaNotas + $aNotas[$i];
    }
    $promedio = $sumaNotas / count($aNotas);
    return $promedio;
    
}

$aNotasAlumno = array();
$aNotasAlumno[]=8;
$aNotasAlumno[]=4;
$aNotasAlumno[]=5;
$aNotasAlumno[]=3;
$aNotasAlumno[]=9;
$aNotasAlumno[]=1;

echo 'El promedio del alumno es: ' . calcularPromedio($aNotasAlumno);
    
?>
