<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_POST) {
    $usuario = $_POST['txtUsuario'];
    $contraseña = $_POST['txtPass'];

    if ($usuario == 'gonzalo' && $contraseña == 'gon140498') {
        header("location: bienvenido.php");
    } else {
        $msg = "Solo para usuarios registrados";
    }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>index</title>
</head>

<body>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>FORMULARIO</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">

                <?php if (isset($msg)) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $msg; ?>
                    </div>
                <?php endif; ?>


                <form action="" method="POST">
                    <div>
                        <label for="">Usuario: </label>
                        <input type="text" class="form-control" name="txtUsuario" id="txtUsuario">
                    </div>
                    <div class="p4">
                        <label for="txtClave">Clave:</label>
                        <input type="password" class="form-control" name="txtPass" id="txtPass">
                    </div>
                    <div class="me-auto text-right">
                        <button type="sumbit" class="btn btn-primary"> Ingresar</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>

</html>