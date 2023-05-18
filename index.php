<?php


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <form action="censura.php" method="GET">
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label" >inserire o scrivere un qualsiasi paragrafo</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="text"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Parola da Censurare</label>
            <input type="text" class="form-control" placeholder="" name="parolaCensura">
        </div>

        <button type="submit">INVIA</button>
    </form>
</body>
</html>