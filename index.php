<?php

$datiFiltrati = [];

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

// questo lo utilizzo per formattare il risultato della ricrca tramite var dump
// echo "<pre>";
// var_dump($hotels);
// echo "</pre>";

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>php-hotel</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <div class="bg-success min-vh-100">
        <div class="container pt-5">
            <h1 class="py-2 text-center text-light">Elenco Hotel</h1>
            <div class="py-5">
                <div class="row justify-content-center">
                    <div class="col-5">
                        <form action="" method="get">
                            <div class="pb-3">
                                <label for="exampleInputEmail1" class="form-label">Parcheggio</label>
                                <input type="input" class="form-control" id="" aria-describedby="emailHelp" name="parking">
                            </div>
                            <button type="reset" class="btn btn-primary">Cancella</button>
                            <button type="submit" class="btn btn-primary">Cerca</button>
                        </form>
                    </div>
                </div>
            </div>
            <table class="table text-center bg-light rounded">
                <thead>
                    <th>Nome Hotel</th>
                    <th>Dettagli</th>
                    <th>Parcheggio</th>
                    <th>Voto</th>
                    <th>Distanza dal Centro</th>
                </thead>
                <tbody>
                    <?php
                    foreach ($hotels as $listaHotel) {
                    ?>
                        <tr>
                            <td><?php echo $listaHotel["name"] ?></td>
                            <td><?php echo $listaHotel["description"] ?></td>
                            <td><?php echo $listaHotel["parking"] ?></td>
                            <td><?php echo $listaHotel["vote"] ?></td>
                            <td><?php echo $listaHotel["distance_to_center"] ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>


</body>

</html>