<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeros del 1 al 100</title>
</head>

<body>

    <?php

    for ($i = 2; $i <= 100; $i+=2) {
        echo '<p>' . $i . '</p>';
        if ($i == 60) {
            break;
        }
    }

    ?>
</body>

</html>