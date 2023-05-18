<?php

$testo = $_GET['text'];
$censura = $_GET['parolaCensura'];

$nuovaStringa = str_replace($censura, '***', $testo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>censura-php-badwords</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
                <?php echo $testo . ' ' . strlen($testo)?>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
                <?php echo $nuovaStringa . ' ' . strlen($nuovaStringa)?>
            </div>
        </div>
    </div>
</body>
</html>