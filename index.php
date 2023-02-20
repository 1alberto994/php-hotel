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
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP HOTEL</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    
</head>
<body>
    <div>
    <?php
     foreach($hotels as $hotel){
        echo '<div>' ;  
        echo '<ul>';
        echo '<li>';
       echo   $hotel['name'];
       echo '</li>';
       echo '</ul>';
       echo '</div>';

       echo '<div>' ;  
       echo '<ul>';
       echo '<li>';
       echo $hotel['description'];
      echo '</li>';
      echo '</ul>';
      echo '</div>';

      echo '<div>' ;  
      echo '<ul>';
        echo '<li>';
        echo $hotel['vote'];
       echo '</li>';
       echo '</ul>';
       echo '</div>';
       
       
    }
       
            
            
        ;
        ?>
    </div>
    
        

</body>
</html>