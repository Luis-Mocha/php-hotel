<?php

// --- Informazioni Hotel (array multidimensionale) ---
    $hotels = [
        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],
    ];

    // echo str_replace( 'stringa da cambiare', 'nuova stringa', 'stringa in cui fare lo scambio');
    // echo strlen($stringa); --lunghezza stringa

    $parking = $_GET['inputParking'];
    $vote = $_GET['inputVote'];
    $arrayGet = $_GET;

    
    // Equivalente di console.log()
    // var_dump($hotels);
    var_dump($parking);
    var_dump($vote);
    var_dump($arrayGet);
  
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio: php-hotel</title>

    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <h1 class="text-center text-uppercase">
        Scegli il tuo Hotel
    </h1>

    <!-- FORM -->
    <form action="index.php" method="GET">
        
        <!-- input parking -->
        <div class="d-flex justify-content-center">
            <label for="input-parking">Parcheggio:</label>
            <input class="ms-3" type="checkbox" name="inputParking" id="input-parking" checked>
        </div>

        <!-- input vote -->
        <div class="d-flex flex-column align-items-center mb-3">
            <label for="input-vote">Voto:</label>
            <input type="range" name="inputVote" id="input-vote" min="1" max="5" step="1">
        </div>
        
        <button type="submit" class="d-block mx-auto">
            Filtra
        </button>

    </form>

    <!-- CARD CONTAINER -->

    <?php

        if ($parking == 'on') {
                
            foreach ($hotels as $elem) {   
                if ($elem['parking']) {
                    echo "<div>" . $elem['name'] . "</div>";
                    echo "<div>" . $elem['description'] . "</div>";
                    echo "<div>" . "voto:" . $elem['vote'] . "</div>";
                    echo "<div>" . "parcheggio: Disponibile" . "</div>";
                    echo "<div>" . "distanza dal centro:" . $elem['distance_to_center'] . "Km" . "</div>" . "<br>";
                }
            } 

        } else {
            foreach ($hotels as $elem) {                

                echo "<div>" . $elem['name'] . "</div>";
                echo "<div>" . $elem['description'] . "</div>";
                echo "<div>" . "voto:" . $elem['vote'] . "</div>";

                if ($elem['parking']) {
                    echo "<div>" . "parcheggio: Disponibile" . "</div>";
                } else {
                    echo "<div>" . "parcheggio: NON disponibile" . "</div>";
                };                
                
                echo "<div>" . "distanza dal centro:" . $elem['distance_to_center'] . "Km" . "</div>" . "<br>";
            }
        };

    ?>

</body>
</html>