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
    <form action="index.php" method="GET" class="border rounded mx-5 p-2">
        
        <!-- input parking -->
        <div class="d-flex justify-content-center mb-4">
            <label for="input-parking">Parcheggio obbligatorio:</label>
            <input class="ms-3" type="checkbox" name="inputParking" id="input-parking" checked>
        </div>

        <!-- input vote -->
        <div class="d-flex flex-column align-items-center mb-3">
            <div>
                <span>Voto:</span>
            </div>
            <fieldset class="d-flex">
                <div class="me-3">
                    <input type="radio" id="vote1" name="inputVote" value="1">
                    <label for="vote1">1</label>
                </div>
                <div class="me-3">
                    <input type="radio" id="vote2" name="inputVote" value="2">
                    <label for="vote2">2</label>
                </div>
                <div class="me-3">
                    <input type="radio" id="vote3" name="inputVote" value="3">
                    <label for="vote3">3</label>
                </div>
                <div class="me-3">
                    <input type="radio" id="vote4" name="inputVote" value="4">
                    <label for="vote4">4</label>
                </div>
                <div class="me-3">
                    <input type="radio" id="vote5" name="inputVote" value="5">
                    <label for="vote5">5</label>
                </div>
                
            </fieldset>
        </div>
        
        <button type="submit" class="d-block mx-auto">
            Filtra
        </button>

    </form>


    <!-- CARD CONTAINER -->
    <div class="container">
        <?php

        if ($parking == 'on' && $vote) {

            foreach ($hotels as $elem) {   
                if ($elem['parking'] && $elem['vote'] >= $vote) {
                    echo "<h2>" . $elem['name'] . "</h2>";
                    echo "<div class='text-secondary fst-italic fw-light'>" . $elem['description'] . "</div>";
                    echo "<div>" . "Voto: " . $elem['vote'] . "</div>";
                    echo "<div>" . "Parcheggio: Disponibile" . "</div>";
                    echo "<div>" . "Distanza dal centro: " . $elem['distance_to_center'] . "Km" . "</div>" . "<br>";
                }
            } 

        } else if ($parking == 'on') {
            foreach ($hotels as $elem) {
                if ($elem['parking']) {
                    echo "<h2>" . $elem['name'] . "</h2>";
                    echo "<div class='text-secondary fst-italic fw-light'>" . $elem['description'] . "</div>";
                    echo "<div>" . "Voto: " . $elem['vote'] . "</div>";
                    echo "<div>" . "Parcheggio: Disponibile" . "</div>";
                    echo "<div>" . "Distanza dal centro: " . $elem['distance_to_center'] . "Km" . "</div>" . "<br>";
                }
            }
            
        } else if ($vote) {
            foreach ($hotels as $elem) {
                if ($elem['vote'] >= $vote) {
                    echo "<h2>" . $elem['name'] . "</h2>";
                    echo "<div class='text-secondary fst-italic fw-light'>" . $elem['description'] . "</div>";
                    echo "<div>" . "Voto: " . $elem['vote'] . "</div>";
                    
                    if ($elem['parking']) {
                        echo "<div" . "Parcheggio: Disponibile" . "</div>";
                    } else {
                        echo "<div>" . "Parcheggio: NON disponibile" . "</div>";
                    }; 

                    echo "<div>" . "Distanza dal centro: " . $elem['distance_to_center'] . "Km" . "</div>" . "<br>";
                }
            }
            
        }
        else {
            foreach ($hotels as $elem) {                

                echo "<h2>" . $elem['name'] . "</h2>";
                echo "<div class='text-secondary fst-italic fw-light'>" . $elem['description'] . "</div>";
                echo "<div>" . "Voto: " . $elem['vote'] . "</div>";

                if ($elem['parking']) {
                    echo "<div" . "Parcheggio: Disponibile" . "</div>";
                } else {
                    echo "<div>" . "Parcheggio: NON disponibile" . "</div>";
                };                
                
                echo "<div>" . "Distanza dal centro: " . $elem['distance_to_center'] . "Km" . "</div>" . "<hr>";
            }
        };

        ?>
    </div>

</body>
</html>