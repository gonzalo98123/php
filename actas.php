<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aAlumnos = array();

$aAlumnos[] = array("Alumno" => "Ana Valle", "notas" => array(7,8));
$aAlumnos[] = array("Alumno" => "Berbabe Paz", "notas" => array(5,7));
$aAlumnos[] = array("Alumno" => "Sebastian Aguirre", "notas" => array(6,9));
$aAlumnos[] = array("Alumno" => "Monica Ledesma", "notas" => array(8,9));

function calcularPromedio($aNotas){

    $cantidadNotas = count($aNotas);
    $sumaNotas=0;

    for( $i=0; $i<$cantidadNotas ; $i++){
        $sumaNotas = $sumaNotas + $aNotas[$i];
    }
    $promedio = $sumaNotas / count($aNotas);
    return $promedio;
    
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <title>Actas</title>
</head>
<body>

<main class="container">

<div class="col12 text-center py-5">
    <h1>LISTADO DE PRODUCTOS</h1>
</div>

<div class="col12">
    <table class="table table-hover border">
        <thead>
            <tr>
                <th>Alumno</th>
                <th>Nota 1</th>
                <th>Nota 2</th>
                <th>Promedio</th>
            </tr>
        </thead>
        <tbody>
            <?php                       
                foreach($aAlumnos as $alumno){   
                $promedio = calcularPromedio($alumno["notas"]);
            ?>
                <tr>
                    <td><?php echo $alumno["Alumno"]; ?></td>
                    <td><?php echo $alumno["notas"][0]; ?></td>
                    <td><?php echo $alumno["notas"][1]; ?></td>         
                    <td><?php echo number_format($promedio, 2, ",", "."); ?></td>                
                </td>
                    
                </tr>
            <?php                      
                } 
            ?>
        </tbody>
    </table>
</div>
<div class="row">
    <div class="col-12">
        <p> </p>
    </div>
</div>

</main>
    
</body>
</html>