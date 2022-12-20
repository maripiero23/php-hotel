<?php

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

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Php Mondiali</title>

  <!-- Third party libraries -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

  <!-- Custom css -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center my-3 text-danger">Lista Hotels</h1>

        <table class="table">
  <thead>
    <tr>
      <th scope="col" class="text-center">Nome Hotel</th>
      <th scope="col" class="text-center">Descrizione</th>
      <th scope="col" class="text-center">Parcheggio</th>
      <th scope="col" class="text-center">Voto</th>
      <th scope="col" class="text-center">Distanza dal centro</th>

    </tr>
  </thead>
  <tbody>


    <?php
    foreach ($hotels as $hotel) {
    ?>
        
        <tr>
            <td class="text-center"><?php echo $hotel["name"] ?></td>
            <td class="text-center"><?php echo $hotel["description"] ?></td>
            <td class="text-center"><?php echo $hotel["parking"] ?></td>
            <td class="text-center"><?php echo $hotel["vote"] ?></td>
            <td class="text-center"><?php echo $hotel["distance_to_center"] ?></td>
        </tr>
        <?php
        }
        ?>
    

  </tbody>


    </div>
</body>





















<!-- $parole = ["boolean", "corso", "studenti"];

var_dump($_GET);

if(empty($_GET["word"])){
    echo "Inserisci una parola con chiave <strong>word</strong>";
}else

    if(in_array($_GET["word"], $parole)){
        echo "parola giusta";
    }else{
        echo "ritenta";
    }


?> -->