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

    // Equivalente di console.log()
    var_dump($hotels);
    echo in_array('parking', $hotels[0]);
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

</head>

<body>

    <h1 class="text-center text-uppercase">
        Scegli il tuo Hotel
    </h1>

    <div class="container">

        <div class="card text-center">
            <div class="card-body">
                <h2 class="card-title">
                    <?php echo $hotels[0]["name"]?>
                </h2>
                <p class="card-subtitle mb-2 text-body-secondary">
                    <?php echo $hotels[0]["description"]?>
                </p>
                
                <div class="card-text">
                    Voto: <?php echo $hotels[0]["vote"]?>
                </div>

                <div class="d-flex justify-content-evenly">
                    <div class="card-text d-flex flex-column">
                        <span>
                            Parcheggio: 
                        </span>
                        <?php echo $hotels[0]["parking"]?>
                    </div>
                    <div class="card-text d-flex flex-column">
                        <span>
                            Distanza dal centro:
                        </span>
                        <?php echo $hotels[0]["distance_to_center"]?>
                    </div>
                </div>

                <!-- <?php echo in_array('parking', $hotels[2]) ?> -->
                
            </div>
        </div>

    </div>

    <form action="pagina.php" method="POST">
        
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
    
</body>
</html>