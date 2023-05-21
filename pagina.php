<?php
    $text= $_POST['inputText'];
    $number= $_POST['inputNumber'];

    // Equivalente di console.log()
    var_dump($text);
    var_dump($number);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seconda Pagina PHP</title>

    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>

    <div>
        <?php echo $text ?>
    </div>

    <div>
        <?php echo $number ?>
    </div>

</body>
</html>