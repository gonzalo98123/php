<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aProductos = array();
$aProductos[] = array(
    "nombre" => "Smart TV 55\" 4K UHD",
    "marca" => "Hitachi",
    "modelo" => "554KS20",
    "stock" => 60,
    "precio" => 58000,
);
$aProductos[] = array(
    "nombre" => "Samsung Galaxy A30 Blanco",
    "marca" => "Samsung",
    "modelo" => "Galaxy A30",
    "stock" => 0,
    "precio" => 22000,
);
$aProductos[] = array(
    "nombre" => "Aire Acondicionado Split Inverter Frío/Calor Surrey 2900F",
    "marca" => "Surrey",
    "modelo" => "553AIQ1201E",
    "stock" => 5,
    "precio" => 45000,
);



//print_r($aProductos);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de productos</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
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
                        <th>Nombre</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Stock</th>
                        <th>Precio</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>
                    <?php                       
                        $sumatoriaPrecio=0;
                        for ($contador = 0; $contador < count($aProductos);$contador++) {
                        
                        $sumatoriaPrecio += $aProductos[$contador]["precio"];
                    ?>
                        <tr>
                            <td><?php echo $aProductos[$contador]["nombre"] ?></td>
                            <td><?php echo $aProductos[$contador]["marca"] ?></td>
                            <td><?php echo $aProductos[$contador]["modelo"] ?></td>
                            <td><?php echo $aProductos[$contador]["stock"] == 0 ? "No hay stock" : ($aProductos[$contador]["stock"] <= 10 ? "Poco stock" : "Hay stock"); ?></td>
                            <td><?php echo $aProductos[$contador]["precio"] ?></td>
                            <td><button class="btn btn-primary">Comprar</button></td>
                        </tr>
                    <?php                      
                        } 
                    ?>
                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="col-12">
                <p>La sumatoria de los precios de los productos es: <?php echo $sumatoriaPrecio ?></p>
            </div>
        </div>

    </main>


</body>

</html>