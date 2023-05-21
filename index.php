<?php
    $nome= 'Pablo';
    $stringa = "  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus dolorem facilis dolore excepturi eaque ad cum qui dolorum repellendus aspernatur ipsum vel autem, dolor at sapiente totam nihil provident quos! ";

    // echo str_replace( 'stringa da cambiare', 'nuova stringa', 'stringa in cui fare lo scambio');
    // echo strlen($stringa); --lunghezza stringa

    // Equivalente di console.log()
    var_dump($nome);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template PHP</title>

    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    </head>

</head>

<body>

    <h1>
        Template PHP
    </h1>

    <form action="pagina.php" method="POST">
        
        <!-- input text -->
        <div class="d-flex flex-column align-items-center mb-3">
            <label for="input-text">Input text:</label>
            <input id="input-text" type="text" placeholder="Inserisci il tuo testo" name="inputText" required>
        </div>

        <!-- input number -->
        <div class="d-flex flex-column align-items-center mb-3">
            <label for="input-number">Input mumero:</label>
            <input type="number" name="inputNumber" id="input-number">
        </div>
        
        <button type="submit" class="d-block mx-auto">
            Invia Form
        </button>

    </form>
    
</body>
</html>